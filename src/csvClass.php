<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
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
        if (array_key_exists($value, $this->content)) { //Verifica si el índice o clave dada existe en el array
            unset($this->content[$value]);//Destruye una o más variables especificadas.
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






?>
