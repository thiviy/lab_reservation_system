<?php
session_start();
if(isset($_SESSION['log']))
{
?>


<!DOCTYPE html>
<html lang="en">

    <head>         
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pagetitle; ?></title>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' href="style.css">
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 

    </head>   
    <body style="background-color: #80bfff;">
        <div class="templatemo-top-menu">
            <div class="container">
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar" class="external-link">
                            <img src="logo_n.png" style="margin-left: 10px;" alt="c" title="t" />
                            <ul class="nav navbar-nav navbar-right" style="margin-left:5px;"  role="menu" aria-labelledby="dropdownMenu" aria-expanded="false">
                                <li><a href="#" class="external-link">users</a></li>
                                <li><a href="#" class="external-link">reservation</a></li>
                                <li><a href="insert_booking.php" class="external-link">resource</a></li>
                                <li><a href="#" class="external-link">privilege</a></li>
                                 <!--<li><a href="#" class="external-link">Schedule</a></li>
                                <li><a href="#" class="external-link"> Report</a></li>-->
                                  <!--<li><a href="#" class="external-link">Do Attendance</a></li>-->

                                <li><a href="index.php" class="external-link">Log Out</a></li>
                             </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
    </body>
</html>

<?php
}
else{
    echo "please fill proper details";
    header("refresh:2;url=index.php");
}
    ?>

