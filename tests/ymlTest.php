<?php
namespace ITEC\PRESENCIAL\DAW\PROG\tests; 
use ITEC\PRESENCIAL\DAW\PROG\yml; 

use PHPUnit\Framework\TestCase;

class yamlTest extends TestCase{
    public function testYaml(){
        $yaml = new yml();
        $yaml->openFile("config.csv");
    
        $this->assertTrue($yaml->addValue("array", ["Juan",2,True]));
        $this->assertFalse($yaml->addValue("booleano", True));
        return $yaml;
    }
    /*
    * @depends testCreateValue
    */
   public function testModifyValue(yml $yaml){
         $yaml->modifyValue("array", ["Jose",3,False]);
         $this->assertTrue($yaml->readValue("array"));
   }
   
   /*
    * @depends testModifyValue
    */
   public function testRemoveValue(yml $yaml){
         $yaml->removeValue("array");
         $this->assertNull($yaml->readValue("array"));
   }

}


?>
