<?php
namespace ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig; 
include "vendor/autoload.php";
interface iArchivoConfig {
    public function readFile(string $fileName):string;
    public function modifyFile(string $fileName):bool;
    public function createFile(string $fileName):string;
    public function removeFile(string $fileName):bool;
    public function addValue(string $name, $value):bool;
    public function removeValue(string $name):bool;
    public function modifyValue(string $name, $value):bool;
    public function readValue(string $name):bool;
    
}


?>
