<?php

class Community_Model extends CI_Model{
    
    public function insert_aboutusdata($data){
        $this->db->insert('cl_about_us',$data);
    }
    
    public function getall_aboutus(){
        
        $this->db->select('*');
        $this->db->from('cl_about_us');
        
        $this->db->where('MosjidNo',subdomainid);
        
        $query = $this->db->get();
        $result = $query->row();
        
        return $result;
    }
    
}
