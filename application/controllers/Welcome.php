<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

		$this->load->model('model_member');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function creates()
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
        array(
            'field' => 'fname',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'age',
            'label' => 'Age',
            'rules' => 'trim|required|integer',
        ),
				array(
            'field' => 'contact',
            'label' => 'Contact',
            'rules' => 'trim|required|integer',
        ),
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if($this->form_validation->run() === true){

					$createMember = $this->model_member->create();

					if($createMember === true)
					{
						$validator['success'] = true;
						$validator['messages'] = "Successfully addead";
					}
					else {
						$validator['success'] = false;
						$validator['messages'] = "Error while updating the information";
					}
			}
			else{
				$validator['success'] = false;
				 foreach ($_POST as $key => $value) {
				 	$validator['messages'][$key] = form_error($key);
				 }
			}

			echo json_encode($validator);

	}

	public function fetchMemberData()
	{
		$result = array('data' => array());

		$data = $this->model_member->fetchMemberData();

		foreach ($data as $key => $value) {
				$name = $value['fname'] . ' ' . $value['lname'];

				//button

				$button = '<div class="dropdown">
									  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton'.$value['id'].'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton'.$value['id'].'">
									    <a class="dropdown-item" type="button" onclick="editMember('.$value['id'].')" >Action</a>
									    <a class="dropdown-item" tyoe="button" onclick="removeMember('.$value['id'].')" >Another action</a>
									  </div>
									</div>';

				$result['data'][$key] = array(
					$name,
					$value['age'],
					$value['contact'],
					$value['address'],
					$button
				);



		}
		echo json_encode($result);
	}
}
