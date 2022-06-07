<?php
namespace ITEC\PRESENCIAL\DAW\PROG\csvClass; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig; 
include "vendor/autoload.php";
class csv implements iArchivosConfig {
    private string $fileName;
    private array $content=[];
    private $value;

    public function __construct(string $fileName, array $content, $value){
        $this->fileName=$fileName;
        $this->content=$content=[];
        $this->value=$value;
    }

    public function addValue(string $name, $value):bool{

    }
    public function removeValue(string $name):bool{

    }
    public function modifyValue(string $name, $value):bool{

    }
    public function readValue(string $name):bool{

    }
}






?>
