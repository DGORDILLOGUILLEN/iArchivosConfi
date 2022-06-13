<?php
namespace ITEC\PRESENCIAL\DAW\PROG;
use ITEC\PRESENCIAL\DAW\PROG\archivo;
use ITEC\PRESENCIAL\DAW\PROG\ini;
use ITEC\PRESENCIAL\DAW\PROG\json;
use ITEC\PRESENCIAL\DAW\PROG\yml;
use ITEC\PRESENCIAL\DAW\PROG\csv;



$ini= new ini ("index.ini");
$json= new json ("index.json");
$yml= new yml ("index.yml");
$csv= new csv ("index.csv");

configure("nombre","Juan", $ini);
configure("nombre","Jose Antonio", $json);
configure("nombre","Juan", $yml);
configure("nombre","Moyano", $csv);

function configure ($name, $value, iArchivosConfig $configurador){
    $configurador->addValue($name, $value);
}



?>
