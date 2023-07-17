<?php
class Accounting_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Accounting_Model');
        $this->load->library('session');
    }


    public function index()
    {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('Accounting_View', $data);
        } else if ($user['role'] == "Accounting") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ExpensesView()
    {
        $user = $this->session->userdata('user');
        $data['Items'] = $this->Accounting_Model->GetAllExpenses();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/Accounting_View/Expense_View', $data);
        } else if ($user['role'] == "Accounting") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function SalesView()
    {
        $user = $this->session->userdata('user');
        $data['Sales'] = $this->Accounting_Model->GetAllSales();
        $data['Total'] = $this->Accounting_Model->CalculateTotal();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/Accounting_View/Sales_View', $data);
        } else if ($user['role'] == "Accounting") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function PayrollView()
    {
        $user = $this->session->userdata('user');
        $data['Employees'] = $this->Accounting_Model->GetAllPayrollEmp();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/Accounting_View/Payroll_View', $data);
        } else if ($user['role'] == "Accounting") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function AddSalary()
    {
        $ID = $this->input->post('Employee_ID');
        $Salary = $this->input->post('Salary');
        $Paydate = $this->input->post('PayDate');

        $data = array(
            'Salary' => $Salary,
            'Pay_date' => $Paydate,
        );

        $this->Accounting_Model->AddSalary($ID, $data);

        redirect('/Accounting_Controller/PayrollView');
    }
}