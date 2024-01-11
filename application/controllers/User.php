<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class User extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Employee_model', 'emodel');
      
    }

    function index(){
      //$this->load->model('Employee_model');
      $Employee_table = $this->emodel->All();
      $data = array();
      $data['Employee_table'] = $Employee_table;
      $this->load->view('list', $data);
    }

    function create()
    
    {

      $this->form_validation->set_rules("Name","Name","required");
      $this->form_validation->set_rules("Email","Email","required|valid_email");

      if($this->form_validation->run() == false)
      {
        $this->load->view('create');
      } 
      else
      {
        //Save record to database
        $formArray = array();
        $formArray['Name'] = $this->input->post('name');
        $formArray['Email'] = $this->input->post('Email');
        $formArray['Designation'] = $this->input->post('Designation');
        $this->emodel->create($formArray);
        $this->session->set_flashdata('success','Record added successfully!');
        redirect(base_url().'index.php/user/index');


      }
    }

}  
?>