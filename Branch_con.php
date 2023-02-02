<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_con extends CI_Controller
{
public function __construct()
{

  parent::__construct();
  $this->load->model('Branch_model');
}
   


  public function create_branch()
  {

    $this->form_validation->set_rules('branch_name', 'branch_name', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('Branch/create_branch');
    } 
    
    else {
      $formArray = array();


      $formArray['branch_name'] = $this->input->post('branch_name');
      
      $this->Branch_model->create($formArray);
      $this->session->set_flashdata('success','Record added successfully!');
      redirect(base_url() . 'Branch_con/list_branch');
    }


  }
  public function list_branch()
  {
    $this->load->model('Branch_model');
    $branch = $this->Branch_model->all();
    $data = array();
    $data['branch'] = $branch;
    $this->load->view('Branch/list_branch', $data);
  }


  public function edit_branch($branch_id)
  {
    $this->load->model('Branch_model');
    $branch = $this->Branch_model->getbranch($branch_id);
    $data = array();
    $data['branch'] = $branch;
    $this->form_validation->set_rules('branch_name', 'branch_name', 'required');

    if( $this->form_validation->run()==false){

      
        $this->load->view('Branch/edit_branch', $data);

    }else{
        $formArray = array();
        $formArray['branch_name']=$this->input->post('branch_name');

        $this->Branch_model->updatebranch($branch_id,$formArray);
        redirect(base_url() . 'Branch_con/list_branch');
    }





  }
  function delete_branch($branch_id)
    {
        $this->load->model('Branch_model');
        $bra = $this->Branch_model->getbranch($branch_id);
        if (empty($bra)) {
            //$this->session->set_flashdata('failure', 'record not found in database');
            redirect(base_url(). 'Branch_con/list_branch');
        }
        $this->Branch_model->deletebranch($branch_id);
        //$this->session->set_flashdata('success', 'record deleted succesfullyfrom database');
        redirect(base_url(). 'Branch_con/list_branch');
    }



  








  }
  

?>