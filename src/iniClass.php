<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  
include "vendor/autoload.php";
class ini extends archivo implements iArchivosConfig {
    private array $content;


    public function __construct(string $fileName){
        parent::__construct($fileName); 
        $this->content=parse_ini_string($this->contentStr);
    }

    public function addValue($value):bool{
        return ($this->content[$value]);
    }

    public function removeValue($content):bool{
        if (array_key_exists($value, $this->content)) {
            unset($this->content[$value]);
        }
    }

    public function modifyValue(string $value, string $newOne):bool{
        if (array_key_exists($value, $this->content)) {
            $this->content[$value] = $newOne;
        }
    }

    public function readValue():bool{
        return $this->content[$value];
    }
}