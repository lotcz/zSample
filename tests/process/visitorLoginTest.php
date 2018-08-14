<?php

class VisitorLoginTest extends PHPUnit_Extensions_Selenium2TestCase {

    public function setUp() {
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl($_SERVER['ZSAMPLE_TEST_URL']);
        $this->setBrowser('firefox');
    }

    public function tearDown() {
        $this->stop();
    }

    public function testFrontPage() {
      $this->url('/');
      $content = $this->byClass('main-title')->text();
      $this->assertEquals('Hello', $content);
  }

}
