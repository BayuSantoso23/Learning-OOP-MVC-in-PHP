<?php

class About extends Controller {
    public function index($name = 'Budi', $job = 'Proggrammer', $age = 20){
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['judul'] = 'About page';

        $this->view('template/header',$data);
        $this->view('about/index', $data);
        $this->view('template/footer');

    }
    public function page(){
        $data['judul'] = 'Page Views';

        $this->view('template/header',$data);
        $this->view('about/page');
        $this->view('template/footer');

    }
}