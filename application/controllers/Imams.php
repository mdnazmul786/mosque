<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Imams extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Imam_Model');
    }

    public function create_imam() {

        $this->form_validation->set_rules('imamname', 'Imamname', 'required');
        $this->form_validation->set_rules('imamdetails', 'Imamdetails', 'required');
        $this->form_validation->set_rules('educationdetails', 'Educationdetails', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('nikah', 'Nikah', 'required');
        $this->form_validation->set_rules('divorce', 'Divorce', 'required');
        $this->form_validation->set_rules('khatnah', 'Khatnah', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $imamname = $this->input->post('imamname');
            $imamdetails = $this->input->post('imamdetails');
            $imameducation = $this->input->post('educationdetails');
            $nikah = $this->input->post('nikah');
            $divorce = $this->input->post('divorce');
            $khatnah = $this->input->post('khatnah');

            $image = '';
            $config = array();
            $config['upload_path'] = './include/images/imams/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('imamimage')) {
                $this->data['error'] = array('error' => $this->upload->display_errors('<div class="alert alert-danger">', '</div>'));
                //error
                echo 'Error';
            } else {

                $upload_data = $this->upload->data();

                //resize:

                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 600;
                $config['height'] = 600;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                $image = base_url() . "include/images/imams/" . $upload_data['file_name'];
                $image_name = $upload_data['file_name'];
            }

            $data = [
                'MosjidNo' => subdomainid,
                'ImamName' => $imamname,
                'ImamDetails' => $imamdetails,
                'ImamEducation' => $imameducation,
                'ImamNikah' => $nikah,
                'ImamDivorce' => $divorce,
                'ImamKhatnah' => $khatnah,
                'ImamImages' => $image,
                'ImamIssueDate' => date('d-m-Y')
            ];

            $this->Imam_Model->save_imams_data($data);

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
