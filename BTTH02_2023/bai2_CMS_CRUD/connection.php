<?php
class Database{
    private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "cms"; 
    
    public function getConnection(){		
		try{
            $conn = new PDO("mysql:host={$this->host}; dbname={$this->database}", username:$this->user, password:$this->password);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
            return null;
        }
		
    }
}

?>