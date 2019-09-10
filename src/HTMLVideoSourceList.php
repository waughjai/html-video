<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLVideo;

class HTMLVideoSourceList implements \ArrayAccess
{
	public function __construct( array $sources )
	{
		$this->list = array_map
		(
			function( array $source_atts ) : HTMLVideoSource
			{
				return new HTMLVideoSource( $source_atts );
			},
			$sources
		);
	}

	public function __toString()
	{
		return implode( '', $this->list );
	}

    public function offsetSet($offset, $value)
	{
        if (is_null($offset))
		{
            $this->list[] = $value;
        }
		else
		{
            $this->list[$offset] = $value;
        }
    }

    public function offsetExists($offset)
	{
        return isset($this->list[$offset]);
    }

    public function offsetUnset($offset)
	{
        unset($this->list[$offset]);
    }

    public function offsetGet($offset)
	{
        return isset($this->list[$offset]) ? $this->list[$offset] : null;
    }

	private $list;
}
