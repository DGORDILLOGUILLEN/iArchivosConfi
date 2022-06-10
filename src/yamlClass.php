<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  
include "vendor/autoload.php";
class yaml extends archivo implements iArchivosConfig {
    private array $content;


    public function __construct(string $fileName){
        parent::__construct($fileName); 
        $this->content=yaml_parse($this->contentStr);
    }

    public function addValue($value):bool{
        return ($this->content[$value]);
    }

    public function removeValue($content):bool{

    }

    public function modifyValue($value):bool{

    }

    public function readValue($value):bool{
        return $this->content[$value];
    }
}