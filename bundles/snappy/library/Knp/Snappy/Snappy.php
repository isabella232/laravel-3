<?php

namespace Knp\Snappy;

class Snappy
{
	protected $snappy;
	
	public static function make($binary = null, array $options = array())
	{
		return new Pdf($binary, $options);
	}
}