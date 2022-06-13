<?php
namespace ITEC\PRESENCIAL\DAW\PROG\tests;
use ITEC\PRESENCIAL\DAW\PROG\ini;  

use PHPUnit\Framework\TestCase;

class iniTest extends TestCase{
    public function testini(){
        $ini = new yml();
        $ini->openFile("config.csv");
    
        $this->assertTrue($ini->addValue("array", ["Juan",2,True]));
        $this->assertFalse($ini->addValue("booleano", True));
        return $ini;
    }
    /*
    * @depends testCreateValue
    */
   public function testModifyValue(ini $ini){
         $ini->modifyValue("array", ["Jose",3,False]);
         $this->assertTrue($ini->readValue("array"));
   }
   
   /*
    * @depends testModifyValue
    */
   public function testRemoveValue(yml $ini){
         $ini->removeValue("array");
         $this->assertNull($ini->readValue("array"));
   }


}

?>