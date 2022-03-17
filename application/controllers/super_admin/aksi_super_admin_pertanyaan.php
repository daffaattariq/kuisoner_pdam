<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi_Super_Admin_Pertanyaan extends CI_Controller {

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
            
        $ambil_data['data'] = $this->model_data->ambil_data_pertanyaan(); 
        $ambil_data['kategori'] = $this->model_data->ambil_data_result('kategori_pertanyaan'); 

        //mengecek apakah sudah ada jawaban

        $ambil_data['data_jawaban'] = $this->model_data->ambil_data_result('jawaban'); 

        if($ambil_data['data_jawaban'] == null)
        {
            $ambil_data['cek_jawaban'] = 0;
            
        }
        else
        {
            $ambil_data['cek_jawaban'] = 1;
        }

        //var_dump($ambil_data['cek_jawaban']);
        

        $this->load->view('super_admin/v_super_admin_side_navbar'  );        
        $this->load->view('super_admin/v_super_admin_top_navbar');         
        $this->load->view('super_admin/data/v_super_admin_data_pertanyaan' ,$ambil_data ); 
    }

    function tambah_pertanyaan()
        {        
        
             $pertanyaan      = $this->input->post('pertanyaan');             
                
             $kategori_pertanyaan      = $this->input->post('kategori_pertanyaan');

                $data_insert = array(            
                'pertanyaan'     => $pertanyaan,
                'id_kategori'     => $kategori_pertanyaan
                );

        
                $this->model_data->insert($data_insert,'pertanyaan');
                
                redirect('super_admin/Aksi_Super_Admin_Pertanyaan');
               
        }

        function hapus_pertanyaan()
        {
                $id_pertanyaan = $this->input->get('id_pertanyaan');        

                // var_dump($id_wilayah_distributor); die();
                $where = array(
                'id_pertanyaan' => $id_pertanyaan
                );                                   
                $this->model_data->delete_data($where,'pertanyaan');   
                        
                redirect('super_admin/Aksi_Super_Admin_Pertanyaan');
        }

        function tampil_edit_pertanyaan()
        {
                $id_pertanyaan = $this->input->get('id_pertanyaan');                 

                $where = array(
                'id_pertanyaan' => $id_pertanyaan
                );

                $ambil_data['data'] = $this->model_data->ambil_data_where('pertanyaan',$where);   
                $ambil_data['kategori'] = $this->model_data->ambil_data_result('kategori_pertanyaan');   
                

                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');                       
                $this->load->view('super_admin/data/v_super_admin_edit_pertanyaan' , $ambil_data); 
        }

        function do_edit_pertanyaan()
        {
            $id_pertanyaan = $this->input->get('id_pertanyaan');   
            $pertanyaan      = $this->input->post('pertanyaan');             
                
            $kategori_pertanyaan      = $this->input->post('kategori_pertanyaan');
                
                $where = array(
                'id_pertanyaan' => $id_pertanyaan
                );

                $data = array(            
                    'pertanyaan'     => $pertanyaan,
                    'id_kategori'     => $kategori_pertanyaan
                );

                
                $this->model_data->edit_data($where,$data,'pertanyaan');
                                
                redirect('super_admin/Aksi_Super_Admin_Pertanyaan');
        }

       

}
?>