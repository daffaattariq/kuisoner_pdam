<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi_Super_Admin_Hasil extends CI_Controller {

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
            $hasil = $this->model_data->ambil_data_hasil();            
            $hitung_hasil = count($hasil);

        //     var_dump($hitung_hasil);die();
            if($hitung_hasil>0)
            {

                
                //PERFORMANCE
                $jumlah_performance = 0;    
                $jumlah_total_performance = 0;     
                //information
                $jumlah_information = 0;    
                $jumlah_total_information = 0;    
                //economics
                $jumlah_economics = 0;    
                $jumlah_total_economics = 0;
                //control
                $jumlah_control = 0;    
                $jumlah_total_control = 0;
                //efficiency
                $jumlah_efficiency = 0;    
                $jumlah_total_efficiency = 0;
                //service
                $jumlah_service = 0;    
                $jumlah_total_service = 0;      
                //     var_dump($hasil[3]['kode_kategori']);die();
                
                for($i=0; $i<$hitung_hasil; $i++)
                {
                if($hasil[$i]['kode_kategori']=='performance')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_performance = $jumlah_performance + $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_performance  = $jumlah_total_performance + $hasil[$i]['jumlah'];
                }
                else if($hasil[$i]['kode_kategori']=='information')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_information = $jumlah_information+ $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_information  = $jumlah_total_information + $hasil[$i]['jumlah'];
                }
                else if($hasil[$i]['kode_kategori']=='economics')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_economics = $jumlah_economics+ $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_economics  = $jumlah_total_economics + $hasil[$i]['jumlah'];
                }
                else if($hasil[$i]['kode_kategori']=='control')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_control = $jumlah_control+ $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_control  = $jumlah_total_control + $hasil[$i]['jumlah'];
                }
                else if($hasil[$i]['kode_kategori']=='efficiency')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_efficiency = $jumlah_efficiency+ $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_efficiency  = $jumlah_total_efficiency + $hasil[$i]['jumlah'];
                }
                else if($hasil[$i]['kode_kategori']=='service')
                {
                        //menghitung jumlah dan dikali
                        $jumlah_service = $jumlah_service+ $hasil[$i]['kali'];
                        //menghitung total performance
                        $jumlah_total_service  = $jumlah_total_service + $hasil[$i]['jumlah'];
                }
                        
                }

                $total_performance = $jumlah_performance / $jumlah_total_performance;
                $total_information = $jumlah_information / $jumlah_total_information;
                $total_economics = $jumlah_economics / $jumlah_total_economics;
                $total_control = $jumlah_control / $jumlah_total_control;
                $total_efficiency = $jumlah_efficiency / $jumlah_total_efficiency;
                $total_service = $jumlah_service / $jumlah_total_service;

                //PERFORMANCE
                if($total_performance>=1 && $total_performance<1.8)
                {
                        $hasil_performance = 'Sangat Tidak Puas';
                        $narasi_performance = "Penilaian Performance mendapat kan hasil ". round($total_performance,2) . " 
                        Maka dapat disimpulkan pengguna merasa sangat tidak puas dengan Performance 
                        dari Work Order Android. Performance dapat ditingkatkan dengan memperbaiki 
                        produksi atau jumlah kerja selama waktu periode tertentu dan memperbaiki waktu 
                        respon yaitu penundaan rata-rata antara transaksi atau permintaan dengan respons 
                        ke transaksi atau permintaan tersebut";
                }
                else if($total_performance>=1.8 && $total_performance<2.6)
                {
                        $hasil_performance = 'Tidak Puas';
                        $narasi_performance = "Penilaian Performance mendapat kan hasil ". round($total_performance,2) . " 
                        Maka dapat disimpulkan pengguna merasa tidak puas dengan Performance dari Work Order Android. 
                        Performance dapat ditingkatkan dengan memperbaiki produksi atau jumlah kerja selama waktu 
                        periode tertentu dan memperbaiki waktu respon yaitu penundaan rata-rata antara transaksi atau 
                        permintaan dengan respons ke transaksi atau permintaan tersebut";
                }
                else if($total_performance>=2.6 && $total_performance<3.4)
                {
                        $hasil_performance = 'Ragu - Ragu';
                        $narasi_performance = "Penilaian Performance mendapat kan hasil ". round($total_performance,2) . " 
                        Maka dapat disimpulkan pengguna merasa ragu - ragu dengan Performance dari Work Order 
                        Android. Performance dapat ditingkatkan dengan memperbaiki produksi atau jumlah kerja 
                        selama waktu periode tertentu dan memperbaiki waktu respon yaitu penundaan rata-rata 
                        antara transaksi atau permintaan dengan respons ke transaksi atau permintaan tersebut";
                }
                else if($total_performance>=3.4 && $total_performance<4.2)
                {
                        $hasil_performance = 'Puas';
                        $narasi_performance = "Penilaian Peformance mendapatkan hasil ". round($total_performance,2) . " 
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Peformance. Walaupun 
                        begitu agar pengguna merasa sangat puas dengan sistem Work Order Android, sistem 
                        masih dapat ditingkatkan dengan cara memperbaiki produksi atau jumlah kerja selama 
                        waktu periode tertentu dan memperbaiki waktu respon yaitu penundaan rata-rata antara 
                        transaksi atau permintaan dengan respons ke transaksi atau permintaan tersebut";
                }
                else if($total_performance>=4.2 && $total_performance<=5)
                {
                        $hasil_performance = 'Sangat Puas';
                        $narasi_performance = "Penilaian Performance mendapat kan hasil ". round($total_performance,2) . "  
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa sangat 
                        puas dengan Performance dari Work Order Android";
                }
                
                //INFORMATION
                if($total_information>=1 && $total_information<1.8)
                {
                        $hasil_information = 'Sangat Tidak Puas';
                        $narasi_information = "Penilaian Information and Data mendapat kan hasil ". round($total_information,2) . "   
                        Maka dapat disimpulkan pengguna  merasa sangat tidak puas dengan Information and 
                        Data dari Work Order Android. Information and Data dapat ditingkatkan dengan cara 
                        memperbaiki informasi yang terdapat dalam sistem, baik jumlahnya atau ke akuratannya";
                }
                else if($total_information>=1.8 && $total_information<2.6)
                {
                        $hasil_information = 'Tidak Puas';
                        $narasi_information = "Penilaian Information and Data mendapat kan hasil ". round($total_information,2) . " 
                        Maka dapat disimpulkan pengguna  merasa  tidak puas dengan Information and Data dari 
                        Work Order Android. Information and Data dapat ditingkatkan dengan cara memperbaiki informasi 
                        yang terdapat dalam sistem, baik jumlahnya atau ke akuratannya";
                }
                else if($total_information>=2.6 && $total_information<3.4)
                {
                        $hasil_information = 'Ragu - Ragu';
                        $narasi_information = "Penilaian Information and Data mendapat kan hasil ". round($total_information,2) . "
                        Maka dapat disimpulkan pengguna  merasa  ragu ragu  dengan Information and Data dari 
                        Work Order Android. Information and Data dapat ditingkatkan dengan cara memperbaiki informasi 
                        yang terdapat dalam sistem, baik jumlahnya atau ke akuratannya";
                }
                else if($total_information>=3.4 && $total_information<4.2)
                {
                        $hasil_information = 'Puas';
                        $narasi_information = "= Penilaian Information and Data mendapatkan hasil ". round($total_information,2) . "
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Information and Data. 
                        Walaupun begitu agar pengguna merasa sangat puas dengan sistem Work Order Android, sistem 
                        masih bisa ditingkat dengan cara memperbaiki informasi yang terdapat dalam sistem, baik jumlahnya 
                        atau ke akuratannya";
                }
                else if($total_information>=4.2 && $total_information<=5)
                {
                        $hasil_information = 'Sangat Puas';
                        $narasi_information = "Penilaian Information and Data mendapat kan hasil ". round($total_information,2) . "
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa puas dengan informasi 
                        dari Work Order Android";
                }

                //ECONOMICS
                if($total_economics>=1 && $total_economics<1.8)
                {
                        $hasil_economics = 'Sangat Tidak Puas';
                        $narasi_economics = "Penilaian Economics  mendapat kan hasil ". round($total_economics,2) . "
                        Maka dapat disimpulkan pengguna  merasa sangat tidak puas dengan Economics dari Work Order Android. 
                        Economics dapat ditingkatkan dengan cara meninjau ulang dari keuntungan yang telah diperoleh dari 
                        sistem informasi tersebut, seperti biaya yang dikeluarkan dan keuntungan kepada perusahaan";
                }
                else if($total_economics>=1.8 && $total_economics<2.6)
                {
                        $hasil_economics = 'Tidak Puas';
                        $narasi_economics = "Penilaian Economics  mendapat kan hasil ". round($total_economics,2) . "
                        Maka dapat disimpulkan pengguna  merasa tidak puas dengan Economics dari Work Order Android. 
                        Economics dapat ditingkatkan dengan cara meninjau ulang dari keuntungan yang telah diperoleh dari 
                        sistem informasi tersebut, seperti biaya yang dikeluarkan dan keuntungan kepada perusahaan";
                }
                else if($total_economics>=2.6 && $total_economics<3.4)
                {
                        $hasil_economics = 'Ragu - Ragu';
                        $narasi_economics = "= Penilaian Economics  mendapat kan hasil ". round($total_economics,2) . "
                        Maka dapat disimpulkan pengguna  merasa ragu - ragu dengan Economics dari Work Order Android. 
                        Economics dapat ditingkatkan dengan cara meninjau ulang dari keuntungan yang telah diperoleh dari 
                        sistem informasi tersebut, seperti biaya yang dikeluarkan dan keuntungan kepada perusahaan";
                }
                else if($total_economics>=3.4 && $total_economics<4.2)
                {
                        $hasil_economics = 'Puas';
                        $narasi_economics = "Penilaian Economics  mendapat kan hasil ". round($total_economics,2) . "
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Economics dari Work Order Android. 
                        Economics Walaupun begitu agar pengguna merasa sangat puas dengan sistem Work Order Android system 
                        masih dapat ditingkatkan dengan cara meninjau ulang dari keuntungan yang telah diperoleh dari sistem 
                        informasi tersebut, seperti biaya yang dikeluarkan dan keuntungan kepada perusahaan";
                }
                else if($total_economics>=4.2 && $total_economics<=5)
                {
                        $hasil_economics = 'Sangat Puas';
                        $narasi_economics = "Penilaian Economics mendapat kan hasil ". round($total_economics,2) . "
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa puas 
                        dengan Economics dari Work Order Android";
                }

                //CONTROL
                if($total_control>=1 && $total_control<1.8)
                {
                        $hasil_control = 'Sangat Tidak Puas';
                        $narasi_control = "Penilaian Control and Security  mendapat kan hasil ". round($total_control,2) . " 
                        Maka dapat disimpulkan pengguna merasa sangat tidak puas dengan Control and Security dari Work Order Android. 
                        Control and Security dapat ditingkatkan dengan cara meningkatkan keamanan dari sistem Work Order Android 
                        seperti tingkat dimana sebuah akses ke perangkat lunak atau data oleh orang yang tidak berhak bisa dikontrol. 
                        dan sistem memiliki mekanisme yang dapat mengontrol atau melindungi program";
                }
                else if($total_control>=1.8 && $total_control<2.6)
                {
                        $hasil_control = 'Tidak Puas';
                        $narasi_control = "Penilaian Control and Security  mendapat kan hasil ". round($total_control,2) . "
                        Maka dapat disimpulkan pengguna merasa tidak puas dengan Control and Security dari Work Order Android. 
                        Control and Security dapat ditingkatkan dengan cara meningkatkan keamanan dari sistem Work Order Android 
                        seperti tingkat dimana sebuah akses ke perangkat lunak atau data oleh orang yang tidak berhak bisa dikontrol. 
                        dan sistem memiliki mekanisme yang dapat mengontrol atau melindungi program";
                }
                else if($total_control>=2.6 && $total_control<3.4)
                {
                        $hasil_control = 'Ragu - Ragu';
                        $narasi_control = "Penilaian Control and Security  mendapat kan hasil ". round($total_control,2) . "
                        Maka dapat disimpulkan pengguna merasa ragu - ragu dengan Control and Security dari Work Order Android. 
                        Control and Security dapat ditingkatkan dengan cara meningkatkan keamanan dari sistem Work Order Android 
                        seperti tingkat dimana sebuah akses ke perangkat lunak atau data oleh orang yang tidak berhak bisa dikontrol. 
                        dan sistem memiliki mekanisme yang dapat mengontrol atau melindungi program";
                }
                else if($total_control>=3.4 && $total_control<4.2)
                {
                        $hasil_control = 'Puas';
                        $narasi_control = "Penilaian Control and Security  mendapatkan hasil ". round($total_control,2) . "
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Control and Security. 
                        Walaupun begitu agar pengguna merasa sangat puas dengan sistem Work Order Android, sistem masih bisa 
                        ditingkat dengan cara meningkatkan keamanan dari sistem Work Order Android agar tingkat dimana sebuah 
                        akses ke perangkat lunak atau data oleh orang yang tidak berhak bisa dikontrol. dan sistem memiliki mekanisme 
                        yang dapat mengontrol atau melindungi program";
                }
                else if($total_control>=4.2 && $total_control<=5)
                {
                        $hasil_control = 'Sangat Puas';
                        $narasi_control = "Penilaian Control and Security mendapat kan hasil ". round($total_control,2) . " 
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa puas dengan Control and Security dari Work Order Android";
                }

                //EFFICIENCY
                if($total_efficiency>=1 && $total_efficiency<1.8)
                {
                        $hasil_efficiency = 'Sangat Tidak Puas';
                        $narasi_efficiency = "Penilaian Efficiency  mendapatkan hasil ". round($total_efficiency,2) . "
                        Maka dapat disimpulkan pengguna merasa sangat tidak puas dengan Efficiency  
                        dari Work Order Android. Efficiency  dapat ditingkatkan dengan cara meningkatkan keunggulan 
                        dari sistem informasi Work Order Android dalam penggunaannya membuang waktu terlalu banyak atau 
                        pemborosan dalam penggunaan persediaan dan material perusahaan";
                }
                else if($total_efficiency>=1.8 && $total_efficiency<2.6)
                {
                        $hasil_efficiency = 'Tidak Puas';
                        $narasi_efficiency = "Penilaian Efficiency  mendapatkan hasil ". round($total_efficiency,2) . "
                        Maka dapat disimpulkan pengguna merasa tidak puas dengan Efficiency  dari Work Order Android. 
                        Efficiency  dapat ditingkatkan dengan cara meningkatkan keunggulan dari sistem informasi Work Order Android 
                        dalam penggunaannya membuang waktu terlalu banyak atau pemborosan dalam penggunaan persediaan dan material perusahaan";
                }
                else if($total_efficiency>=2.6 && $total_efficiency<3.4)
                {
                        $hasil_efficiency = 'Ragu - Ragu';
                        $narasi_efficiency = "Penilaian Efficiency  mendapatkan hasil ". round($total_efficiency,2) . "
                        Maka dapat disimpulkan pengguna merasa ragu - ragu dengan Efficiency  dari Work Order Android. 
                        Efficiency  dapat ditingkatkan dengan cara meningkatkan keunggulan dari sistem informasi Work Order Android 
                        dalam penggunaannya membuang waktu terlalu banyak atau pemborosan dalam penggunaan persediaan dan material perusahaan";
                }
                else if($total_efficiency>=3.4 && $total_efficiency<4.2)
                {
                        $hasil_efficiency = 'Puas';
                        $narasi_efficiency = "Penilaian Efficiency mendapatkan hasil ". round($total_efficiency,2) . "
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Efficiency. 
                        Walaupun begitu agar pengguna merasa sangat puas dengan sistem Work Order Android, sistem masih dapat ditingkatkan 
                        dengan cara meningkatkan keunggulan dari sistem informasi Work Order Android dalam penggunaannya membuang waktu terlalu 
                        banyak atau pemborosan dalam penggunaan persediaan dan material perusahaan";
                }
                else if($total_efficiency>=4.2 && $total_efficiency<=5)
                {
                        $hasil_efficiency = 'Sangat Puas';
                        $narasi_efficiency = "Penilaian Efficiency  mendapat kan hasil ". round($total_efficiency,2) . "
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa puas dengan Efficiency  dari Work Order Android";
                }

                //SERVICE
                if($total_service>=1 && $total_service<1.8)
                {
                        $hasil_service = 'Sangat Tidak Puas';
                        $narasi_service = "Penilaian Service mendapat kan hasil ". round($total_service,2) . "
                        Maka dapat disimpulkan pengguna merasa sangat tidak puas dengan Service dari Work Order Android. 
                        Service dapat ditingkatkan dengan cara meningkatkan pelayanan yang diberikan oleh sistem Work Order Android 
                        seperti Sistem menghasilkan produk yang akurat, Sistem menghasilkan produk yang konsisten, Sistem menghasilkan 
                        produk yang dapat dipercaya, Sistem mudah dipelajari.";
                }
                else if($total_service>=1.8 && $total_service<2.6)
                {
                        $hasil_service = 'Tidak Puas';
                        $narasi_service = "Penilaian Service mendapat kan hasil ". round($total_service,2) . " 
                        Maka dapat disimpulkan pengguna merasa tidak puas dengan Service dari Work Order Android. 
                        Service dapat ditingkatkan dengan cara meningkatkan pelayanan yang diberikan oleh sistem Work Order Android 
                        seperti Sistem menghasilkan produk yang akurat, Sistem menghasilkan produk ";
                }
                else if($total_service>=2.6 && $total_service<3.4)
                {
                        $hasil_service = 'Ragu - Ragu';
                        $narasi_service = "Penilaian Service mendapat kan hasil ". round($total_service,2) . "
                        Maka dapat disimpulkan pengguna merasa ragu - ragu dengan Service dari Work Order Android. 
                        Service dapat ditingkatkan dengan cara meningkatkan pelayanan yang diberikan oleh sistem Work Order Android 
                        seperti Sistem menghasilkan produk yang akurat, Sistem menghasilkan produk yang konsisten, Sistem menghasilkan produk 
                        yang dapat dipercaya, Sistem mudah dipelajari.";
                }
                else if($total_service>=3.4 && $total_service<4.2)
                {
                        $hasil_service = 'Puas';
                        $narasi_service = "Penilaian Service mendapatkan hasil ". round($total_service,2) . "
                        ini merupakan respon yang positif dan pengguna merasa puas dengan Service. Walaupun begitu agar pengguna merasa 
                        sangat puas dengan sistem Work Order Android, sistem masih dapat ditingkatkan dengan cara meningkatkan pelayanan yang 
                        diberikan oleh sistem Work Order Android seperti Sistem menghasilkan produk yang akurat, Sistem menghasilkan produk yang 
                        konsisten, Sistem menghasilkan produk yang dapat dipercaya, Sistem mudah dipelajari";
                }
                else if($total_service>=4.2 && $total_service<=5)
                {
                        $hasil_service = 'Sangat Puas';
                        $narasi_service = "Penilaian Service mendapat kan hasil ". round($total_service,2) . "
                        Ini merupakan respon yang positif dan dapat disimpulkan pengguna sudah merasa puas dengan 
                        Service dari Work Order Android ";
                }

                //PERFORMANCE
                $ambil_data['total_performance'] = round($total_performance,2);
                $ambil_data['hasil_performance'] = $hasil_performance;
                $ambil_data['narasi_performance'] = $narasi_performance;
                //INFORMATION
                $ambil_data['total_information'] = round($total_information,2);
                $ambil_data['hasil_information'] = $hasil_information;
                $ambil_data['narasi_information'] = $narasi_information;
                //ECONOMICS
                $ambil_data['total_economics'] = round($total_economics,2);
                $ambil_data['hasil_economics'] = $hasil_economics;
                $ambil_data['narasi_economics'] = $narasi_economics;
                //CONTROL
                $ambil_data['total_control'] = round($total_control,2);
                $ambil_data['hasil_control'] = $hasil_control;
                $ambil_data['narasi_control'] = $narasi_control;
                //EFFICIENCY
                $ambil_data['total_efficiency'] = round($total_efficiency,2);
                $ambil_data['hasil_efficiency'] = $hasil_efficiency;
                $ambil_data['narasi_efficiency'] = $narasi_efficiency;
                //SERVICE
                $ambil_data['total_service'] = round($total_service,2);
                $ambil_data['hasil_service'] = $hasil_service;
                $ambil_data['narasi_service'] = $narasi_service;

                //KESIMPULAN
                if($total_performance<3.4 || $total_information<3.4 || $total_economics<3.4 || 
                $total_control<3.4 || $total_efficiency<3.4 || $total_service<3.4)
                {
                        $ambil_data['kesimpulan'] = 1;                        
                }
                else
                {
                        $ambil_data['kesimpulan'] = 0;
                }
                
                $a1=array("nama"=>"performance","hasil"=>$total_performance);
                $a2=array("nama"=>"information","hasil"=>$total_information);
                $data_chart = (array_merge_recursive($a1,$a2));                
                $ambil_data['data_chart'] = json_encode($data_chart);
                // var_dump($data);die();

                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_hasil' ,$ambil_data ); 
           }
           else
           {
                $this->load->view('super_admin/v_super_admin_side_navbar'  );        
                $this->load->view('super_admin/v_super_admin_top_navbar');         
                $this->load->view('super_admin/data/v_super_admin_data_hasil_kosong' );     
           }
        }

        

}
?>