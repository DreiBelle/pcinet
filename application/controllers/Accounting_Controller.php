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
        if ($user) {
            $data['user'] = $user;
            $this->load->view('Accounting_View', $data);
        }
        else {
            redirect('Login_Controller');
        }
    }
}
