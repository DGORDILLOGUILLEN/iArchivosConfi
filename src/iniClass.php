<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  
include "vendor/autoload.php";
class ini extends archivo implements iArchivosConfig {
    private array $content;


    public function __construct(string $fileName){
        parent::__construct($fileName); //Hay que llamar al padre ya que es una extensión de archivo y siempre se pone al principio.
        $this->content=parse_ini_string($this->contentStr);
    }

    public function addValue($value):bool{
        return ($this->content[$value]);
    }

    public function removeValue($content):bool{

    }

    public function modifyValue($value):bool{

    }

    public function readValue():bool{
        return $this->content[$value];
    }
}