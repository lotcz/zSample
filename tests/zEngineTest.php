<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class zEngineTest extends TestCase
{
    public function testCreateZInstance(): void
    {
		$this->assertNotNull(
            new zEngine('../app')
        );		
       
    }

}