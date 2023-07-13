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
        $data['Monitor'] = $this->CustomerPurchase_Model->GetMonitor();
        $data['GPU'] = $this->CustomerPurchase_Model->GetGPU();
        $data['CPU'] = $this->CustomerPurchase_Model->GetCPU();

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('ComputerPurchaseOptions_View/CustomerPurchase_View', $data);
        } else if ($user['role'] == "customer") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ReduceStock()
    {
        $ItemID = $this->input->post('ItemIDInput');
        $CurrentInput = (int) $this->input->post('QuantityInput');
        $DatabaseStocks = (int) $this->CustomerPurchase_Model->GetDatabaseStock($ItemID);

        $NewStocks = $CurrentInput - $DatabaseStocks; 

        $data = array(
            'ItemStock' => $NewStocks,
        );

        $this->CustomerPurchase_Model->AddStock($ItemID, $data);

        redirect('/CustomerPurchase_Controller');
    }

    public function InsertTotalExpense()
    {
        $totalPrice = json_decode($this->input->raw_input_stream)->totalPrice;

        $data = array(
            'TotalBought' => $totalPrice,
        );

        $this->CustomerPurchase_Model->InsertExpense($data);

        redirect('/CustomerPurchase_Controller');
    }
}