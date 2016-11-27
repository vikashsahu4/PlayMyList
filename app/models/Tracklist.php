<?php

use Phalcon\Mvc\Model;

class Tracklist extends Model
{
	public $p_id;

	public $t_id;

	public $track_name;

	public $file_size;

	public $format;

	public $playtime;

	public $bitrate;

	public $artist;

	public $title;

	public $erwarnings;


	public function getSource()
	{
		return "Tracklist";
	}
}
?>
