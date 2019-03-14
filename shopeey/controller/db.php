<?php


    class db{
        private $conn;
        private $host;
        private $user;
        private $password;
        private $basename;

        //This is constructor, it is automatically called when object of db class is created.
        function __construct($param=array()) {
            $this->conn=FALSE;
            $this->host="localhost";
            $this->user="root";
            $this->password="";
            $this->basename="shopeey";
            $this->connect();

        }
        //This is Destructor
        function __destruct() {
            $this->disconnect();
        }

        //connect() is creat the connection object between php and mysql.
        //We are using PDO object for connection because it supports 12-13 different types databases including MySQL.
        function connect(){
            if(!$this->conn){
                try{
                    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->basename", $this->user, $this->password);

                } catch (Exception $ex) {
                    die("Error:". $ex->getMessage());
                }
            }
        }

        //disconnect() is automatically called when destructor is execute.
        //This function destroys the connection object.
        function disconnect(){
            if($this->conn){
                $this->conn = NULL;
            }
        }

        //execute() is used to execute the SQL query
        function execute($query){
            //echo $query;
            try {
                $response = $this->conn->prepare($query);
                $response->execute();
                //echo $response->rowCount();
            } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
            }
            return $response;
        }
        
        //execute() is used to execute the SQL query
        function execute_assoc($query){
            //echo $query;
            try {
                $response = $this->conn->prepare($query);
                $response->execute();
                $res=$response->fetchAll(PDO::FETCH_ASSOC);
                //echo $response->rowCount();
            } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
            }
            return $res;
        }
    }

?>
