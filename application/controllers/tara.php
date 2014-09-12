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
class Tara extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->judul = $this->config->item('judul');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords');
		$this->nama_admin = $this->config->item('nama_admin'); 
	}

	public function index()
	{
		$data = array(
			'nama_situs' => $this->judul,
			'copyright'	=> $this->copyright,
			'nama_admin' => $this->nama_admin,
			'nama_user'	=> $this->session->userdata('nama')
			);
	
    	$this->load->view('tanya_login',$data);
    	
	}
}