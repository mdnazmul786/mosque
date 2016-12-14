<?php

class Admin_Model extends CI_Model{
    
    public function register_admin(array $data){
        $this->db->insert('cl_admin',$data);
    }
    
    public function check_adminlogin(array $data){
        
        $this->db->select('*');
        $this->db->from('cl_admin');
        
        $this->db->where($data);
        
        $query = $this->db->get();
        $result = $query->row();
        
        return $result;
        
    }
    
    public function getall_admins(){
        
        $this->db->select('*');
        $this->db->from('cl_admin');
        $this->db->where('MosjidNo',subdomainid);
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
        
    }
    
    public function update_adminstatus($adminid){
        $data = [
            'AdminStatus'=>1
        ];
        $this->db->where('AdminId',$adminid);
        $this->db->where('MosjidNo',subdomainid);
        $this->db->update('cl_admin',$data);
        
    }
    
}
