<?php
 namespace app\models;
 use framework\BaseModel;
 use \framework\Mess;

 //class UserModel extends BaseModel
class UserModel extends BaseModel
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
        if(empty($post['prenume']) || !ctype_alpha($post['prenume'])){
            Mess::setMess('prenume', 'Invalid Prenume');
            $validate = false;
        }   
        if(empty($post['nume']) || !ctype_alpha($post['nume'])){
            Mess::setMess('nume', 'Invalid Nume');
            $validate = false;
        }
        if(empty($post['email']) || !filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            Mess::setMess('email', 'Invalid Email');
            $validate = false;
        }   

        return $validate;
    }

    // Listarea tuturor utilizatorilor
 	public function listUsers()
 	{ 		
 		return $this->pdo->query('SELECT * FROM user'); 		
 	}

    // Modificarea datelor unui utilizator
    public function update($id, $post)
    {           
        if(!$this->validate($post)){            
            return false;           
        }

        $set = 'prenume = :prenume, nume = :nume, email = :email';
        $sql = $this->pdo->prepare("UPDATE user SET $set  WHERE id = :id");

        return $sql->execute(array(
            ':id' => $id, 
            ':prenume' => $post['prenume'],
            ':nume' => $post['nume'],
            ':email' => $post['email']));               
    }

    public function deleteUsers($id) {
        $sql = $this->pdo->prepare("DELETE FROM user WHERE id = :id");
        return $sql->execute(array(':id' => $id));
    }
 }