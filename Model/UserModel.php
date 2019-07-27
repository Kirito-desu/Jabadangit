<?php
require("../Database/Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    public $id;
    private $dbOj;
    private $tablename = "tbluser";


    public function __construct(){
        $this->dbObj = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        if($this->dbObj->execute($sql)){
           return true; 
        }else{
            return false;
        }
            
    }
    public function update($id){
        $sql = "UPDATE tbluser SET name=$this->name, email=$this->email, username=$this->username, password=$this->password WHERE id=$this->id";
        if($this->dbObj->execute($sql)){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id){
        $sql = "DELETE FROM tbluser WHERE id=$id";
       if($this->dbObj->execute($sql)){
           return true;
       }else{
           return false;
       }
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->dbObj->execute($sql);
    }

    public function __destruct(){
        unset($this->dbObj);
    }


}

$model = new UserModel();
$model->name= "Melvin";
$model->email= "Melvin@y.com";
$model->username= "usermelvin";
$model->password= "Melvin123";

?>