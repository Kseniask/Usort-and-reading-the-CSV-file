<?php

class FileAgent {
    
    //Store the contents and file nameof the file in properties
public static $_fileName;
public static $_fileContents;
    //This function should load the contents of the file
static function readFile(string $fileName){
    self::$_fileName = $fileName;
    try{
    $fileHandle = fopen(self::$_fileName, 'r');
    self::$_fileContents = fread($fileHandle, filesize(self::$_fileName));
    if(!isset($fileHandle) || empty(self::$_fileContents)){
        throw new Exception("The file is empty");
    }
}
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    return self::$_fileContents;
}
}

?>