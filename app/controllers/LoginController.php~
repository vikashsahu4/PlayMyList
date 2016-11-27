<?php

class LoginController extends ControllerBase
{
 public function initialize()
    {
        $this->tag->setTitle('Login');
        parent::initialize();
    }
    private function _registerSession(User $user)
    {
	$usercomp = User::findFirst(array(
                "(u_id = :uid:)",
                'bind' => array('uid' => $user->u_id)
            ));

        $this->session->set('auth',array(
            'id' => $user->u_id,
            'name' => $user->first_name
        ));

	
    }

    public function playlistAction()
    {
	
    }
public function indexAction()
{
if ($this->request->isPost()) {

            $email = mb_strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');
            $user = User::findFirst(array(
                "(email = :email:)",
                'bind' => array('email' => $email)
            ));

	    if($user != false){
		    $user2 = User::findFirst(array(
		        "(email = :email: AND password = :password:)",
		        'bind' => array('email' => $email, 'password' => $password))
		    );
	    
            if ($user2 != false) {
               // $this->_registerSession($user2);
               // $this->flash->success('Welcome ' . $user2->u_fname);
                return $this->response->redirect("playlist");
            }
	
	}

            $wrong="Wrong email/password";
		$this->view->wrong=$wrong;
        }

        //return $this->forward('login');
}

}
