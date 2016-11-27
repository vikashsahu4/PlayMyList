<?php

class RegisterController extends ControllerBase
{
 public function initialize()
    {
        $this->tag->setTitle('Register');
        parent::initialize();
    }
public function indexAction()
{

}

public function successAction()
{
}

public function addAction()
{

 //print_r($_POST);
if($this->request->isPost())	
		{
	//$fname =$_POST[fname];
	//echo $fname;
	$fname=$this->request->getPost('fname');
	$lname=$this->request->getPost('lname');
	$email=$this->request->getPost('email');
	$dob=$this->request->getPost('dob');
	$pwd=$this->request->getPost('password');
	$pwd2=$pwd;
	$date=date("Y-m-d");
	
	$user=new User();
	$user->email=$email;
	$user->first_name=$fname;
	$user->dateofreg=$date;
	$user->last_name=$lname;
	$user->dob=$dob;
	$user->password=$pwd2;

	if ($user->save() == false) {
		        foreach ($user->getMessages() as $message) {
		            echo $message;
		        }
		 }
	else
		{
			echo "Success";
		}

}
}
}
