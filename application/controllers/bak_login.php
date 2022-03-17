<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
        $this->load->view('v_login');	
	}

	public function cek_login()
	{

		$username = $this->input->post('username');        
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            // 'password' => md5($password)
            'password' => md5($password)
        );

        $cek = $this->model_data->cek($where,'login');
        // print_r($cek );die();
       

        if($cek != null)
        {   
                $ambil_user = $this->model_data->ambil_user($where,'login');
                // print_r($ambil_user['id_login']);die();        
                $data_session = array(
                'id_login' => $ambil_user['id_login'],
                'username' => $ambil_user['username'],
                'password' => $ambil_user['password'],
                'level' => $ambil_user['level'],
                'status' => "login" 
            );

            $this->session->set_userdata($data_session);
            $this->session->$data_session;
            // print_r($data_session);die();
            
            if($ambil_user['level'] == "2"){
                //TAMPILAN PUSAT
                redirect('super_admin/aksi_super_admin');
            }
            else{    
                //admin 1-4            
                redirect('user/aksi_user_kuisoner');              
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'username atau password salah');
            redirect('login');
        }

	}


     function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

    //REGISTER
    public function register()
    {
        $this->load->view('v_register');	
    }
	
    public function tambah_register()
    {
        $username      = $this->input->post('username');             
        $nama      = $this->input->post('nama');        
        $jabatan      = $this->input->post('jabatan');
        $password      = $this->input->post('password');
        $email      = $this->input->post('email');

        $token = $this->generateRandomString();
        
        $data_insert = array(            
        'username'     => $username,
        'password'     => md5($password),
        'nama'     => $nama,
        'email'     => $email,
        'jabatan'     => $jabatan,
        'token'     => $token,
        'level' => 1
        );

        
        
        $this->model_data->insert($data_insert,'login');
                
        redirect('login');
    }

    //LUPA PW
    public function lupa_pw()
    {
        $this->load->view('v_lupa_pw');	
    }

    public function cek_username()
    {
        $username      = $this->input->post('username');   
        $where = array(
            'username' => $username
        );

        $cek = $this->model_data->cek($where,'login');

        // var_dump($cek);die();
        if($cek != null)
        {   

            //EMAIL BARU
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_user' => 'email@gmail.com',  // Email gmail
                'smtp_pass'   => 'passwordgmail',  // Password gmail
                'smtp_crypto' => 'ssl',
                'smtp_port'   => 465,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            ];    
            $this->email->initialize($config);
            // Load library email dan konfigurasinya
            // $this->load->library('email', $config);    
            // Email dan nama pengirim
            $this->email->from('no-reply@masrud.com', 'MasRud.com');    
            // Email penerima
            $this->email->to('penerima@domain.com'); // Ganti dengan email tujuan
            // Subject email
            $this->email->subject('Reset Password');    
            // Isi email
            $this->email->message("Ini Token");    
            // Tampilkan pesan sukses atau error
            if ($this->email->send()) {
                echo 'Sukses! email berhasil dikirim.';
            } 
            //PROTOKOL EMAIL
            $config['protocol']='smtp';
            $config['smtp_host']='ssl://smtp.gmail.com';
            $config['smtp_port']='465';
            $config['smtp_timeout']='30';
            $config['smtp_user']='daffaattariq19@gmail.com';
            $config['smtp_pass']='avon240970';
            $config['charset']='utf-8';
            $config['newline']="\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            
            $this->email->initialize($config);


            $ambil_data['username'] = $username;

            //send Email
            // $from_email = "frans@idnplay.com";
            // $to_email = $this->input->post('email');
            $from_email = "daffaattariq19@gmail.com";
            $to_email = "daffaattariq19@gmail.com";

            $this->email->from($from_email, 'Identification');
            $this->email->to($to_email);
            $this->email->subject('Send Email Codeigniter');
            $this->email->message('The email send using codeigniter library');
            $this->email->send();

            var_dump($this->email->print_debugger());die();
            var_dump($this->email->send());die();

            $this->load->view('v_ganti_pw' , $ambil_data);	      
        }
        else
        {
            $this->session->set_flashdata('error', 'username salah');
            redirect('login/lupa_pw');
        }

    }

    public function ganti_password()
    {
        $username = $this->input->post('username');        
        $password = $this->input->post('password');

        $where = array(
            'username' => $username
            );

            $data = array(            
            'password' => md5($password)
            );

            
            $this->model_data->edit_data($where,$data,'login');
        
            $this->session->set_flashdata('success', 'password berhasil diubah');
        redirect('login');
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>