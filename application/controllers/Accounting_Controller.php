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
        } else if ($user['role'] == "accountant") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('/Accounting_View/Expense_View', $data);
        } else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarData_View";
            $this->load->view('/Accounting_View/Expense_View', $data);
        }
    }

    public function SalesView()
    {
        $user = $this->session->userdata('user');
        $data['Sales'] = $this->Accounting_Model->GetAllSales();
        $data['Total'] = $this->Accounting_Model->CalculateTotal();
        $data['Item'] = $this->Accounting_Model->GetItems();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/Accounting_View/Sales_View', $data);
        } else if ($user['role'] == "accountant") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('/Accounting_View/Sales_View', $data);
        } else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarData_View";
            $this->load->view('/Accounting_View/Sales_View', $data);
        }
    }

    public function getbyid()
    {
        $ID = $this->input->post("ItemID");
        $Items = $this->Accounting_Model->GetItembyID($ID);

        echo "<table>
        <thead>
            <tr>
                <th>ItemID</th>
                <th>ItemName</th>
                <th>ItemQuantity</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>";
        foreach ($Items as $row) {
            echo "
                <tr>
                    <td>
                        " . $row->ItemID . "
                    </td>
                    <td>
                        " . $row->ItemName . "
                    </td>
                    <td>
                        " . $row->ItemQuantity . "
                    </td>
                    <td>
                        " . $row->Date . "
                    </td>
                </tr>
                ";
        }
        ;
        echo "
        </tbody>
    </table>";

    }

    public function PayrollView()
    {
        $user = $this->session->userdata('user');
        $data['Employees'] = $this->Accounting_Model->GetAllPayrollEmp();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('/Accounting_View/Payroll_View', $data);
        } else if ($user['role'] == "accountant") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('/Accounting_View/Payroll_View', $data);
        } else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarData_View";
            $this->load->view('/Accounting_View/Payroll_View', $data);
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