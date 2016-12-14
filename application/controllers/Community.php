<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Community_Model');
    }

    public function create_about() {
        
        $this->form_validation->set_rules('abouttitle', 'Abouttitle', 'required');
        $this->form_validation->set_rules('aboutdetails', 'Aboutdetails', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $abouttitle = $this->input->post('abouttitle');
            $aboutdetails = $this->input->post('aboutdetails');

            $image = '';
            $config = array();
            $config['upload_path'] = './include/images/about/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('aboutimages')) {
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

                $image = base_url() . "include/images/about/" . $upload_data['file_name'];
                $image_name = $upload_data['file_name'];
            }

            $data = [
                'MosjidNo' => subdomainid,
                'AboutUsTitle' => $abouttitle,
                'AboutUsDetails' => $aboutdetails,
                'AboutUsImages' => $image,
                'AboutUsStatus' => 1,
                'AboutUsIssueDate' => date('d-m-Y')
            ];

            $this->Community_Model->insert_aboutusdata($data);

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
