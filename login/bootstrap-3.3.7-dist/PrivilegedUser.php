<?php
class PrivilegedUser extends User
{
    private $roles;

    public function __construct() {
        parent::__construct();
    }

    // override User method
    public static function getByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $sth = $GLOBALS["DB"]->prepare($sql);
        $sth->execute(array(":username" => $username));
        $result = $sth->fetchAll();

        if (!empty($result)) {
            $privUser = new PrivilegedUser();
            $privUser->id = $result[0]["id"];
            $privUser->username = $username;
            $privUser->password = $result[0]["password"];
            /*$privUser->email_addr = $result[0]["email_addr"];*/
            $privUser->initRoles();
            return $privUser;
        } else {
            return false;
        }
    }

    // populate roles with their associated permissions
    protected function initRoles() {
        $this->roles = array();
        $sql = "SELECT t1.role_id, t2.role_name FROM user_role as t1
                JOIN roles as t2 ON t1.role_id = t2.role_id
                WHERE t1.id = :id";
        $sth = $GLOBALS["DB"]->prepare($sql);
        $sth->execute(array(":id" => $this->id));

        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $this->roles[$row["role_name"]] = Role::getRolePerms($row["role_id"]);
        }
    }

    // check if user has a specific privilege
    public function hasPrivilege($perm) {
        foreach ($this->roles as $role) {
            if ($role->hasPerm($perm)) {
                return true;
            }
        }
        return false;
    }
}





// check if a user has a specific role
public function hasRole($role_name) {
    return isset($this->roles[$role_name]);
}

// insert a new role permission association
public static function insertPerm($role_id, $perm_id) {
    $sql = "INSERT INTO role_perm (role_id, perm_id) VALUES (:role_id, :perm_id)";
    $sth = $GLOBALS["DB"]->prepare($sql);
    return $sth->execute(array(":role_id" => $role_id, ":perm_id" => $perm_id));
}

// delete ALL role permissions
public static function deletePerms() {
    $sql = "TRUNCATE role_perm";
    $sth = $GLOBALS["DB"]->prepare($sql);
    return $sth->execute();
}
?>