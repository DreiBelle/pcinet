<?php
class DataAnalytics_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataAnalytics_Model');
        $this->load->library('session');

    }

    public function index()
    {   
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/DataAnalytics_View/AccountingReport_View', $data);
        } else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavBarData_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function AccountingReport()
    {
        $user = $this->session->userdata('user');
        $data['result'] = $this->DataAnalytics_Model->GetSalesData();
        $data['Expenses'] = $this->DataAnalytics_Model->GetExpensesData();
        $data['Payroll'] = $this->DataAnalytics_Model->GetPayrollData();
        $data['Overall'] = $this->DataAnalytics_Model->GetOverall();
        

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/DataAnalytics_View/AccountingReport_View', $data);
        } else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavBarData_View";
            $this->load->view('/DataAnalytics_View/AccountingReport_View', $data);
        }
    }
}