<?php
class Home extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Model_donnee');
		$data['lesDemandes'] = $this->Model_donnee->getAllDemandes();
		$data['lesOffres'] = $this->Model_donnee->getAllOffre();
		$this->load->view('index', $data);
	}
	
}
?>