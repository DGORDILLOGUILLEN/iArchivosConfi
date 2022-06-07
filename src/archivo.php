<?php
namespace ITEC\PRESENCIAL\DAW\PROG\archivo; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivosConfig; 
include "vendor/autoload.php";

class archivo {
    private string $fileName;
    private string $contentStr;
    private array $content;
     
    public function __construct(string $fileName,string $contentStr){
        $this->fileName=$fileName;
        $this->content = [];
        $this->contentStr = $contentStr;
    }
    
    public function readFile(string $fileName):string{ 
        $this->contentStr = file_get_contents($this->fileName);//Transmite un fichero completo a una cadena; 
        $this->content = str_getcsv($this->contentStr);
    }

    public function modifyFile(string $fileName):bool{

    }

    public function createFile(string $fileName, $value){

        

    }

    public function removeFile(string $fileName):bool{
        if(file_exists($this->fileName)){ //Comprueba si existe
            unlink($this->fileName); //Borra un fichero
        }

    }

}


?>
