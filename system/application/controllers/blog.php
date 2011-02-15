<?php
class Blog extends Controller{
    function Blog()
    {
        parent::Controller();
        //$this->load->scaffolding("user");
        $this->load->library('firephp');
    }
    function index()
    {
        $this->session->set_userdata(array('name'=>'fireyang'));
        //$this->firephp->log("test");
        echo 'Hello World!:';
        echo $this->session->userdata('name');
        /*$this->load->model('User_model');
        $data = $this->User_model->get_last_ten_entries();
        $this->load->view('blog',$data);
         */
        //$this->load->scaffolding('user');
    }
    function comments()
    {
        echo 'Lock at this!';
    }
}
