<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../dbConn/dbConn.php");

$mob = trim($_POST['k']);
echo $connAdmApp->query("select count(*) from tbl_students WHERE std_mobile='$mob' ")->fetchColumn(); 

?>