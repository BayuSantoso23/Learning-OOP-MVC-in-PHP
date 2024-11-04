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
}