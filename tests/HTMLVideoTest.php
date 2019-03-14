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
		$video = new HTMLVideo( [ [ 'url' => 'video.mp4', 'type' => 'mp4' ], [ 'url' => 'movie.webm', 'type' => 'webm' ] ] );
		$this->assertEquals( '<video><source type="video/mp4" src="video.mp4"><source type="video/webm" src="movie.webm"></video>', $video->getHTML() );
	}

	public function testVideoWithAttributes()
	{
		$video = new HTMLVideo( [ [ 'url' => 'video.mp4', 'type' => 'mp4' ], [ 'url' => 'movie.webm', 'type' => 'webm' ] ], [ 'muted' => "true", 'controls' => "controls", 'preload' => "none", 'autoplay' => "autoplay", 'width' => "1200", 'height' => "674", 'class' => "center-img" ] );
		$this->assertEquals( '<video muted="true" controls="controls" preload="none" autoplay="autoplay" width="1200" height="674" class="center-img"><source type="video/mp4" src="video.mp4"><source type="video/webm" src="movie.webm"></video>', $video->getHTML() );
	}
}
