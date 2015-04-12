<!DOCTYPE html>
<html>
<body>
<?php
echo "is it working?";
phpinfo();
try {
   $conn = new PDO ( "sqlsrv:server = tcp:rjv15kvxeq.database.windows.net,1433; Database = capsuletime", "capsuletime", "Password1");
   $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) {
   print( "Error connecting to SQL Server." );
   die(print_r($e));
}
?>

</body>
</html>