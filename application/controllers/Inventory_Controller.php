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
            $data['data'] = $this->AddDevice_Model->GetData();
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

        $data = array(
            'ItemName' => $ItemName,
            'ItemPrice' => $ItemPrice,
            'Image' => $imageFileName,
        );

        $this->Inventory_Model->InsertItem($data);

        redirect('/Inventory_Controller/ViewPurchase');
    }
}