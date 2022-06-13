<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  

use Symfony\Component\Yaml\Yaml;

class yml extends archivo implements iArchivosConfig {
    private array|null $parsed;
    private string $content;


    public function __construct(){
        parent_::__construct($fileName);
        $this->content=$this->getContent();
        $this->parsed=Yaml::parse($this->content);
        
    }

    public function addValue(){
        $this->parsed[$name]=$value;
        $this->content=Yaml::dump($this->parsed);
        $this->saveFile();
    }

    public function removeValue(string $name){
        if (array_key_exists($value, $this->parsed)) { 
            unset($this->parsed[$value]);
        }
    }

    public function modifyValue(string $name, $value){
        $rhis->addValue($name, $value);
    }

    public function readValue(string $name):string{
        return $name==" "?" ":$this->parsed[$name];
    }

 
}