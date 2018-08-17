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
    try {
      $this->url('/');
      $content = $this->byClassName('main-title')->text();
      $this->assertEquals('Hello', $content);
    } catch (Exception $e) {
      $this->takeScreenshot();
      $this->assertTrue(false);
    }
  }

  public function takeScreenshot() {
    $filedata = $this->currentScreenshot();
    file_put_contents($this->screenshotPath . '/screenshot' . time() . '.jpg', $filedata);
  }

}
