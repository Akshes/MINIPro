<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class CodeTest extends TestCase
{
    public function testCSVFileExists()
    {
        $this->assertFileExists('data/shoes.csv');
    }
    public function testrecordFactorFile(){
        echo file_exists('recordFactor');
    }
    public function testcsvloadFile(){
        echo file_exists('csvLoad');
    }
    public function testSrcDirectory(){
        $this->assertDirectoryExists('src');
    }
    public function testFactoryDirectory(){
        $this->assertDirectoryExists('Factory');
    }
    public function testfileDirectory(){
        $this->assertDirectoryExists('file');
    }
    public function testdbDirectory(){
        $this->assertDirectoryExists('db');
    }
    public function testhtmlDirectory(){
        $this->assertDirectoryExists('html');
    }
    public function testmodelsDicretory(){
        $this->assertDirectoryExists('models');
    }
    public function testtableFile(){
        echo file_exists('table');
    }
    public function testindexFile(){
        echo file_exists('index')
    }


}