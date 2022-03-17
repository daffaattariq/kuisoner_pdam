<?php

class Aksi_User_Profile extends CI_Controller
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
        $id_login = $this->session->userdata('id_login');                 

        $where = array(
        'id_login' => $id_login
        );

        $ambil_data['data'] = $this->model_data->ambil_data_where('login',$where);           
        
    	$this->load->view('user/v_user_side_navbar' );        
        $this->load->view('user/v_user_top_navbar');         
        $this->load->view('user/data_user/v_user_edit_user' ,$ambil_data );
        
    }

    function do_edit_login()
    {
            $id_login = $this->input->get('id_login');                           
            $password = $this->input->post('password');  
            $nama = $this->input->post('nama');   
            $jabatan = $this->input->post('jabatan');  
            
            $where = array(
            'id_login' => $id_login
            );

            $data = array(            
            'nama' => $nama,
            'jabatan' => $jabatan,
            'password' => $password
            );

            
            $this->model_data->edit_data($where,$data,'login');
                            
            redirect('user/aksi_user');
    }
}