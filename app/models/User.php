<?php

use Phalcon\Mvc\Model;

class User extends Model
{
	public $u_id;

	public $email;

	public $first_name;

	public $last_name;

	public $dob;

	public $password;

	public $dateofreg;

	public function getSource()
	{
		return "User";
	}
}
?>
