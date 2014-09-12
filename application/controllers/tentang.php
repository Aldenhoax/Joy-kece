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
class Tentang extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->judul = $this->config->item('judul');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords'); 
	}

	public function index()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright
			);
		$this->load->view('tentang',$data);
	}

	public function tanya()
	{
		header("Content-type: text/javascript");
		$teks = $this->input->get('txt');
		if($teks=="'" or $teks=='"'){
			$teks = "Aku maho";
		}elseif($teks==1){
			$teks = "Satu";
		}elseif($teks==2){
			$teks = "Duaa";
		}elseif($teks==3){
			$teks = "Tiga";
		}elseif($teks==0){
			$teks = "Bantuan Urang!";
		}else{
			$teks = "Ferdhika ganteng";
		}
		$teks = strtolower($teks);

		if($teks){
			$hasil = $this->db->query("SELECT * FROM tb_about WHERE MATCH(no) AGAINST('".$teks."' IN BOOLEAN MODE);");
			if($hasil->num_rows() > 0){

				$cius = $hasil->result_array();

				shuffle($cius);

				$arr = array('no'=> $teks ,'response' => $cius[0]['jawaban']);
			}else{

				$cius = array("Jangan masukin kata lain selain angka yang ada di list","Salah euy!");

				shuffle($cius);
				$arr = array('no'=> $teks ,'response' => $cius[0]);
			}
		}else{
			$arr = array('response' => 'masukin dek textnya');	
		}
		echo json_encode($arr);
	}
}