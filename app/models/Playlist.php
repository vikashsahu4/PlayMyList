<?php

use Phalcon\Mvc\Model;

class Playlist extends Model
{
	public $p_id;

	public $playlist_name;

	public $date_created;


	public function getSource()
	{
		return "Playlist";
	}
}
?>
