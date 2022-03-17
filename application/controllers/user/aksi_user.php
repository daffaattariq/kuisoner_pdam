<?php

class Aksi_User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username'))
        {
            redirect('login');
        }
    }
    function index()
    {        
        
        
    	$this->load->view('user/v_user_side_navbar' );        
        $this->load->view('user/v_user_top_navbar');         
        $this->load->view('user/v_user_dashboard'  );
        
    }
}