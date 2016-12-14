<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Programs_Model');
    }

    public function create_events() {
        
        $this->form_validation->set_rules('eventsname', 'Eventsname', 'required');
        $this->form_validation->set_rules('eventdetails', 'Eventdetails', 'required');
        $this->form_validation->set_rules('eventstarttime', 'Eventstarttime', 'required');
        $this->form_validation->set_rules('eventlocation', 'Eventlocation', 'required');
        $this->form_validation->set_rules('eventduration', 'Eventduration', 'required');
        $this->form_validation->set_rules('eventcontact', 'Eventcontact', 'required');
        $this->form_validation->set_rules('eventpublisher', 'Eventpublisher', 'required');
        $this->form_validation->set_rules('eventorganizer', 'Eventorganizer', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $eventtitle = $this->input->post('eventsname');
            $eventdetails = $this->input->post('eventdetails');
            $eventstarttime = $this->input->post('eventstarttime');
            $eventlocation = $this->input->post('eventlocation');
            $eventduration = $this->input->post('eventduration');
            $eventorganizer = $this->input->post('eventorganizer');
            $eventcontact = $this->input->post('eventcontact');
            $eventpublisher = $this->input->post('eventpublisher');

            $image = '';
            $config = array();
            $config['upload_path'] = './include/images/events/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('eventimages')) {
                $this->data['error'] = array('error' => $this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
                //error
                echo 'Error';
            } else {

                $upload_data = $this->upload->data();

                //resize:

                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 421;
                $config['height'] = 440;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                $image = base_url() . "include/images/events/" . $upload_data['file_name'];
                $image_name = $upload_data['file_name'];
            }

            $data = [
                'MosjidNo' => subdomainid,
                'EventTitle' => $eventtitle,
                'EventDescription' => $eventdetails,
                'EventStartTime' => $eventstarttime,
                'EventLocation' => $eventlocation,
                'EventDuration' => $eventduration,
                'EventOrganizer' => $eventorganizer,
                'EventPublisherName' => $eventpublisher,
                'EventContactdetails' => $eventcontact,
                'EventImages' => $image,
                'EventIssueDate' => date('d-m-Y')
            ];

            $this->Programs_Model->insert_eventsdata($data);

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
