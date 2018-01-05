<?php
require_once "Role.php";
require_once "PrivilegedUser.php";

include_once("config.php");

session_start();

if (isset($_SESSION["login"])) {
    $u = PrivilegedUser::getByUsername($_SESSION["login"]);
}

if ($u->hasPrivilege("thisPermission")) {
echo "hi";
}
?>