<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo
{
	use WaughJ\HTMLAttributeList\HTMLAttributeList;

	class HTMLVideo
	{
		public function __construct( array $sources = [], array $attributes = [] )
		{
			$this->sources = [];
			foreach ( $sources as $source )
			{
				if ( array_key_exists( 'type', $source ) && array_key_exists( 'url', $source ) )
				{
					$this->sources[] = new HTMLVideoSource( $source[ 'type' ], $source[ 'url' ] );
				}
			}
			$this->attributes = new HTMLAttributeList( $attributes );
		}

		public function getHTML() : string
		{
			return '<video' . $this->attributes->getAttributesText() . '>' . $this->getSourcesHTML() . '</video>';
		}

		public function getSourcesHTML() : string
		{
			$text = '';
			foreach ( $this->sources as $source )
			{
				$text .= '<source type="video/' . $source->getType() . '" src="' . $source->getURL() . '">';
			}
			return $text;
		}

		private $sources;
	}
}
