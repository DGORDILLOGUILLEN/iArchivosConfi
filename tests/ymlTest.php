<?php
namespace ITEC\PRESENCIAL\DAW\PROG\tests; 
use ITEC\PRESENCIAL\DAW\PROG\yml; 

use PHPUnit\Framework\TestCase;

  class ymlTest extends TestCase{
    public function testYaml(){
      $yaml = new yml("tests/ejemplo.yml");
      $yaml->openFile("test.yml");
      
      $this->assertNull($yaml->addValue("array", ["Juan",2,true]));
      $this->assertFalse($yaml->addValue("booleano", False));
      //Esta accediendo a elementos del array que no existen
      return $yaml;
    }
    /**
    * @depends testYaml
    */
    public function testModifyValue(){
      $yaml = new yml("tests/ejemplo.yml");
      $yaml->modifyValue("array", "Jose");
      $this->assertTrue($yaml->readValue("array"));
    }
    /*
    * @depends testModifyValue
    */
    public function testRemoveValue(){
      $yaml = new yml("tests/ejemplo.yml");
      $yaml->openFile("test.yml");
      $yaml->removeValue("array");
      $this->assertNull($yaml->readValue("array"));
    }

  }


?>
