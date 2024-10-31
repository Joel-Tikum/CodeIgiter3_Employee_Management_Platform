<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fcontroller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('learning/Fmodel', 'misk');
		$this->load->database(); //Check database status
		$this->load->helper('url_helper');
		$this->load->helper('date');
		$this->load->library('session');

		
		define('apiUser_UUID', '23ac42c4-0dbb-4d81-b843-a84331845a29');
		define('primaryKey', '0153f2edbf2947e8b734be3daa17b22f');
	}

	public function sanitizer($data)
	{
		$data = $this->security->xss_clean($data);
		//$data = $this->security->html_escape($data);
		return $data;
	}

	public function index()
	{
		$this->load->view('learning/header');
		$this->load->view('learning/home');
		$this->load->view('learning/footer');
	}


	public function signup()
	{
		$email = $this->sanitizer($this->input->post('email'));
		$result = $this->misk->getadmin($email);

		if ($result == NULL) {
			if ($this->input->post('password') === $this->input->post('cpassword')) {

				if (!empty($_FILES['photo']['name'])) {
					$config['upload_path'] = 'uploads/images';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['photo']['name'];

					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('photo')) {
						$uploadData = $this->upload->data();

						$data = [
							'fname' => $this->sanitizer($this->input->post('fname')),
							'lname' => $this->sanitizer($this->input->post('lname')),
							'email' => $email,
							'password' => $this->sanitizer($this->input->post('password')),
							'contact' => $this->sanitizer($this->input->post('contact')),
							'gender' => $this->sanitizer($this->input->post('gender')),
							'photo' => $this->sanitizer($uploadData['file_name'])
						];
						$result = $this->misk->adminSignUp($data);
						if (!empty($result)) {
							redirect(base_url('iqmasta/loginform'), 'refresh');
						}
					}
				}
			} else {
				redirect(base_url('iqmasta/loginform'), 'refresh');
			}
		} else {
			redirect(base_url('iqmasta/loginform'), 'refresh');
		}
	}


	public function loginform()
	{
		$this->load->view('learning/header');
		$this->load->view('learning/login');
		$this->load->view('learning/footer');
	}

	public function login()
	{
		$data['email'] = $this->sanitizer($this->input->post('email'));
		$data['password'] = $this->sanitizer($this->input->post('password'));
		$position = $this->sanitizer($this->input->post('position'));

		$users = ($position === 'manager') ? $this->misk->getAdmin($data['email']) : $this->misk->getWorker($data['email']);

		if (!empty($users)) {
			if ($position === 'manager') {
				if ($data['password'] === $users->password) {
					//$this->session->set_userdata('email', $data['email']);
					$this->session->set_userdata(['fname'=> $users->fname, 'lname'=> $users->lname]);
					redirect(base_url('iqmasta/admin/dashboard'), 'refresh');
				} else {
					redirect(base_url('iqmasta/loginform'), 'refresh');
				}
			} else {
				if ($data['password'] === $users->password) {
					$this->session->set_userdata('email', $data['email']);
					$this->session->set_userdata('name', $users->name);
					redirect(base_url('iqmasta/worker/dashboard'), 'refresh');
				} else {
					redirect(base_url('iqmasta/loginform'), 'refresh');
				}
			}
		} else {
			redirect(base_url('iqmasta/loginform'), 'refresh');
		}
	}


	public function adminDashboard(){
		$data['date'] = date(DATE_RFC1123, time());
		$this->load->view('learning/header');
		$this->load->view('learning/admin_dashboard', $data);
		$this->load->view('learning/footer');
	}

	public function workers()
	{
		$data['workers'] = $this->misk->allWorkers();
		$data['date'] = date(DATE_RFC1123, time());
		$this->load->view('learning/header');
		$this->load->view('learning/workers',$data);
		$this->load->view('learning/footer');
	}

	public function createWorker()
	{
		$email = $this->sanitizer($this->input->post('email'));
		$result = $this->misk->getWorker($email);
		
		if($result == NULL){
			if (!empty($_FILES['picture']['name'])) {
				$config['upload_path'] = 'uploads/images';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['photo']['name'];

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('picture')) {
					$uploadData = $this->upload->data();

					$data = [
						'fname' => $this->sanitizer($this->input->post('fname')),
						'lname' => $this->sanitizer($this->input->post('lname')),
						'email' => $email,
						'password' => $this->sanitizer($this->input->post('password')),
						'contact' => $this->sanitizer($this->input->post('contact')),
						'worker_type' => $this->sanitizer($this->input->post('worker_type')),
						'gender' => $this->sanitizer($this->input->post('gender')),
						'photo' => $this->sanitizer($uploadData['file_name'])
					];
				
					$result = $this->misk->createWorker($data);
					if (isset($result)) {
						$this->session->set_flashdata('status', `<div class='alert alert-success' role='alert'>Operation by Successful !</div>`);
						redirect(base_url('iqmasta/admin/dashboard'), 'refresh');
					} else {
						$this->session->set_flashdata('status', "<div class='alert alert-danger' role='alert'> Failed to create Employee. Review your data and try again</div>");
						redirect(base_url('iqmasta/admin/dashboard'), 'refresh');
					}
				}	
			}		
		}
	}



	public function tasks()
	{
		$this->load->view('learning/header');
		$this->load->view('learning/tasks');
		$this->load->view('learning/footer');
	}


	public function workerDashboard(){
		$this->load->view('learning/header');
		$this->load->view('learning/worker_dashboard');
		$this->load->view('learning/footer');
	}

	








	public function employees()
	{
		$data['employees'] = $this->misk->allWorkers();
		//$data['admin'] = $this->misk->getOneAdmin(1);
		$this->load->view('learning/header');
		$this->load->view('learning/employee', $data);
		$this->load->view('learning/footer');
	}

	public function getEmployee($id)
	{
		$data['employee'] = $this->misk->oneEmployee($id);
		$this->load->view('learning/header');
		$this->load->view('learning/empEdit', $data);
		$this->load->view('learning/footer');
	}

	public function employeeUpdate($id)
	{
		$data = [
			'name' => $this->sanitizer($this->input->post('name')),
			'email' => $this->sanitizer($this->input->post('email')),
			'contact' => $this->sanitizer($this->input->post('contact'))
		];
		$result = $this->misk->empUpdate($id, $data);
		if (isset($result)) {
			$this->session->set_flashdata('status', "<div class='alert alert-success' role='alert'>Operation successful !</div>");
			redirect('employees');
		} else {
			$this->session->set_flashdata('status', "<div class='alert alert-danger' role='alert'>Failed to update the employee</div>");
			redirect('employees');
		}
	}

	public function employeeAdd()
	{
		$this->load->view('learning/header');
		$this->load->view('learning/empCreate');
		$this->load->view('learning/footer');
	}

	public function seeEmployee($id)
	{
		$data['employee'] = $this->misk->oneEmployee($id);
		$this->load->view('empEdit', $data);
	}

	public function deleteEmployee($id)
	{
		$result = $this->misk->empDelete($id);
		if (!empty($result)) {
			$this->session->set_flashdata('status', "<div class='alert alert-success' role='alert'>Operation Successful !</div>");
			redirect('employees');
		} else {
			$this->session->set_flashdata('status', "<div class='alert alert-success' role='alert'>Failed to delete the employee</div>");
			redirect('employess');
		}
	}

	public function employeePayment($id)
	{
		$data['employee'] = $this->misk->oneEmployee($id);

		$this->load->view('learning/header');
		$this->load->view('learning/payment', $data);
		$this->load->view('learning/footer');
	}
















	public function getUUID()
	{
		return sprintf(
			'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0x0fff) | 0x4000,
			mt_rand(0, 0x3fff) | 0x8000,
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff)
		);
	}

	public function createApiUser()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/v1_0/apiuser',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => '{
    											providerCallbackHost: "http://localhost:8000"
											}',
			CURLOPT_HTTPHEADER => array(
				'X-Reference-Id: ' . apiUser_UUID,
				'Ocp-Apim-Subscription-Key: ' . primaryKey,
				'Content-Type: application/json'
			),
		));
		$response = curl_exec($curl);
		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($http_code == 201) {
			return 'API User created successfully with the response code: ' . $http_code;
		} else {
			return 'API User creation failed with the response code:::: ' . $http_code;
		}

		curl_close($curl);
	}


	public function createApiKey()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/v1_0/apiuser/' . apiUser_UUID . '/apikey',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'X-Reference-Id: ' . apiUser_UUID,
				'Ocp-Apim-Subscription-Key: ' . primaryKey
			),
		));

		$response = curl_exec($curl);
		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($http_code == 201) {
			return 'API Key Created Successfully with the response code: ' . $http_code . ' and the response is: ' . $response;
		} else {
			return 'API Key Creation Failed with the response code: ' . $http_code . ' and the response is: ' . $response;
		}

		curl_close($curl);
	}



	public function getAccessToken()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/collection/token/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_HTTPHEADER => array(
				'Ocp-Apim-Subscription-Key: ' . primaryKey,
				'Authorization: ••••••'
			),
		));

		$response = curl_exec($curl);
		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($http_code == 200) {
			return 'API Access Token Created Successfully with the response code: ' . $http_code;
		} else {
			return 'API Access Token Creation Failed with the response code: ' . $http_code;
		}

		curl_close($curl);
	}



	public function requestToPay()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => '{
    											"amount": "5000",
    											"currency": "EUR",
    											"externalId": "2222",
    											"payer": {
        											"partyIdType": "MSISDN",
        											"partyId": "675869577"
    											},
    											"payerMessage": "Cook Soup",
    											"payeeNote": "Cook Soup"
											}',
			CURLOPT_HTTPHEADER => array(
				'X-Reference-Id: 7a8e94dc-ce1f-4247-922d-cc7c69e2eced',
				'Ocp-Apim-Subscription-Key: ' . primaryKey,
				'X-Target-Environment: sandbox',
				'Content-Type: application/json',
				'Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJSMjU2In0.eyJjbGllbnRJZCI6IjdlZjI5MWMyLTg2NWUtNDU3Ny05MTE1LWYzYTFlNTdjY2I3YSIsImV4cGlyZXMiOiIyMDI0LTA5LTI2VDExOjU3OjI3LjE4NSIsInNlc3Npb25JZCI6IjBkOGIxZTllLTAyZWQtNDk3YS04NWU3LTVkZmEzZDRmMWFiNCJ9.PBcyxp_Z4ZdO7qWTWEJSCKGZWWlHexgatOMgDmgG_qY_MVFEBF5ig0iTm26pKuKNyX9tKWkETszgIfV579K1DAocb-MhVf9NokSmXsU2QDlfGGpNrdSi9euK9TYgniLSHjYjUo_RAA90SaIpNQ2vQTPbdbBvYG5TGKcHMOfOspvXV6WFTwMuVl-cY6Z0i-TTWnT9Uz6ZOeDOQZ0N4NxyMOe-SiOynd4suIqrLImTiuGjylAgwTKmzGQzUcbEAmcgtb0anOAg-ZXFUI_YlW1X7vIbrAXL11U58yT5CdjuzyA4TOjUN94h5L8MBOPO2Svy8-v2hVv8Bhme28Wl2CZDZQ'
			),
		));

		$response = curl_exec($curl);

		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($http_code == 202) {
			return 'API Request to Pay was successful with the response code: ' . $http_code;
		} else {
			return 'API Request to Pay failed with the response code: ' . $http_code;
		}

		curl_close($curl);
	}
}
