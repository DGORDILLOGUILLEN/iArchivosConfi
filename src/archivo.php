<?php
namespace ITEC\PRESENCIAL\DAW\PROG\archivo; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig; 
include "vendor/autoload.php";

class archivo {
    private string $fileName;
    protected string $contentStr;

     
    public function __construct(string $fileName){
        $this->fileName=$fileName;
        $this->readFile();
    }

    public function getContent(){//Devuelve el contenido
        return $this->$contentStr;
    }
    
    public function readFile(){ 
        $this->contentStr = file_get_contents($this->fileName);//Transmite un fichero completo a una cadena; 
    }

    public function saveFile(string $datos):bool{
        file_put_contents ($this->fileName, $datos); //Estamos guardando datos en el archivo de fileName (no en el nombre)       
    }

    public function removeFile():bool{
        if(file_exists($this->fileName)){ //Comprueba si existe
            unlink($this->fileName); //Borra un fichero
        }

    }

}


?>
