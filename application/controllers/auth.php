<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	## 		Don't Remove This!		  ##
	## Copyright 2014 Ferdhika Yudira ##
	@Author 	: Ferdhika Yudira
	@Copyright 	: 2014
	@Website	: http://ferdhika.web.id
	@Blog 		: http://rpl4rt.blogspot.com

	Donate with paypal to rpl4rt08@gmail.com
	Silahkan kembangkan script ini, dan jangan menghapus ini!
	Cantumkan copyright untuk menghargai si pembuat terima kasih..
	Code is free! 
*/
class Auth extends CI_Controller {
	var $kelamin;
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->config('facebook');
        $this->load->library('facebook',$this->config->item('facebook'));
        $fbConfig = $this->config->item('facebook');
		$this->judul = $this->config->item('judul');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords'); 
		$this->default_pass = $this->config->item('default_pass');
		# Share FB #
		$this->bagikan = $this->config->item('bagikan'); 
		$this->pesan_fb = $this->config->item('pesan_fb'); 
		$this->nama_fb = $this->config->item('nama_fb'); 
		$this->deskripsi_fb = $this->config->item('deskripsi_fb'); 
		$this->gambar_fb = $this->config->item('gambar_fb'); 
		$this->tgl = date('Y-m-d');
		
	}

	public function index()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright
			);
		$this->load->view('auth/auth',$data);
	}

	public function masuk()
	{
		$username = "robot";
		$password = "123456";
		$email = "robot@ymail.com";
		$nama_awal = "Ferdhikaaaa";
		$nama_akhir = "Ganteng";
		$kelamin = "L";
		$foto = "https://graph.facebook.com/ferdhika31/picture";
		$cek = $this->m_user->cek($email);
		$cek_jum = count($cek);
		$datainp = array(
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'nama_awal' => $nama_awal,
			'nama_akhir' => $nama_akhir,
			'kelamin' => $kelamin,
			'foto' => $foto,
			);
		$dataubh = array(
			'username' => $username,
			'password' => $password,
			'nama_awal' => $nama_awal,
			'nama_akhir' => $nama_akhir,
			'kelamin' => $kelamin,
			'foto' => $foto,
			);
		if($cek_jum	>= 1){
			$idna = array('email' => $email);
			$this->m_user->ubah($dataubh,$idna);
		}else{
			$this->m_user->simpan($datainp);
		}
		
		$this->session->set_userdata(array(
            'isLogin'   => TRUE,
            'username'  => $username,
            'kelamin'	=> $kelamin,
            'nama_awal'	=> $nama_awal,
            'nama'      => $nama_awal.' '.$nama_akhir,
            'foto'		=> $foto,
            ));

		redirect(base_url());
	}

	public function keluar()
	{
   		$this->session->sess_destroy();
   		redirect(base_url());
	}

	function facebook() {
        $fbConfig = $this->config->item('facebook');  
        $scope = "email,read_stream,user_birthday,user_photos,photo_upload,publish_stream,manage_pages,status_update,offline_access,user_likes";
        $url = 'https://graph.facebook.com/oauth/authorize?client_id='.$fbConfig['appId'].'&redirect_uri='.site_url('auth/do_register_facebook_ext').'&scope='.$scope.'&display=popup';
        redirect($url);
    }
 
    function do_register_facebook_ext() {
        $fbConfig = $this->config->item('facebook');
        if(isset($_GET['code'])) {
            $token_url = "https://graph.facebook.com/oauth/access_token?client_id=".$fbConfig['appId']."&redirect_uri=".site_url('auth/do_register_facebook_ext')."&client_secret=".$fbConfig['secret'].'&code='.$_GET['code'];
            $token_data = file_get_contents($token_url); // grab data token
            // echo "<pre>";

            // print_r($token_data);
            preg_match("/access_token=([^&]+)/",$token_data,$token); // filter grap data untuk dapatkan token
            $access_token = $token[1]; // ambil token FB
            # biasanya saya simpan access_token ke database bila perlu untuk melakukan proses API lainnya
           
            $url = 'https://graph.facebook.com/me?access_token='.$access_token; # url untuk ambil data user Login FB
            $fb  =json_decode(file_get_contents($url),true); // ambil data user login FB
           
            // print_r($fb);
            $email = "";
			$username = "";
			if(empty($fb['email'])){
				$email = "";
			}else{
				$email = $fb['email'];
			}
			if(empty($fb['username'])){
				$username = "";
			}else{
				$username = $fb['username'];
			}
			$password = md5($this->default_pass); //default password
			$nama_awal = $fb['first_name'];
			$nama_akhir = $fb['last_name'];
			if($fb['gender']=="male"){
				$kelamin = "L";
			}else{
				$kelamin = "P";
			}
			$foto = "https://graph.facebook.com/".$username."/picture";
            $id_fb = $fb['id']; # ambil ID User FB
        
            
           	#Cek kalo udah pernah login
            $cek = $this->m_user->cek($email,$username);
			$cek_jum = count($cek);
			$datainp = array(
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'nama_awal' => $nama_awal,
				'nama_akhir' => $nama_akhir,
				'kelamin' => $kelamin,
				'foto' => $foto,
				'status' => 1,
				'tgl_daftar' => $this->tgl
			);
			$dataubh = array(
				'email' => $email,
				'password' => $password,
				'nama_awal' => $nama_awal,
				'nama_akhir' => $nama_akhir,
				'kelamin' => $kelamin,
				'foto' => $foto,
				'tgl_update' => $this->tgl
			);
			if($cek_jum	>= 1){
				$idna = array('username' => $username);
				$this->m_user->ubah($dataubh,$idna);
			}else{
				# array ini untuk kirim ke wall user FB
            	if($this->bagikan==TRUE){
            	$attachment = array(
                    'userid'=> $id_fb,
                    'access_token' => $access_token,
                    'message' => $this->pesan_fb,
                    'name' => $this->nama_fb,
                    'link' => base_url(), // Link URL sisip disini
                    'description' => $this->deskripsi_fb, // Penjelasan lebih lengkap sisip di sini juga
                    'picture'=>$this->gambar_fb, // gambar dari path local
            	);
            	$post = $this->facebook->api('/me/feed', 'POST', $attachment);
            	}

				$this->m_user->simpan($datainp);
			}
		# biasanya sy buat session untuk menyimpan data di halaman lain nya
		$this->session->set_userdata(array(
            'isLogin'   => TRUE,
            'username'  => $username,
            'kelamin'	=> $kelamin,
            'nama_awal'	=> $nama_awal,
            'nama'      => $nama_awal.' '.$nama_akhir,
            'foto'		=> $foto,
            ));

            # panggil halaman selesai login
            redirect(base_url());
        }else{
            # jika gagal dapatkan kode atau user FB tidak menyetujui aplikasi kita
            echo "gagal registrasi! silahkan kembali.";
        }
    }

    public function tanya()
	{
		header("Content-type: text/javascript");
		$teks = $this->input->get('txt');
		if($teks=='ya' || $teks=='Ya'){
			$arr = array('tanya'=> $teks ,'respon' => "Kalo kaka mau login klik ".anchor(base_url('auth/facebook.cc'),"disini").". ");
		}elseif($teks=='tidak' || $teks=='Tidak'){
			$arr = array('tanya'=> $teks ,'respon' => "oh yaudah gpp :)");
		}elseif($teks=='heeh' || $teks=='Heeh'){
			$arr = array('tanya'=> $teks ,'respon' => "Mun dek login klik ieu we -> ".anchor(base_url('auth/facebook.cc'),"facebook").".");
		}elseif($teks=='teu' || $teks=='Teu'){			
			$arr = array('tanya'=> $teks ,'respon' => 'nya ngges :P');
		}else{
			$txtx = array("ya/tidak? -_-","heeh/teu -_-");
			$tx = array_rand($txtx,1);
			$aw = "";
			if($tx==0){
				$aw = $txtx[0];
			}else{
				$aw = $txtx[1];
			}
			$arr = array('tanya'=> $teks ,'respon' => $aw);
		}
		
		echo json_encode($arr);
	}
}