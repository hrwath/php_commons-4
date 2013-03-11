<?php

/**
 * =============================================================================
 * @file        Commons/Autoloader/DefaultAutoloaderTest.php
 * @author     Lukasz Cepowski <lukasz@cepowski.com>
 * 
 * @copyright  PHP Commons
 *              Copyright (C) 2009-2012 HellWorx Software
 *              All rights reserved.
 *              www.hellworx.com
 * =============================================================================
 */

namespace Commons\Autoloader;

class DefaultAutoloaderTest extends \PHPUnit_Framework_TestCase
{

    public function testAutoloader_NewAutoloadMethod()
    {
        $obj = new \Mock\Autoload\NewAutoloadMethod();
        $this->assertTrue($obj instanceof \Mock\Autoload\NewAutoloadMethod);
        $this->assertEquals('Mock\\Autoload\\NewAutoloadMethod', (string) $obj);
    }

    public function testAutoloader_OldAutoloadMethod()
    {
        $obj = new \Mock_OldAutoloadMethod;
        $this->assertTrue($obj instanceof \Mock_OldAutoloadMethod);
        $this->assertEquals('Mock_OldAutoloadMethod', (string) $obj);
    }

    public function testAutoloader_CustomAutoloadMethod()
    {
        $obj = new \Mock_Custom_Autoload_Method();
        $this->assertTrue($obj instanceof \Mock_Custom_Autoload_Method);
        $this->assertEquals('Mock_Custom_Autoload_Method', (string) $obj);
    }

}
