<?php
class Inventory_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Inventory_Model');

    }

    public function index()
    {

        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('Inventory_View', $data);
        } else if ($user['role'] == "employee") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavBarEmployee_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ViewPurchase()
    {
        $user = $this->session->userdata('user');


        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $data['items'] = $this->Inventory_Model->GetAllItems();
            $this->load->view('Inventory_View/Purchase_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $data['items'] = $this->Inventory_Model->GetAllItems();
            $this->load->view('Inventory_View/Purchase_View', $data);
        } else if ($user['role'] == "employee") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarEmployee_View";
            $data['items'] = $this->Inventory_Model->GetAllItems();
            $this->load->view('Inventory_View/Purchase_View', $data);
        }

    }
    public function AddItem()
    {
        if (!empty($_FILES['Image']['name'])) {
            $imageFileName = $_FILES['Image']['name'];

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['upload_max_size'] = 20000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('Image')) {
                $imageFilePath = $config['upload_path'] . $imageFileName;
            } else {
                $uploadError = $this->upload->display_errors();
                echo $uploadError;
                return;
            }
        } else {
            $uploadError = "No image uploaded";
            echo $uploadError;
            return;
        }

        $ItemName = $this->input->post('ItemName');
        $ItemPrice = $this->input->post('ItemPrice');
        $ItemCategory = $this->input->post('ItemCategory');

        $data = array(
            'ItemName' => $ItemName,
            'ItemPrice' => $ItemPrice,
            'Image' => $imageFileName,
            'ItemCategory' => $ItemCategory,
            'ItemStock' => 0,
        );

        $this->Inventory_Model->InsertItem($data);

        redirect('/Inventory_Controller/ViewPurchase');
    }

    public function AddStocks()
    {
        $ItemID = $this->input->post('ItemIDInput');
        $Stocks = (int) $this->input->post('StocksInput');
        $Price = (int) $this->input->post('ItemPriceInput');

        $currentStocks = (int) $this->Inventory_Model->getStocks($ItemID);
        $GetCurrentTotalExpenses = (int) $this->Inventory_Model->getExpenses($ItemID);

        $newStocks = $currentStocks + $Stocks;
        $expenses = $Price * $Stocks;
        $GetTotalExpenses = $expenses + $GetCurrentTotalExpenses;

        $data = array(
            'ItemStock' => $newStocks,
            'CurrentBought' => $Stocks,
            'CurrentPrice' => $expenses,
            'TotalProductExpenses' => $GetTotalExpenses,
        );

        $this->Inventory_Model->AddStock($ItemID, $data);

        redirect('/Inventory_Controller/ViewPurchase');
    }

    public function Search()
    {
        $user = $this->session->userdata('user');

        $InputSearch = $this->input->post('SearchInput');

        $data['items'] = $this->Inventory_Model->Search($InputSearch);


        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $data['items'] = $this->Inventory_Model->Search($InputSearch);
            $this->load->view('Inventory_View/Purchase_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $data['items'] = $this->Inventory_Model->Search($InputSearch);
            $this->load->view('Inventory_View/Purchase_View', $data);
        } else if ($user['role'] == "employee") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarEmployee_View";
            $data['items'] = $this->Inventory_Model->Search($InputSearch);
            $this->load->view('Inventory_View/Purchase_View', $data);
        }
    }
}