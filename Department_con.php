<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_con extends CI_Controller
{
public function __construct()
{

  parent::__construct();
  $this->load->model('Department_model');
}
   


  public function create_department()
  {
    $page_data['get_branch_id']= $this->Department_model->get_branch_id();
    $this->form_validation->set_rules('branch_id', 'branch_id', 'required');
    $this->form_validation->set_rules('department_name', 'department_name', 'required');

    if ($this->form_validation->run() == false) {
        $page_data['get_branch_id']= $this->Department_model->get_branch_id();   
      $this->load->view('Department/create_department',$page_data);

    } 
    else {
      $formArray = array();
      $formArray['branch_id'] = $this->input->post('branch_id');
      $formArray['department_name'] = $this->input->post('department_name');
      $this->Department_model->create($formArray);
      $this->session->set_flashdata('success','Record added successfully!');
      redirect(base_url() . 'Department_con/list_department');
    }
  }
  public function list_department()
  {
   
    $department = $this->Department_model->all();
    $data = array();
    $data['department'] = $department;
    $this->load->view('Department/list_department', $data);
  }


  public function edit_department($department_id)
  {
    
    $dep = $this->Department_model->getUser($department_id);
    $data = array();
    $data['dep'] = $dep;
   $data['get_branch_id']= $this->Department_model->get_branch_id();
    //print_r($page_data['get_branch_id']);die;
    
    $this->form_validation->set_rules('department_name', 'department_name', 'required');
    $this->form_validation->set_rules('branch_id', 'branch_id', 'required');

    if( $this->form_validation->run()==false){
      $page_data['get_branch_id']= $this->Department_model->get_branch_id();

      
        $this->load->view('Department/edit_department', $data);

    }else{
        $formArray = array();
        $formArray['department_name']=$this->input->post('department_name');
        $formArray['branch_id']=$this->input->post('branch_id');

        $this->Department_model->updateUser($department_id,$formArray);
        redirect(base_url() . 'department_con/list_department');
    }





  }
  function delete_department($department_id)
    {
    
        $dep = $this->Department_model->getUser($department_id);
        if (empty($dep)) {
            //$this->session->set_flashdata('failure', 'record not found in database');
            redirect(base_url(). 'Department_con/list_department');
        }
        $this->Department_model->deleteUser($department_id);
        //$this->session->set_flashdata('success', 'record deleted succesfullyfrom database');
        redirect(base_url(). 'Department_con/list_department');
    }



  








  }
  

?>