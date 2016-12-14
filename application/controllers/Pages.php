<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Prayers_Model');
        $this->load->model('Admin_Model');
        $this->load->model('Imam_Model');
        $this->load->model('Community_Model');
        $this->load->model('Programs_Model');
    }

    public function index() {

        $prayername = array("Fajr", "Sunrise", "Dhuhr", "Asr", "Sunset", "Maghrib", "Isha");
        $removeKeys = array('MosjidId', 'MosjidName', 'MosjidZone', 'MosjidSubDomain', 'IssueDate', 'PrayerId', 'PrayerZone', 'PrayerDate', 'PrayerModifyDate', 'ZoneId', 'ZoneName', 'ZoneCode', 'ZoneDate');
        $data = array();

        $data['prayersname'] = $prayername;

        $allprayers = $this->Prayers_Model->getall_prayerstime();
        $arrayprayers = json_decode(json_encode($allprayers), True);

        foreach ($removeKeys as $key) {
            unset($arrayprayers[$key]);
        }
        unset($arrayprayers['MosjidId']);
        echo '<pre>';
        print_r($arrayprayers);
        die();
        $data['all_prayers'] = $allprayers;
        $data['all_events'] = $this->Programs_Model->getall_events();
        $data['all_aboutus'] = $this->Community_Model->getall_aboutus();
        $data['sliders'] = $this->load->view('main/slider', '', TRUE);
        $data['page_content'] = $this->load->view('main/home', '', TRUE);
        $this->load->view('master', $data);
    }

    public function fabout_us() {
        $data = array();
        $data['sliders'] = $this->load->view('main/header_image', '', TRUE);
        $data['page_content'] = $this->load->view('about/aboutus', '', TRUE);
        $this->load->view('master', $data);
    }

    public function fprojects() {
        $data = array();
        $data['sliders'] = $this->load->view('main/header_image', '', TRUE);
        $data['page_content'] = $this->load->view('project/projects', '', TRUE);
        $this->load->view('master', $data);
    }

    //Admin panel Pages

    public function verify_login() {

        if (!$this->session->userdata('logged')) {
            $this->load->view('admin/login/login');
        } else {
            return TRUE;
        }
    }

    public function admin_panel() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['admin_content'] = $ci->load->view('admin/home/home', '', TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function prayers_setting() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = 'Prayer Settings';
            $data['all_prayerstime'] = $ci->Prayers_Model->getall_prayerstime();
            $data['admin_content'] = $ci->load->view('admin/prayer/prayers', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function imams_profile() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Imam's Profile";
            $data['all_imams'] = $ci->Imam_Model->getall_imam();
            $data['admin_content'] = $ci->load->view('admin/imam/imams', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function headers() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Headers Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/headers', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function sliders() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Sliders Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/sliders', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function footers() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Footers Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/footers', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function welcome_messages() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Welcome Messages Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/welcome_msg', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function testimonial() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Testimonials Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/testimonial', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function address() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Address Settings";
            $data['admin_content'] = $ci->load->view('admin/contents/address', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function about_us() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "About-Us Settings";
            $data['all_aboutus'] = $ci->Community_Model->getall_aboutus();
            $data['admin_content'] = $ci->load->view('admin/community/aboutus', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function contact_us() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Contact-Us Settings";
            $data['admin_content'] = $ci->load->view('admin/community/contactus', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function comity() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Comity Settings";
            $data['admin_content'] = $ci->load->view('admin/community/comity', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function team() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Teams Settings";
            $data['admin_content'] = $ci->load->view('admin/community/team', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function images_gallery() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Images Gallery Settings";
            $data['admin_content'] = $ci->load->view('admin/media/imagesgallery', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function audios_gallery() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Audios Gallery Settings";
            $data['admin_content'] = $ci->load->view('admin/media/audiosgallery', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function videos_gallery() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Videos Gallery Settings";
            $data['admin_content'] = $ci->load->view('admin/media/videosgallery', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function pdf_gallery() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Pdf Gallery Settings";
            $data['admin_content'] = $ci->load->view('admin/media/pdfsgallery', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function events() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Event Management Settings";
            $data['all_event'] = $ci->Programs_Model->getall_events();
            $data['admin_content'] = $ci->load->view('admin/program/events', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function blogs() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Blog Management Settings";
            $data['admin_content'] = $ci->load->view('admin/program/blogs', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function news() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "News Management Settings";
            $data['admin_content'] = $ci->load->view('admin/program/news', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function projects() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Projects Management Settings";
            $data['admin_content'] = $ci->load->view('admin/utility/project', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function shops() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Shops Management Settings";
            $data['admin_content'] = $ci->load->view('admin/utility/shop', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function activities() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Activity Settings";
            $data['admin_content'] = $ci->load->view('admin/activity/activities', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function service_list() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Service List Settings";
            $data['admin_content'] = $ci->load->view('admin/service/servicelist', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function donations() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Donation Settings";
            $data['admin_content'] = $ci->load->view('admin/donation/donations', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function jobs() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Job Settings";
            $data['admin_content'] = $ci->load->view('admin/jobs/job', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function users() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Users Settings";
            $data['admin_content'] = $ci->load->view('admin/people/users', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

    public function admins() {

        if ($this->verify_login()) {
            $ci = & get_instance();
            $data = array();
            $data['page_title'] = 'Welcome to Musallah Dashboard !!! Musallah.com';
            $data['content_title'] = "Admins Settings";
            $data['all_admins'] = $this->Admin_Model->getall_admins();
            $data['admin_content'] = $ci->load->view('admin/people/admins', $data, TRUE);
            $ci->load->view('admin', $data);
        }
    }

}
