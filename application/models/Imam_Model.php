<?php

class Imam_Model extends CI_Model{
    
    public function save_imams_data(array $data){
        $this->db->insert('cl_mosjid_imam',$data);
    }
    
    public function getall_imam(){
        
        $this->db->select('*');
        $this->db->from('cl_mosjid_imam');
        
        $this->db->where('MosjidNo',subdomainid);
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
}
