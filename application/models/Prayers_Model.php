<?php

class Prayers_Model extends CI_Model {

    public function save_prayers_data(array $data) {
        $whereclaus = array(
            'MosjidNo' => subdomainid,
            'PrayerName' => $data['PrayerName'],
        );

        $this->db->select('*');
        $this->db->from('cl_prayer_times');

        $this->db->where($whereclaus);

        $query = $this->db->get();
        $result = $query->row();

        if (count($result) > 0) {

            $this->db->where('PrayerId',$result->PrayerId);
            $this->db->update('cl_prayer_times', $data);
        } else {

            $this->db->insert('cl_prayer_times', $data);
        }
    }

    public function getall_prayerstime() {
        
        $whereclaus = array(
            'MosjidId' => subdomainid,
            'PrayerDate' => date('d-m-Y'),
        );

        $this->db->select('cl_mosjid_list.*,cl_prayer_times.*,cl_zone.*');
        $this->db->from('cl_mosjid_list');
        
        $this->db->join('cl_prayer_times', 'cl_prayer_times.PrayerZone = cl_mosjid_list.MosjidZone', 'left');
        $this->db->join('cl_zone', 'cl_zone.ZoneId = cl_prayer_times.PrayerZone', 'left');
        $this->db->where($whereclaus);
        
        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function delete_prayerid($pid) {
        $whereclaus = array(
            'MosjidNo' => subdomainid,
            'PrayerId' => $pid,
        );
        $data = array(
            'PrayerStatus' => 0
        );
        $this->db->where($whereclaus);
        $this->db->update('cl_prayer_times', $data);
    }

}
