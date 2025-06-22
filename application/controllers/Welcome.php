<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/index');
		$this->load->view('Pages/footer');	
	}
	public function signup()
	{
		public function signup()
{
    $this->load->library('form_validation');
    $this->load->model('User_model');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validation
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run()) {
            $userData = [
                'email' => $this->input->post('email'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'phonenumber' => $this->input->post('phonenumber'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            if ($this->User_model->insert_user_with_wallet($userData)) {
                $this->session->set_flashdata('success', 'Signup successful! You can now login.');
                redirect('signup');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong. Try again.');
            }
        }
    }
		$this->load->view('Pages/header');
		$this->load->view('Pages/signup');
	}
}
