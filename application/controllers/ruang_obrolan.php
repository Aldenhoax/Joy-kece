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
class Ruang_obrolan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->judul = $this->config->item('judul');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords'); 
		$this->robot1 = $this->config->item('robot1');
		$this->psn_robot1 = $this->config->item('psn_robot1'); 
		$this->robot2 = $this->config->item('robot2');
		$this->psn_robot2 = $this->config->item('psn_robot2');  
		$this->robot3 = $this->config->item('robot3');
		$this->psn_robot3 = $this->config->item('psn_robot3'); 
		$this->robot4 = $this->config->item('robot4');
		$this->psn_robot4 = $this->config->item('psn_robot4'); 
		$this->robot5 = $this->config->item('robot5'); 
		$this->psn_robot5 = $this->config->item('psn_robot5'); 
		$this->robot6 = $this->config->item('robot6'); 
		$this->psn_robot6 = $this->config->item('psn_robot6'); 
		$this->nama_depan = $this->session->userdata('nama_awal');
	}

	public function index()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'robot1'	=> $this->robot1,
			'psn_robot1'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot1),
			'robot2'	=> $this->robot2,
			'psn_robot2'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot2),
			'robot3'	=> $this->robot3,
			'psn_robot3'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot3),
			'robot4'	=> $this->robot4,
			'psn_robot4'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot4),
			'robot5'	=> $this->robot5,
			'psn_robot5'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot5),
			'robot6'	=> $this->robot6,
			'psn_robot6'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot6)
			);
		$sesi = $this->session->userdata('isLogin');
      	if($sesi == FALSE){
      		$this->load->view('r_obrolan/ruang_obrolan_',$data);
      	}else{
      		$this->load->view('r_obrolan/ruang_obrolan',$data);
      	}
			
	}
}