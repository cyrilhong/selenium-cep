<?php

class PHPUnitSeleniumTest extends PHPUnit_Extensions_SeleniumTestCase
{
    public static $browsers = [
        [
          'browser' => '*googlechrome',
        ],
        // [
        //   'browser' => '*firefox',
        // ],
        // [
        //     'browser' => '*safari',
        // ],
    ];

    protected function setUp()
    {
        $this->setTimeout(180);
        $this->setBrowserUrl("https://github.com/");
    }

    public function testMyTestCase()
    {
        $this->open("/");
        $this->assertEquals("GitHub · Build software better, together.", $this->getTitle());
    }
}