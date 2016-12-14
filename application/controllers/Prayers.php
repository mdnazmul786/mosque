<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prayers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Prayers_Model');
    }

    public function index() {
        
    }

    public function insert_prayer() {

        $this->form_validation->set_rules('prayer_name', 'Prayer_name', 'required');
        $this->form_validation->set_rules('pstarttime', 'Pstarttime', 'required');
        $this->form_validation->set_rules('azantime', 'Azantime', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('ekamtime', 'Ekamtime Confirmation', 'required');
        $this->form_validation->set_rules('pendtime', 'Pendtime', 'required');
        $this->form_validation->set_rules('pdate', 'Pdate', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $prayername = $this->input->post('prayer_name');
            $prayertime = $this->input->post('pstarttime');
            $azantime = $this->input->post('azantime');
            $ekamtime = $this->input->post('ekamtime');
            $prayerendtime = $this->input->post('pendtime');
            $prayerdate = $this->input->post('pdate');

            $data = [
                'MosjidNo' => subdomainid,
                'PrayerName' => $prayername,
                'AzanTime' => $azantime,
                'EkamaTime' => $ekamtime,
                'PrayerEndTime' => $prayerendtime,
                'PrayerStatus' => 1,
                'PrayerIsssueDate' => $prayerdate,
                'PrayerStartTime' => $prayertime
            ];

            $this->Prayers_Model->save_prayers_data($data);

            redirect('admin/prayer-setting');
        }
    }

    public function delete_prayertime() {

        $prayerid = $_GET['pid'];
        $this->Prayers_Model->delete_prayerid($prayerid);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
