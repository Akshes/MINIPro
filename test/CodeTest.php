<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class CodeTest extends TestCase
{
    public function testCSVFileExists()
    {
        $this->assertFileExists('data/shoes.csv');
    }

   

}