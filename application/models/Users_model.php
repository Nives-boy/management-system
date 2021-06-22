<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function createUser()
    {
        $password = $this->input->post('password');
        $hashed_password = hash('sha512', $password);
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'contact_no' => $this->input->post('contact_no'),
            'gender' => $this->input->post('gender'),
            'password' => $hashed_password
        );
        $this->db->insert('tbl_users', $data);
    }
    public function isDuplicate($email)
    {     
        $this->db->get_where('tbl_users', array('email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }

    function getAllUsers()
    {
        $query = $this->db->query('SELECT * FROM tbl_users');
        return $query->result();
    }

    function getData($id)
    {
        $query = $this->db->query('SELECT * FROM tbl_users WHERE `id` =' . $id);
        return $query->row();
    }

    function updateData($id)
    {
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'contact_no' => $this->input->post('contact_no')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_users', $data);
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }
}
