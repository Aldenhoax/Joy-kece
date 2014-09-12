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
class M_user extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->tbl = "tb_user";
    }
    function cek($email,$username)
    {
        $query = $this->db->query("SELECT * FROM tb_user where email='".$email."' or username='".$username."'");
        $query = $query->result_array();
        return $query;
    }

    function simpan($data = array())
    {
        $query = $this->db->insert($this->tbl, $data); 
    } 

    function ubah($data = array(),$idna=array())
    {
        $this->db->where($idna);
        $this->db->update($this->tbl,$data);
    }

}