<?php

class Students_model{
    private $table = 'students',
            $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function  get_allStudents(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudentsById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addStudentData($data){
        $query = "INSERT INTO students VALUES('', :name, :age, :email, :job)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('age', $data['age']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('job', $data['job']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteStudentData($id){
        $query = "DELETE FROM students WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editStudentData($data){
        $query = "UPDATE students SET name = :name, age = :age, email = :email, job = :job WHERE id = :id";
    
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('age', $data['age']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('job', $data['job']);
        $this->db->bind('id', $data['id']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    


    
}