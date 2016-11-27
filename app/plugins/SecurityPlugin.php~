<?php

use Phalcon\Acl;
use Phalcon\Acl\Role;
use Phalcon\Acl\Resource;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Acl\Adapter\Memory as AclList;

/**
 * SecurityPlugin
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class SecurityPlugin extends Plugin
{

	/**
	 * Returns an existing or new access control list
	 *
	 * @returns AclList
	 */
	public function getAcl()
	{

		//throw new \Exception("something");

		if (!isset($this->persistent->acl)) {

			$acl = new AclList();

			$acl->setDefaultAction(Acl::DENY);

			//Register roles
			$roles = array(
				'superadmin'  => new Role('Superadmin'),
				'admin' => new Role('Admin'),
				'accontant' => new Role('Accountant'),
				'users' => new Role('Users')
			);
			foreach ($roles as $role) {
				$acl->addRole($role);
			}

			//super area resources
			$superadminResources = array(
				''    => array('', '', '', '', '', '', ''),
				''     => array('', '', '', '', '', '', ''),
				'' => array('', '', '', '', '', '', ''),
				''     => array('', '')
			);
			foreach ($superadminResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}
			

			//admin area resources
			$adminResources = array(
				'accounts'    => array('add', 'delete', '', '', '', '', ''),
				'plan'     => array('edit', '', '', '', '', '', ''),
				'company' => array('edit', 'finance', '', '', '', '', ''),
				'taxrate'     => array('edit', 'delete'),
				'users'     => array('', ''),
				'chartsofaccounts'     => array('edit', 'delete','add'),
			);
			foreach ($adminResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}



			//accountant area resources
			$accountantResources = array(
				'accounts'    => array('index', '', '', '', '', '', ''),
				'plan'     => array('index', '', '', '', '', '', ''),
				'company' => array('index', '', '', '', '', '', ''),
				'taxrate'     => array('index', ''),
				'chartsofaccounts'     => array('index', ''),
			);
			foreach ($accountantResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}


			//users area resources
			$usersResources = array(
				'index'      => array('index'),
				'tutorial'   => array('index'),
				'login'     => array('', ''),
				'transaction'    => array('index', '', '', ''),
				'reminder'    => array('index', '')
			);
			foreach ($usersResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}
			
			//for guests
			$publicResources = array(
				'index'      => array('index'),
				'request'      => array('index'),
				'pricing'   => array('index'),
				'login'     => array('index'),
				'about'    => array('index'),
				'career'    => array('index'),
				'contact'    => array('index'),
				
			);
			foreach ($publicResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}


			//Grant access to public areas to all
			
			foreach ($publicResources as $resource => $actions) {
				foreach ($actions as $action){
						$acl->allow('Users','Accounts','Admin','Superadmin', $resource, $action);
					}
				}
			
			//Grant acess to users area to role Users,accontant and admin
			foreach ($usersResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Users','Accountant','Admin', $resource, $action);
				}
			}
			

			//Grant acess to accountant area to role accontant and admin
			foreach ($accountantResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Accountant','Admin' $resource, $action);
				}
			}


			//Grant acess to admin area to role admin
			foreach ($adminResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Admin', $resource, $action);
				}
			}
			
			//Grant acess to superadmin area to role superadmin
			foreach ($superadminResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Superadmin', $resource, $action);
				}
			}

		
			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 *
	 * @param Event $event
	 * @param Dispatcher $dispatcher
	 */
	public function beforeDispatch(Event $event, Dispatcher $dispatcher)
	{

		$auth = $this->session->get('auth');
		if (!$auth){
			$role = '';
		} else {
			$role = '';
		}

		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();

		$acl = $this->getAcl();

		$allowed = $acl->isAllowed($role, $controller, $action);
		if ($allowed != Acl::ALLOW) {
			$dispatcher->forward(array(
				'controller' => 'errors',
				'action'     => 'show401'
			));
			return false;
		}
	}
}
