<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo;

use WaughJ\HTMLAttributeList\HTMLAttributeList;
use WaughJ\TestHashItem\TestHashItem;

class HTMLVideoSource
{
	public function __construct( array $attributes )
	{
		$type_exists_but_doesnt_already_start_with_video = TestHashItem::isString( $attributes, 'type' ) && substr( $attributes[ 'type' ], 0, 6 ) !== "video/";
		if ( $type_exists_but_doesnt_already_start_with_video )
		{
			$attributes[ 'type' ] = 'video/' . $attributes[ 'type' ];
		}
		$this->attributes = new HTMLAttributeList( $attributes );
	}

	public function __toString()
	{
		return '<source' . $this->attributes->getAttributesText() . '></source>';
	}

	private $attributes;
}
