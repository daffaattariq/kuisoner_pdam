<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi_Super_Admin_Jawaban extends CI_Controller {

        function __construct()
        {
                parent::__construct();
                if(!$this->session->userdata('username'))
                {
                redirect('login');
                }
        }

        public function index()
	{	
            
                $ambil_data['data'] = $this->model_data->ambil_data_jawaban(); 
                
                // var_dump($ambil_data['data']);die();
                
                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_jawaban' ,$ambil_data ); 
         }

         public function reset_jawaban()
         {
                $this->model_data->truncate_data('jawaban');
                $this->model_data->truncate_data('kritik_saran');
                
                redirect('super_admin/aksi_super_admin_jawaban');
         }

         public function sudah_isi_jawaban()
         {
                $ambil_data['data'] = $this->model_data->ambil_data_sudah_isi_jawaban(); 

                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_sudah_isi_kuisoner' ,$ambil_data ); 
         }

         public function belum_isi_jawaban()
         {
                $ambil_data['data'] = $this->model_data->ambil_data_belum_isi_jawaban(); 

                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_belum_isi_kuisoner' ,$ambil_data ); 
         }

         

    
       

}
?>