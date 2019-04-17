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
    public function testSrcDirectory(){
        $this->assertDirectoryExists('src');
    }



}