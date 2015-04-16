<?php

require_once '..\vendor\autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Blob\Models\CreateContainerOptions;
use WindowsAzure\Blob\Models\PublicAccessType;
use WindowsAzure\Common\ServiceException;

$connectionString="DefaultEndpointsProtocol=http;AccountName=timecapsule;AccountKey=Svqu96cufSCabYoUWYs/2z38APOyEYftwJqS5ccFkLKpIQ+QPVhEYRoQt6mdcDbZ4Gj5b0elCcwRsEqc1a8peg==";

// Create blob REST proxy.
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
try{
	$content = fopen("c:\\hacktest\\testtxt.txt", "r");
}catch(E_WARNING $e){
	echo $e->getMessage();
}

// $content = fopen("C:\\Users\\chizhou\\hacktest\\testtxt","r");
$blob_name = "myblob";

try {
    //Upload blob
    $blobRestProxy->createBlockBlob("text", $blob_name, $content);
    echo "uploaded";
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