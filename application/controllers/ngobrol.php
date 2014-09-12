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
class Ngobrol extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->judul = $this->config->item('judul');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords');
		$this->nama_admin = $this->config->item('nama_admin'); 
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
		$this->sesi = $this->session->userdata('isLogin');
	}

	public function index()
	{
		redirect(base_url('ruang_obrolan.cc'));
	}

	public function dika()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'nama_admin' => $this->nama_admin,
			'copyright'	=> $this->copyright,
			'jones'	=> $this->robot1,
			'psn_robot1'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot1)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol',$data);
    	}
		
	}
	public function jones2()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'jones'	=> $this->robot2,
			'psn_robot2'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot2)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol/jones2',$data);
    	}
		
	}
	public function jones3()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'jones'	=> $this->robot3,
			'psn_robot3'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot3)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol/jones3',$data);
    	}
	}
	public function jones4()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'jones'	=> $this->robot4,
			'psn_robot4'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot4)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol/jones4',$data);
    	}
	}
	public function jones5()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'jones'	=> $this->robot5,
			'psn_robot5'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot5)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol/jones5',$data);
    	}
	}
	public function jones6()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'jones'	=> $this->robot6,
			'psn_robot6'=> str_replace("[nama]",$this->nama_depan,$this->psn_robot6)
			);
		if($this->sesi == FALSE)
     	{
       		$this->load->view('tanya_login',$data);
    	}else{
    		$this->load->view('ngobrol/jones6',$data);
    	}
	}
}