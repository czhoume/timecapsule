<!DOCTYPE html>
<html>
<body>
<?php
echo "is it working?";
phpinfo();
$server = "tcp:rjv15kvxeq.database.windows.net,1433";
$user = "capsuletime"@SERVER_ID;
$pwd = "Password1";
$db = "rjv15kvxeq";

$conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

if($conn === false){
	echo "fail";
    //die(print_r(sqlsrv_errors()));
}else{
	echo "yay!";
}

?>

</body>
</html>