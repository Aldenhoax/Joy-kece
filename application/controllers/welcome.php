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
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */