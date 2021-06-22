<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

	public function index()
	{
        $data['result'] = $this->Users_model->getAllUsers();
        $this->load->view('userView', $data);
	}

    public function create(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact_no', 'Contact Number', 'required');		 
        $this->form_validation->set_rules('gender', 'Gender', 'required');		 
        $this->form_validation->set_rules('password', 'Password', 'required');		 
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('diff_pass');
        }elseif($this->Users_model->isDuplicate($this->input->post('email'))){
            $this->load->view('same_em');
        }else{
            $this->Users_model->createUser();
            redirect('UserController');
        }
    }

    public function edit($id){
        $data['row']= $this->Users_model->getData($id);
        $this->load->view('userEdit', $data);
    }

    public function update($id){
        $this->Users_model->updateData($id);
        redirect('UserController');
    }

    public function delete($id){
        $this->Users_model->deleteData($id);
        redirect('UserController');
    }
}
