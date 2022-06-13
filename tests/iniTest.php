<?php
namespace ITEC\PRESENCIAL\DAW\PROG\tests;
use ITEC\PRESENCIAL\DAW\PROG\ini;  

use PHPUnit\Framework\TestCase;

class iniTest extends TestCase{
    public function testini(){
        $ini = new ini();
        $ini->openFile("test.ini");
    
        $this->assertTrue($ini->addValue("numero", 123));
        $this->assertFalse($ini->addValue("float", False));
        return $ini;
    }
    /*
    * @depends testCreateValue
    */
   public function testModifyValue(ini $ini){
         $ini->modifyValue("string", "Pepe");
         $this->assertTrue($ini->readValue("string"));

   }
   
   /*
    * @depends testModifyValue
    */
   public function testRemoveValue(ini $ini){
         $ini->removeValue("numero");
         $this->assertNull($ini->readValue("numero"));
   }


}

?>