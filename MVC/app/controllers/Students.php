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

    public function add(){
        if($this->model('Students_model')->addStudentData($_POST) > 0){
            Flasher::setFlash('Successfully', 'added', 'success');
            header('Location: '. BASEURL . '/Students');
            exit;
        }else{
            Flasher::setFlash('Failed', 'added', 'danger');
            header('Location: '. BASEURL . '/Students');
            exit;
        }
    }
    public function delete($id){
        if($this->model('Students_model')->deleteStudentData($id) > 0){
            Flasher::setFlash('Successfully', 'deleted', 'success');
            header('Location: '. BASEURL . '/Students');
            exit;
        }else{
            Flasher::setFlash('Failed', 'deleted', 'danger');
            header('Location: '. BASEURL . '/Students');
            exit;
        }
    }



    
}