<?php

class Students extends Controller{
    public  function index(){
        $data['title'] = 'Students List';
        $data['students'] = $this->model('Students_model')->get_allStudents();
        $this->view('template/header', $data);
        $this->view('students/index', $data);
        $this->view('template/footer');
    }

    public  function details($id){
        $data['title'] = 'Students Details';
        $data['students'] = $this->model('Students_model')->getStudentsById($id);
        $this->view('template/header', $data);
        $this->view('students/details', $data);
        $this->view('template/footer');
    }
}