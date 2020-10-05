<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

    function __construct() { 
        parent::__construct(); 
        $this->table='tbl_post';

    }
    function fetch(){
        return $this->db->get($this->table)->result();
    }
    function fetchById($id = 0){
        return $this->db->get_where('tbl_post',array('post_id'=>$id))->row_array();
    }
    function add($postField = array()){

        $response = $this->db->insert('tbl_post',$postField);
        return $response?true:false;
    }
    function delete($id = 0){
        $this->db->where('post_id',$id);
        $response=$this->db->delete('tbl_post');
        return $response?true:false;
    }
    function update($data = array(), $id = ''){
        // $this->db->where('post_id',$id);
        $response=$this->db->update('tbl_post',$data,array('post_id'=>$id));
        return $response?true:false;

    }

}
?>