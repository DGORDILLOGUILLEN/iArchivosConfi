<?php
   namespace ITEC\PRESENCIAL\DAW\PROG\tests;
   use ITEC\PRESENCIAL\DAW\PROG\ini;  

   use PHPUnit\Framework\TestCase;

   class iniTest extends TestCase{
      public function testAddValue(){
         $ini = new ini("tests/ejemplo.ini");
         $ini->openFile("test.ini");

         $this->assertNull($ini->addValue("string", "Juan"));
         $this->assertFalse($ini->addValue("booleano", True));

         return $ini;
      }
      public function testModifyValue(){
         $ini = new ini("tests/ejemplo.ini");
         $ini->openFile("test.ini");
         $ini->modifyValue("string", "Juan");
         $this->assertTrue($ini->readValue("string"));

      }
      public function testRemoveValue(){
         $ini = new ini("tests/ejemplo.ini");
         $ini->openFile("test.ini");
         $ini->removeValue("numero");
         $this->assertNull($ini->readValue("numero"));
      }


   }

?>