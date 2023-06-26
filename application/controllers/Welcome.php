<?php
class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('customer_model');
		$data('customer') = $this->customer_model->get_customer();
		$this->load->view('show_customer', $data);
	}
}
