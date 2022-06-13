<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
include "vendor/autoload.php";
interface iArchivoConfig {
    public function addValue(string $name, $value);
    public function removeValue(string $name);
    public function modifyValue(string $name, $value);
    public function readValue(string $name):string; 
}
?>