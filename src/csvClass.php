<?php
namespace ITEC\PRESENCIAL\DAW\PROG\csvClass; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig;
use ITEC\PRESENCIAL\DAW\PROG\archivo;  
include "vendor/autoload.php";
class csv extends archivo implements iArchivosConfig {
    private array $content;


    public function __construct(string $fileName){
        parent::__construct($fileName); //Hay que llamar al padre ya que es una extensión de archivo y siempre se pone al principio.
        $this->content=str_getcsv($this->contentStr);
    }

    public function addValue($value):bool{
        return ($this->content[$value]);
    }

    public function removeValue($content):bool{
        if(file_exists($this->content[$value])){ 
            unlink($this->content[$value]); 
        }
        
    }

    public function modifyValue($value):bool{

    }

    public function readValue():bool{
        return $this->content[$value];
    }
}






?>
