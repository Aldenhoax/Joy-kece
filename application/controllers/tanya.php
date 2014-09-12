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
class Tanya extends CI_Controller {

	function __construct()
	{	
		parent:: __construct();
		$this->gangerti = $this->config->item('gangerti'); 
	}

	public function index()
	{
		header("Content-type: text/javascript");
		$teks = $this->input->get('txt');
		if($teks=="'" or $teks=='"'){
			$teks = "Aku maho";
		}
		$teks = strtolower($teks);
		$length = strlen($teks);
		if($teks){
			if($length>4){
				$hasil = $this->db->query("SELECT * FROM tb_kalimat WHERE MATCH(tanya) AGAINST('".$teks."' IN BOOLEAN MODE) and stt='1';");
			}else{
				$hasil = $this->db->query("SELECT * FROM tb_kalimat WHERE tanya like '%".$teks."%' and stt='1';");
			}
			
			if($hasil->num_rows() > 0){

				$cius = $hasil->result_array();

				shuffle($cius);

				$arr = array('tanya'=> $teks ,'respon' => $cius[0]['jawab']);
			}else{

				$cius = $this->gangerti;

				shuffle($cius);
				$arr = array('tanya'=> $teks ,'respon' => $cius[0]);
			}
		}else{
			$arr = array('respon' => 'masukin dek textnya');	
		}
		echo json_encode($arr);
	}
}