<?php $servername = "127.0.0.1";
$username = '<redacted>'; //ASK for ENV
$password = '<redacted>'; //ASK for ENV

//$database="omnirese_service_booking";
$database= '<redacted>'; //ASK for ENV

try {
    $connAdmApp = new PDO("mysql:host=$servername;dbname=$database", $username, $password);    
    $connAdmApp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     #echo "Connected successfully";
    }
catch(PDOException $e)
    {
     #echo "Connection failed: " . $e->getMessage();
    }
?>
