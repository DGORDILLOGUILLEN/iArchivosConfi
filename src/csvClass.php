<?php
namespace ITEC\PRESENCIAL\DAW\PROG\csvClass; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig;
use ITEC\PRESENCIAL\DAW\PROG\archivo;  
include "vendor/autoload.php";
class csv extends archivo implements iArchivosConfig {
    private string $fileName;
    private string $content;
    private $value;


    public function __construct(string $fileName, array $content, $value){
        $this->fileName=$fileName;
        $this->content=str_getcsv($this->contentStr);
    }
    public function addValue(string $content, $value):bool{
        return ($this->contentStr[$value]);

    }
    public function removeValue(string $fileName):bool{

    }
    public function modifyValue(string $fileName, $value):bool{

    }
    public function readValue(string $fileName):bool{

    }
}






?>
