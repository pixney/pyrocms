<?php namespace Pyro\Module\Streams_core\Data;

use Pyro\Module\Streams_core\Core\Model;

class Entries
{

	public static function getEntry($id = null, $stream_slug = null, $stream_namespace = null, $format = true, $plugin = true)
	{
		return Model\Entry::stream($stream_slug, $stream_namespace)->setFormat($format)->setPlugin($plugin)->getEntry($id);
	}

	public static function deleteEntry()
	{
		
	}

}