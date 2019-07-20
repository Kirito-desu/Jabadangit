<?php
    class Database{
        private $con;
        private $servername ="localhost";
        private $username ="root";
        private $password = "";
        private $dbname = "jabadan";

        public function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        }
        
        public function execute($sql){
           return mysqli_query($this->con, $sql);    
        }

        public function __destruct(){
            mysqli_close($this->con);
        }
    }
?>