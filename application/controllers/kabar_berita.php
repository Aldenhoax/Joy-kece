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
class Kabar_berita extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->judul = $this->config->item('judul');
		$this->nama_admin = $this->config->item('nama_admin');
		$this->copyright = $this->config->item('copyright'); 
		$this->deskripsi = $this->config->item('deskripsi'); 
		$this->keywords = $this->config->item('keywords'); 
		$this->robot1 = $this->config->item('robot1'); 
		$this->robot2 = $this->config->item('robot2'); 
		$this->robot3 = $this->config->item('robot3');
		$this->robot4 = $this->config->item('robot4');
		$this->robot5 = $this->config->item('robot5'); 
		$this->robot6 = $this->config->item('robot6'); 
		$this->load->model('m_kaber');
		$this->nama = $this->session->userdata('nama');
	}

	public function index()
	{
		$adw = $this->m_kaber->tampil();
		$jumlah = count($adw);
		$data = array(
			'data'		=> $adw,
			'jml'	=> $jumlah,
			'nama_situs' => $this->judul,
			'nama_admin' => $this->nama_admin,
			'copyright'	=> $this->copyright,
			'nama'	=> $this->nama,
			'robot1'	=> $this->robot1,
			'robot2'	=> $this->robot2,
			'robot3'	=> $this->robot3,
			'robot4'	=> $this->robot4,
			'robot5'	=> $this->robot5,
			'robot6'	=> $this->robot6,
			);
		$this->load->view('kabar_berita',$data);
		
	}
}