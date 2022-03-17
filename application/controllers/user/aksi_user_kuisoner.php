<?php

class Aksi_User_Kuisoner extends CI_Controller
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
        $id_login      = $this->session->userdata('id_login'); 

        $where = array(
            'id_login' => $id_login
        );

        $cek = $this->model_data->cek($where,'jawaban');
        // print_r($cek );die();
       
        //pengecekan sudah isi atau belum kuisoner
        if($cek != null)
        {   
            //sudah isi kuisoner
            $id_login      = $this->session->userdata('id_login'); 

            $where = array(
                'jawaban.id_login' => $id_login
            );
            $ambil_data['data'] = $this->model_data->ambil_data_jawaban_where($where); 

            $this->load->view('user/v_user_side_navbar' );        
            $this->load->view('user/v_user_top_navbar');         
            $this->load->view('user/data_user/v_user_data_sudah_kuisoner' , $ambil_data );
        }
        else
        {
            //belum isi kuisoner
            $ambil_data['data'] = $this->model_data->ambil_data_pertanyaan(); 

            $this->load->view('user/v_user_side_navbar' );        
            $this->load->view('user/v_user_top_navbar');         
            $this->load->view('user/data_user/v_user_data_kuisoner' ,$ambil_data  );
        }
       
        
    }

    function save_jawaban()
    {
        $ambil_data['data'] = $this->model_data->ambil_data_pertanyaan(); 
        //menghitung jumlah pertanyaan   
        $total_pertanyaan = count($ambil_data['data']);

        $urut = 0;
        $id_login      = $this->session->userdata('id_login');      

        for($i = 0; $i<$total_pertanyaan; $i++)
        {
            $urut++;
            $id_pertanyaan = $ambil_data['data'][$i]['id_pertanyaan'];
            $id_jawaban = $this->input->post('jawaban'.$urut);

            // var_dump($id_jawaban);
            $data_insert = array(     
                'id_login'     => $id_login,       
                'id_pertanyaan'     => $id_pertanyaan,
                'jawaban'     => $id_jawaban
                );

        
            $this->model_data->insert($data_insert,'jawaban');
        }

        for($j = 1; $j<7; $j++)
        {
            $input_ks = $this->input->post('ks'.$j);

            $data_insert_kritik = array(     
                'id_login'     => $id_login,       
                'id_kategori'     => $j,
                'kritik_saran'     => $input_ks
                );

            if($input_ks != "")
            {
                $this->model_data->insert($data_insert_kritik,'kritik_saran');
            }
            
        }
       
        redirect('user/aksi_user_kuisoner');

    }
}