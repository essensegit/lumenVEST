<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Welcome extends CI_Controller {

	public function test_connection()
{
    $this->load->database();
    $query = $this->db->query("SELECT NOW() as connected_time");
    echo "<pre>";
    print_r($query->result());
    echo "</pre>";
}

	public function index()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/index');
		$this->load->view('Pages/footer');	
	}



	
	public function signup()
	{
		// Add this near the top of your signup() method:
		$this->load->database();
$query = $this->db->query("SELECT * FROM users");
echo "<pre>";
print_r($query->result());
echo "</pre>";

    $this->load->library('form_validation');
    $this->load->model('User_model');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo "Form submitted<br>";
        // Validation
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run()) {
			echo "Validation passed<br>";

			echo "<pre>";
			print_r($this->input->post());
			echo "</pre>";

		} else {
			echo "Validation failed:<br>";
			echo validation_errors(); // Show exactly what failed
		}
        // if ($this->form_validation->run()) {
		// 	echo "Validation passed<br>";
        //     $userData = [
        //         'email' => $this->input->post('email'),
        //         'firstname' => $this->input->post('firstname'),
        //         'lastname' => $this->input->post('lastname'),
        //         'phonenumber' => $this->input->post('phonenumber'),
        //         'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        //     ];

        //     if ($this->User_model->insert_user_with_wallet($userData)) {
		// 		echo "User inserted!<br>";
        //         $this->session->set_flashdata('success', 'Signup successful! You can now login.');
        //         redirect('signup');
        //     } else {
		// 		 echo "Insert failed<br>";
        //         $this->session->set_flashdata('error', 'Something went wrong. Try again.');
        //     } 
		// } else {
        //     echo "Validation failed<br>";
        // }
        
    }
		$this->load->view('Pages/header');
		$this->load->view('Pages/signup');
	}
}
