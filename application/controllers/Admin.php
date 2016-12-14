<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_Model');
    }

    public function admin_register() {

        $this->form_validation->set_rules('adminname', 'Adminname', 'required');
        $this->form_validation->set_rules('adminmail', 'Adminmail', 'required');
        $this->form_validation->set_rules('adminpass', 'Adminpass', 'required', array('required' => 'You must provide a %s.'));

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $adminname = $this->input->post('adminname');
            $adminmail = $this->input->post('adminmail');
            $adminpassword = $this->input->post('adminpass');
            
            $adminstatus = 0;
            if(isset($_POST['adminstatus'])){
                $adminstatus = $this->input->post('adminstatus');
            }

            $data = [
                'MosjidNo' => subdomainid,
                'AdminName' => $adminname,
                'AdminMail' => $adminmail,
                'AdminPassword' => md5($adminpassword),
                'AdminStatus' => $adminstatus,
                'AdminIssueDate' => date('d-m-Y')
            ];

            $this->Admin_Model->register_admin($data);

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function admin_login() {

        $this->form_validation->set_rules('adminmail', 'Adminmail', 'required');
        $this->form_validation->set_rules('adminpassword', 'Adminpassword', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $adminmail = $this->input->post('adminmail');
            $adminpassword = $this->input->post('adminpassword');

            $data = [
                'MosjidNo' => subdomainid,
                'AdminMail' => $adminmail,
                'AdminPassword' => md5($adminpassword),
                'AdminStatus' => 1,
            ];

            $logdata = $this->Admin_Model->check_adminlogin($data);

            if (isset($logdata)) {

                $this->session->set_userdata('logged', $logdata);
                redirect('admin-panel');
            } else {

                redirect('admin-panel');
            }
        }
    }

    public function admin_logout() {

        $this->session->unset_userdata('logged');
        $this->load->view('admin/login/login');
        
    }

    public function admin_approve() {
        
        $adminid = $_GET['aid'];
        $this->Admin_Model->update_adminstatus($adminid);
        redirect($_SERVER['HTTP_REFERER']);
        
    }

}
