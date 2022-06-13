<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 
use ITEC\PRESENCIAL\DAW\PROG\iArchivoConfig; 
use ITEC\PRESENCIAL\DAW\PROG\archivo;  

class csv extends archivo implements iArchivosConfig {
    private array $parsed;
    private string $content;
    
    public function __construct(string $fileName){
        parent::__construct($fileName); //Hay que llamar al padre ya que es una extensión de archivo y siempre se pone al principio.
        $this->content=$this->getContent();
        $this->parsed=str_getcsv($this->content);
    }

    /**
     * addValue function: se utiliza para añadir un valor al array content.
     *
     * @param string $value
     * @return boolean
     */
    public function addValue(string $name, $value):bool{
        $this->parsed[$name]=$value;
        $this->content=$this->array2csv($this->parsed);
        $this->saveFile();
    }

    /**
     * removeValue function: esta función se utiliza para borrar el valor de un array.
     * 
     * array_key_exists(): es una función de php que se utiliza para verificar si 
     * el indice o la clave dada existe en el array.
     * 
     * unset(): destruye una o más variables especificadas.
     *
     * @param array $content
     * @return boolean
     */
    public function removeValue(array $parsed):bool{
        if (array_key_exists($value, $this->parsed)) { 
            unset($this->parsed[$value]);
        }
    }

    /**
     * modifyValue function: Se utilizará para modificar el valor de un array
     *
     * @param string $value
     * @param string $newOne
     * @return boolean
     */
    public function modifyValue(string $name, $value){
        $this->addValue($name, $value);
    }

    /**
     * readValue function: esta función se utiliza para leer el array.
     *
     * @return boolean
     */
    public function readValue(string $name):string{
        return $name==" "?" ":$this->parsed[$value];
    }

    public function array2csv():string{
        $out = '';
        $i=0;
        $keys=array_keys($this->parsed);
        $csvheader=implode(";",$keys).PHP_EOL;
        $csvvalues=implode(";",array_values($this->parsed)).PHP_EOL;
        $out=$csvheader.$csvvalues;
        return $out;
    } 
}






?>





