<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('employee_model', 'em');
	}

	function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('index.php');
		$this->load->view('includes/footer.php');
	}

	public function showAllEmployee()
	{
		$result = $this->em->showAllEmployee();
		echo json_encode($result);
	}

	public function addEmployee(){
		$result = $this->em->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEmployee(){
		$result = $this->em->editEmployee();
		echo json_encode($result);
	}

	public function updateEmployee(){
		$result = $this->em->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->em->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
}
