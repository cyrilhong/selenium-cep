<?php

class PHPWebDriverTest extends PHPUnit_Framework_TestCase
{
    use WebDriverAssertions;
    use WebDriverDevelop;

    protected $url = 'http://github.com';

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function setUp()
    {
        $capabilities = DesiredCapabilities::chrome();
        // $capabilities = DesiredCapabilities::safari();
        // $capabilities = DesiredCapabilities::firefox();
        $host = 'http://localhost:4444/wd/hub';
        $this->webDriver = RemoteWebDriver::create($host, $capabilities);
    }

    public function tearDown()
    {
        $this->webDriver->close();
    }

    public function testGitHubHome()
    {
        $this->webDriver->get($this->url);
        // checking that page title contains word 'GitHub'
        $this->assertContains('GitHub · Build software better, together.', $this->webDriver->getTitle());
    }
}