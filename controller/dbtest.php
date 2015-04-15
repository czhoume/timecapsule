<?php

require_once '..\vendor\autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;

$connectionString="DefaultEndpointsProtocol=https;AccountName=timecapsule;AccountKey=Svqu96cufSCabYoUWYs/2z38APOyEYftwJqS5ccFkLKpIQ+QPVhEYRoQt6mdcDbZ4Gj5b0elCcwRsEqc1a8peg==;";


// Create blob REST proxy.
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);


$content = fopen("c:\tmpdownload\20150414ExtensionList.txt", "r");
$blob_name = "myblob";

try {
    // Create container.
    $blobRestProxy->createContainer("mycontainer", $createContainerOptions);
}
catch(ServiceException $e){
    // Handle exception based on error codes and messages.
    // Error codes and messages are here: 
    // http://msdn.microsoft.com/library/azure/dd179439.aspx
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}

?>