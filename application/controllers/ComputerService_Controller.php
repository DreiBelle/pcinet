<?php
class ComputerService_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AddDevice_Model');
        $this->load->library('pagination');
    }
    public function index($page = 1)
    {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('ComputerService_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ViewDevices()
    {
        $user = $this->session->userdata('user');
        $searchDeviceID = $this->input->get('searchDeviceID');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            if (!empty($searchDeviceID)) {
                $data['data'] = $this->AddDevice_Model->GetIDData($searchDeviceID);
            } else {
                $data['data'] = $this->AddDevice_Model->GetData();
            }
            $this->load->view('ComputerServiceOptions_View/ViewDevice_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $data['data'] = $this->AddDevice_Model->GetData();
            $this->load->view('ComputerServiceOptions_View/ViewDevice_View', $data);
        }
    }

    public function AddDevice()
    {
        $DeviceID = $this->input->post('DeviceID');
        $CustomerName = $this->input->post('CustomerName');
        $DeviceModel = $this->input->post('DeviceModel');
        $DeviceType = $this->input->post('DeviceType');
        $OperatingSystem = $this->input->post('OperatingSystem');
        $Processor = $this->input->post('Processor');
        $RAM = $this->input->post('RAM');
        $Storage = $this->input->post('Storage');
        $Display = $this->input->post('Display');
        $DateGiven = $this->input->post('DateGiven');
        $Status = $this->input->post('Status');

        $data = array(
            'DeviceID' => $DeviceID,
            'CustomerName' => $CustomerName,
            'DeviceModel' => $DeviceModel,
            'DeviceType' => $DeviceType,
            'OperatingSystem' => $OperatingSystem,
            'Processor' => $Processor,
            'RAM' => $RAM,
            'Storage' => $Storage,
            'Display' => $Display,
            'DateGiven' => $DateGiven,
            'Status' => $Status,
        );

        $this->AddDevice_Model->InsertDevice($data);

        redirect('/ComputerService_Controller/ViewDevices');
    }

    public function UpdateDevice()
    {
        $DeviceID = $this->input->post('deviceIDInput');
        $CustomerName = $this->input->post('customerNameInput');
        $DeviceModel = $this->input->post('deviceModelInput');
        $DeviceType = $this->input->post('deviceTypeInput');
        $OperatingSystem = $this->input->post('operatingSystemInput');
        $Processor = $this->input->post('processorInput');
        $RAM = $this->input->post('RAMInput');
        $Storage = $this->input->post('storageInput');
        $Display = $this->input->post('displayInput');
        $DateGiven = $this->input->post('dateGivenInput');
        $Status = $this->input->post('statusInput');

        $data = array(
            'DeviceID' => $DeviceID,
            'CustomerName' => $CustomerName,
            'DeviceModel' => $DeviceModel,
            'DeviceType' => $DeviceType,
            'OperatingSystem' => $OperatingSystem,
            'Processor' => $Processor,
            'RAM' => $RAM,
            'Storage' => $Storage,
            'Display' => $Display,
            'DateGiven' => $DateGiven,
            'Status' => $Status,
        );

        if ($this->input->post('Delete')) {

            // $DeviceID = $this->input->post('deviceIDInput');

            $this->AddDevice_Model->DeleteDevice($DeviceID);

            redirect('/ComputerService_Controller/ViewDevices');
        } else {
            $this->AddDevice_Model->UpdateDevice($DeviceID, $data);

            redirect('/ComputerService_Controller/ViewDevices');
        }
    }
}