<?php
class Login_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['error'] = 'Invalid username or password';
        echo '<script></script>';
        $this->load->view('Login_View');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_Model->getuser($username, $password);

        if ($user) {
            $userData = array(
                'user_id' => $user->user_id,
                'email' => $user->email,
                'name' => $user->name,
                'username' => $user->username,
                'password' => $user->password,
                'role' => $user->role,
            );
            $this->session->set_userdata('user', $userData);

            // if ($user->role === 'admin') {
            //     redirect('Dashboard_Controller');
            // }
            // elseif($user->role === 'technician') {
            //     redirect('Dashboard_Controller');
            // }
            // elseif($user->role === 'data') {
            //     redirect('DataAnalytics_Controller');
            // }
            // elseif($user->role === 'accountant') {
            //     redirect('Accounting_Controller');
            // }
            // elseif($user->role === 'employee') {
            //     redirect('Inventory_Controller');
            // }
            redirect('Dashboard_Controller');
        
        } else {
            $data['error'] = 'Invalid username or password';
            echo '<script>alert("' . $data['error'], '");</script>';
            $this->load->view('Login_View', $data);
        }
    }
}
?>