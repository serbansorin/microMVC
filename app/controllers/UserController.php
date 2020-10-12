<?php
namespace app\controllers;
use framework\BaseController;
use app\models\UserModel;
use \framework\Mess;

class UserController extends BaseController
{

	private $_model;

	public function __construct()
	{
		$this->_model = new UserModel;
	}

	public function listAction()
	{
		$users = $this->_model->listUsers();		
		$this->render('list', array('users' => $users));	
	}

	public function editAction()
	{
		// method from parent Model class (must have id parameter in URL)
		$user = $this->_model->findByPk('id', $_GET['id']);
		if(isset($_POST['User'])){
			if($this->_model->update((int)$_GET['id'], $_POST['User'])){
				Mess::setMess('success', 'Update cu succes!');
				$this->redirect('index.php?c=user&a=list');				
			}			
		}

		$this->render('update', array('user' => $user));

	}

	public function deleteAction()
	{
		if (isset($_POST['id'])) {
			$this->_model->delete('id', $_POST['id']);

			$users = $this->_model->listUsers();
			$this->renderPartial('_list', array('users' => $users));
		}
	}
}
