<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo;

use WaughJ\HTMLAttributeList\HTMLAttributeList;

class HTMLVideo
{
	public function __construct( array $sources = [], array $attributes = [] )
	{
		$this->sources = array_map
		(
			function( array $source_atts ) : HTMLVideoSource
			{
				return new HTMLVideoSource( $source_atts );
			},
			$sources
		);
		$this->attributes = new HTMLAttributeList( $attributes );
	}

	public function __toString()
	{
		return $this->getHTML();
	}

	public function getHTML() : string
	{
		return '<video' . $this->attributes->getAttributesText() . '>' . $this->getSourcesHTML() . '</video>';
	}

	public function getSourcesHTML() : string
	{
		return implode( '', $this->sources );
	}

	private $sources;
}
