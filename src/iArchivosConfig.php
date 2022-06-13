<?php
namespace ITEC\PRESENCIAL\DAW\PROG; 

interface iArchivosConfig {
    public function abrirArchivo(string $nombreArchivo):void;
    public function cerrarArchivo():void;

    public function leerValor(string $key);
    public function borrarValor(string $key):void;
    public function modificarValor(string $key, $newValue):void;
    public function añadirValor(string $key, $value):bool; 
}
?>