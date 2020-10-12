<?php
 namespace app\models;
 use framework\BaseModel;
 use \framework\Mess;

 //class ArticoleModel extends BaseModel
class ArticoleModel extends BaseModel
 {
 	private $pdo;

 	public function __construct()
 	{
 		parent::connectDB();
 		$this->pdo = parent::$_pdo;		
 	}

    // Validarea datelor trimise prin POST
    private function validate($post)
    {       
        $validate = true;
        
        // de rescris   

        return $validate;
    }

    // Listarea tuturor articolelor
 	public function listArticole()
 	{ 		
 		return $this->pdo->query('SELECT * FROM articole'); 		
 	}

    // Modificarea datelor unui utilizator
    public function update($id, $post)
    {           
        if(!$this->validate($post)){            
            return false;           
        }

        $set = 'titlu = :titlu, body = :body';
        $sql = $this->pdo->prepare("UPDATE articole SET $set  WHERE id_articol = :id");

        return $sql->execute(array(
            ':id' => $id, 
            ':titlu' => $post['titlu'],
            ':body' => $post['body']
            ));               
    }

    public function deleteUsers($id) {
        // de rescris
    }
 }