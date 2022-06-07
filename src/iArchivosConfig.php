<?php
namespace ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig; 
include "vendor/autoload.php";
interface iArchivoConfig {
    public function addValue(string $name, $value):bool;
    public function removeValue(string $name):bool;
    public function modifyValue(string $name, $value):bool;
    public function readValue(string $name):string; 
}


?>
