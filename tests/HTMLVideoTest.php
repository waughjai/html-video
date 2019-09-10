<?php

use PHPUnit\Framework\TestCase;
use WaughJ\HTMLVideo\HTMLVideo;

class HTMLVideoTest extends TestCase
{
	public function testBasicVideo()
	{
		$video = new HTMLVideo();
		$this->assertEquals( '<video></video>', $video->getHTML() );
	}

	public function testVideoWithActualURLs()
	{
		$video = new HTMLVideo( [ [ 'src' => 'video.mp4', 'type' => 'mp4' ], [ 'src' => 'movie.webm', 'type' => 'webm' ] ] );
		$this->assertStringContainsString( ' type="video/mp4"', $video->getHTML() );
		$this->assertStringContainsString( ' src="video.mp4"', $video->getHTML() );
		$this->assertStringContainsString( ' type="video/webm"', $video->getHTML() );
		$this->assertStringContainsString( ' src="movie.webm', $video->getHTML() );
	}

	public function testVideoWithAttributes()
	{
		$video = new HTMLVideo( [ [ 'src' => 'video.mp4', 'type' => 'mp4', 'media' => '(max-width:480px)' ], [ 'src' => 'movie.webm', 'type' => 'webm' ] ], [ 'muted' => "true", 'controls' => "controls", 'preload' => "none", 'autoplay' => "autoplay", 'width' => "1200", 'height' => "674", 'class' => "center-img" ] );
		$this->assertStringContainsString( '<video muted="true" controls="controls" preload="none" autoplay="autoplay" width="1200" height="674" class="center-img">', $video->getHTML() );
		$this->assertStringContainsString( ' media="(max-width:480px)"', $video->getHTML() );
	}
}
