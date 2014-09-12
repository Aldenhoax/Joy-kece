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
class M_kaber extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
    }
    function tampil()
    {
        $query = $this->db->query("SELECT id as idn, nama_awal as nama_awal, nama_akhir as nama_akhir, foto as foto, username as username,
(select COUNT(tb_user_id) from tb_kalimat WHERE tb_user_id=idn) as total
from tb_user order by total desc limit 4");
        $query = $query->result_array();
        return $query;
    }

}