<?php

class VisitorLoginTest extends PHPUnit_Extensions_Selenium2TestCase {

  protected $captureScreenshotOnFailure = TRUE;
  protected $screenshotPath = '/var/www/screenshots';
  protected $screenshotUrl = 'http://localhost/screenshots';

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

}
