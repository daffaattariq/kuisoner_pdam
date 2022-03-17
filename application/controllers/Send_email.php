<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'kad11011999@gmail.com',  // Email gmail
            'smtp_pass'   => 'uyehuyeh000',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@kad11011999@gmail.com', 'PDAM-Malang.com');

        // Email penerima
        $this->email->to('krisaditya11@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('Reset Password | PDAM Kota Malang');

        // Isi email
        $this->email->message("Silahkan Mereset Paswword Melalui link ini .<br><br> Klik <strong><a href='https://masrud.com/kirim-email-smtp-gmail-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> ");

        // Tampilkan pesan sukses atau error
        var_dump($this->email->send());die();
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}