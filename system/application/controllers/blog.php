<?php
class Blog extends Controller{
    function index()
    {
        echo 'Hello World!';
        $this->load->model('User_model');
        $data = $this->User_model->get_last_ten_entries();
        $this->load->view('blog',$data);
    }
    function comments()
    {
        echo 'Lock at this!';
    }
}
