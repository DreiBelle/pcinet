<?php
class CustomerPurchase_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('CustomerPurchase_Model');
        $this->load->library('pagination');
    }
    public function index()
    {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('CustomerPurchase_View', $data);
        } else if ($user['role'] == "customer") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ViewCustomerPurchase()
    {
        $user = $this->session->userdata('user');


        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $data['items'] = $this->CustomerPurchase_Model->GetData();
            $this->load->view('CustomerPurchase_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $data['data'] = $this->CustomerPurchase_Model->GetData();
            $this->load->view('CustomerPurchase_View', $data);
        }

    }
}