<?php

require __DIR__ . '/vendor/autoload.php';
require 'MyClass.php';

use PHPUnit\Framework\TestCase;

class MyTests extends TestCase{

    public function testRun(){

        $myClass = new MyClass();
        $this->assertNotCount(0, $myClass->mas_prep_get);
    }
}