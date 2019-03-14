<?php

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLVideo\HTMLVideo;

class HTMLVideoTest extends TestCase
{
	public function testObjectWorks()
	{
		$object = new HTMLVideo();
		$this->assertTrue( is_object( $object ) );
	}
}
