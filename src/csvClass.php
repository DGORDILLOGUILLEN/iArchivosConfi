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

    /**
     * addValue function: se utiliza para añadir un valor al array content.
     *
     * @param string $value
     * @return boolean
     */
    public function addValue(string $value):bool{
        return ($this->content[$value]);
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
    public function removeValue(array $content):bool{
        if (array_key_exists($value, $this->content)) { 
            unset($this->content[$value]);
        }
    }

    /**
     * modifyValue function: Se utilizará para modificar el valor de un array
     *
     * @param string $value
     * @param string $newOne
     * @return boolean
     */
    public function modifyValue(string $value, string $newOne):bool{
        if (array_key_exists($value, $this->content)) { 
            $this->content[$value] = $newOne;
        }
    }

    /**
     * readValue function: esta función se utiliza para leer el array.
     *
     * @return boolean
     */
    public function readValue():bool{
        return $this->content[$value];
    }


}






?>
