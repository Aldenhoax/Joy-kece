<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
    ##      Don't Remove This!        ##
    ## Copyright 2014 Ferdhika Yudira ##
    @Author     : Ferdhika Yudira
    @Copyright  : 2014
    @Website    : http://ferdhika.web.id
    @Blog       : http://rpl4rt.blogspot.com

    Donate with paypal to rpl4rt08@gmail.com
    Silahkan kembangkan script ini, dan jangan menghapus ini!
    Cantumkan copyright untuk menghargai si pembuat terima kasih..
    Code is free! 
*/
class M_ngajar extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
    }
    function simpan($tanya,$jawab,$tanggal,$username)
    {
        $query = $this->db->query("INSERT INTO tb_kalimat(tanya,jawab,stt,tanggal,tb_user_id) SELECT '".$tanya."','".$jawab."','1','".$tanggal."',id FROM tb_user WHERE username='".$username."'");
        $query = $query->result_array();
        return $query;
    }

    

}