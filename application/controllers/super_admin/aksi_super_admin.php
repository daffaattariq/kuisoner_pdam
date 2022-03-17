<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi_Super_Admin extends CI_Controller {

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
                
            $login = $this->model_data->ambil_data_result('login'); 
            $ambil_data['login'] = count($login)-1; 

            $sudah_isi_jawaban = $this->model_data->ambil_data_sudah_isi_jawaban(); 
            $ambil_data['sudah_isi_jawaban'] = count($sudah_isi_jawaban); 

            $belum_isi_jawaban = $this->model_data->ambil_data_belum_isi_jawaban(); 
            $ambil_data['belum_isi_jawaban'] = count($belum_isi_jawaban);             

            $pertanyaan = $this->model_data->ambil_data_result('pertanyaan'); 
            $ambil_data['pertanyaan'] = count($pertanyaan); 

            $this->load->view('super_admin/v_super_admin_side_navbar'  );        
            $this->load->view('super_admin/v_super_admin_top_navbar');         
            $this->load->view('super_admin/v_super_admin_dashboard' , $ambil_data ); 
        }

        public function tampil_data_login()
        {

                $where = array(
                        'level' => 1
                );
 

            $ambil_data['data'] = $this->model_data->ambil_data_where('login',$where); 


            $this->load->view('super_admin/v_super_admin_side_navbar'  );        
            $this->load->view('super_admin/v_super_admin_top_navbar');         
            $this->load->view('super_admin/data/v_super_admin_data_login' , $ambil_data); 
        }

        function tambah_login()
        {        
        
             $username      = $this->input->post('username');             
             $password      = $this->input->post('password');
             $nama          = $this->input->post('nama');
             $jabatan      = $this->input->post('jabatan');

                $data_insert = array(            
                'username'     => $username,
                'password'     => $password,
                'nama'     => $nama,
                'jabatan'     => $jabatan,
                'level' => 1
                );

        
                $this->model_data->insert($data_insert,'login');
                
                redirect('super_admin/aksi_super_admin/tampil_data_login');
               
        }

        function hapus_login()
        {
                $id_login = $this->input->get('id_login');        

                // var_dump($id_wilayah_distributor); die();
                $where = array(
                'id_login' => $id_login
                );                                   
                $this->model_data->delete_data($where,'login');   
                        
                redirect('super_admin/aksi_super_admin/tampil_data_login');
        }

        function tampil_edit_login()
        {
                $id_login = $this->input->get('id_login');                 

                $where = array(
                'id_login' => $id_login
                );

                $ambil_data['data'] = $this->model_data->ambil_data_where('login',$where);     
                

                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');                       
                $this->load->view('super_admin/data/v_super_admin_edit_login' , $ambil_data); 
        }

        function do_edit_login()
        {
                $id_login = $this->input->get('id_login');                        
                $username = $this->input->post('username');   
                $nama = $this->input->post('nama');   
                $jabatan = $this->input->post('jabatan');  
                
                $where = array(
                'id_login' => $id_login
                );

                $data = array(            
                'username' => $username,
                'nama' => $nama,
                'jabatan' => $jabatan
                );

                
                $this->model_data->edit_data($where,$data,'login');
                                
                redirect('super_admin/aksi_super_admin/tampil_data_login');
        }

}
?>