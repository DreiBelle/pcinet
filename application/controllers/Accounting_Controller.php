<?php
class Accounting_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Accounting_Model');
        $this->load->library('session');
    }


    public function index() {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarAdmin_View";
            $this->load->view('Accounting_View', $data);
        } else if ($user['role'] == "Accounting") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
    }
}
