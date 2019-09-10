<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo;

use WaughJ\HTMLTag\HTMLTag;

class HTMLVideo extends HTMLTag
{
	public function __construct( array $sources = [], array $attributes = [] )
	{
		$this->sources = new HTMLVideoSourceList( $sources );
		parent::__construct( 'video', $attributes, $this->sources );
	}

	private $sources;
}
