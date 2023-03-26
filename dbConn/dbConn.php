<?php $servername = "127.0.0.1";
$username = "victorzapp";
$password = "xExa?174";

//$database="omnirese_service_booking";
$database="ofjc_adm_portal";

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