<?php session_start();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include("../dbConn/dbConn.php");
include("common.functions.php");


$crseID = $_POST['pk'];

echo getData($connAdmApp, "tbl_Adm_Courses", "admFeeAmount", " WHERE  id='$crseID'  " );


?>