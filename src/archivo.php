<?php
namespace ITEC\PRESENCIAL\DAW\PROG;  
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
include "vendor/autoload.php";

class archivo {
    private string $fileName;
    protected string $contentStr;

     
    public function __construct(string $fileName){
        $this->fileName=$fileName;
        $this->readFile();
    }

    /**
     * getContent function: Una función que te devuelve el contenido.
     *
     * @return void
     */
    public function getContent(){//Devuelve el contenido
        return $this->$contentStr;
    }
    
    /**
     * readFile function: esta función se utilizará para leer el contenido de un archivo.
     * 
     * @return void
     */
    public function readFile(){ 
        $this->contentStr = file_get_contents($this->fileName);
    }

    /**
     * saveFile function: esta función se utilizará para guardar los datos del archivo.
     * 
     * file_put_contents():es una función de PHP que se utiliza para escribir los datos en un fichero.
     * Para que la función pueda escribir los datos hay que darselos en string.
     *
     * @param string $datos 
     * @return boolean
     */
    public function saveFile(string $datos):bool{
        file_put_contents ($this->fileName, $datos); 
    }

    /**
     * removeFile function: esta función se utiliza para borrar un archivo
     * file_exist(): es una función de PHP que verifica que un archivo en este caso existe
     *
     * @return boolean
     */
    public function removeFile():bool{
        if(file_exists($this->fileName)){ //Comprueba si existe
            unlink($this->fileName); //Borra un fichero
        }
    }

}


?>
