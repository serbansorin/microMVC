<?php
namespace app\controllers;
use framework\BaseController;
use app\models\ArticoleModel;
use \framework\Mess;

class ArticoleController extends BaseController
{

	private $_model;

	public function __construct()
	{
		$this->_model = new ArticoleModel;
	}

	public function listAction()
	{
		$articole = $this->_model->listArticole();	
		$this->render('list', array('articole' => $articole));	
	}

	public function editAction()
	{
		// method from parent Model class (must have id parameter in URL)
		$articol = $this->_model->findByPk('id_articol', $_GET['id']);
		if(isset($_POST['Articol'])){
			if($this->_model->update((int)$_GET['id'], $_POST['Articol'])){
				Mess::setMess('success', 'Update cu succes!');
				$this->redirect('index.php?c=articole&a=list');				
			}			
		}

		$this->render('update', array('articol' => $articol));

	}

	public function deleteAction()
	{
		// de rescris
	}
}