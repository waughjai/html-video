<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo
{
	class HTMLVideoSource
	{
		public function __construct( string $type, string $url )
		{
			$this->type = $type;
			$this->url = $url;
		}

		public function getType() : string
		{
			return $this->type;
		}

		public function getURL() : string
		{
			return $this->url;
		}

		private $type;
		private $url;
	}
}
