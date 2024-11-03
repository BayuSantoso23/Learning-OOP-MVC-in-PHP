<?php

class Students_model{
    private $dbh, //database handler
            $stmt; //statement
    
    public function __construct(){
        // data source name
        $dsn = 'mysql:host=localhost;dbname=learn_mvc';

        try{
            // PHP Data Objects
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function  get_allStudents(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM  students');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}