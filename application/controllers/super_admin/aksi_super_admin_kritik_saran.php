<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi_Super_Admin_Kritik_Saran extends CI_Controller {

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
            
                $ambil_data['data'] = $this->model_data->ambil_data_kritik_saran(); 
                
              //   var_dump($ambil_data['data']);die();
                
                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_kritik_saran' ,$ambil_data ); 
         }

         

    
       

}
?>