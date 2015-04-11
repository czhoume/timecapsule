<?php

$server = "tcp:rjv15kvxeq.database.windows.net";
$user = "capsuletime"@SERVER_ID;
$pwd = "Password1";
$db = "rjv15kvxeq";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

if($conn === false){
    die(print_r(sqlsrv_errors()));
}else{
	echo "yay!";
}

?>