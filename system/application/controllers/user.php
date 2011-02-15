<?php
class User extends Controller{
    function User()
    {
        parent::Controller();
        $this->load->scaffolding("user");
    }


    function index()
    {
        $this->load->model('User_model');
        $query = $this->User_model->getItem();
        $name = $query[0]->name;
        //echo $name.$y;
        echo time();
    }

    /**
     * 登录 
     **/
    function login()
    {
    }

    /**
     * 注册
     **/
    function register()
    {
        $this->load->view("user/index");
    }
}
