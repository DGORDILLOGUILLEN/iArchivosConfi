<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  

class ini extends archivo implements iArchivosConfig {
    private array|null $parsed;
    private string $content;


    public function __construc(){
        parent_::__construc($fileName);
        $this->content=$this->getContent();
        $this->parsed=parse_ini_string($this->content);//cambiar parse
        
    }

    public function addValue(){
        $this->parsed[$name]=$value;
        $this->content=$this->arr2ini($this->parsed);
        $this->saveFile();
    }

    public function removeValue(){
        unset($this->parsed);
        $this->content= Yaml::dump($this->parsed);// cambiar
        $this->saveFile();
    }
    public function modifyValue(string $name, $value){
        $rhis->addValue($name, $value);
    }

    public function readValue(string $name):string{
        return $name==" "?" ":$this->parsed[$name]; // las dobles comillas es un string vacio
                                                    // ?: "operador ternario", quiere decir que si esta vacio que te lo de vacio
                                                    // sino que te lo de parseado
    }

    public function arr2ini(array $a, array $parent = array()){
        $out = '';
        foreach($a as $k => $v){
            if (is_array($v)){
            $sec = array_merge((array) $parent, (array) $k);
            $out .= '[' . join('.', $sec) . ']' . PHP_EOL; //constante predefinida que se adapta al lenguaje. Mete una nueva línea bien montada para cada sistema
            $out .= $this->arr2ini($v, $sec);
        }else
            $out .= "$k=$v" . PHP_EOL;
        }
        return $out;
    } 
}