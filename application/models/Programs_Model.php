<?php

class Programs_Model extends CI_Model{
    
    public function insert_eventsdata(array $data){
        
        $this->db->insert('cl_events',$data);
        
    }
    public function getall_events(){
        
        $this->db->select('*');
        $this->db->from('cl_events');
        
        $this->db->where('MosjidNo',subdomainid);
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
}
