<?php

class VisitorLoginTest extends PHPUnit_Extensions_Selenium2TestCase {

  protected $screenshotPath = '/var/www/screenshots';

  public function setUp() {
    $this->setHost('localhost');
    $this->setPort(4444);
    $this->setBrowserUrl(getenv('ZSAMPLE_TEST_URL'));
    $this->setBrowser('firefox');
  }

  public function tearDown() {
    $this->stop();
  }

  public function testFrontPage() {
    $this->url('/');
    $content = $this->byClassName('main-title')->text();
    $this->assertEquals('Hello', $content);
  }

  public function onNotSuccessfulTest($e) {
    $filedata = $this->currentScreenshot();
    file_put_contents($this->screenshotPath, $filedata);
    parent::onNotSuccessfulTest($e);
  }  

}
