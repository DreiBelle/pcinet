<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Setting_Model');
    }

    public function index()
    {
        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            // Pass the user data to the view
            $data['user'] = $user;
            $data['records'] = $this->Setting_Model->getRecords();
            // Load the view
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('Settings_View', $data);
        } else {
            // User data not found in session, redirect to login
            redirect('LoginController');
        }
    }
}