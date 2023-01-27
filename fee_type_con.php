<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fee_type_con extends CI_Controller
{
public function __construct()
{

  parent::__construct();
  $this->load->model('fee_type_model');
}
   


  public function create_fee()
  {
   // $this->form_validation->set_rules('fee_id', 'fee_id', 'required');

    $this->form_validation->set_rules('fee_name', 'fee_name', 'required');
    $this->form_validation->set_rules('fee_desc', 'fee_desc', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('fees/create_fee');
    } 
    
    else {
      $formArray = array();

    //  $formArray['fee_id'] = $this->input->post('fee_id');
      $formArray['fee_name'] = $this->input->post('fee_name');

      $formArray['fee_desc'] = $this->input->post('fee_desc');
      
      $this->fee_type_model->create($formArray);
      $this->session->set_flashdata('success','Record added successfully!');
      redirect(base_url() . 'fee_type_con/list_fee');
    }


  }
  public function list_fee()
  {
    $this->load->model('fee_type_model');
    $fee = $this->fee_type_model->all();
    $data = array();
    $data['fee'] = $fee;
    $this->load->view('fees/list_fee', $data);
  }


  public function edit_fee($fee_id)
  {
    $this->load->model('fee_type_model');
    $fe = $this->fee_type_model->getfee($fee_id);
    $data = array();
    $data['fe'] = $fe;
   // $this->form_validation->set_rules('fee_id', 'fee_id', 'required');
    $this->form_validation->set_rules('fee_name', 'fee_name', 'required');
    $this->form_validation->set_rules('fee_desc', 'fee_desc', 'required');

    if( $this->form_validation->run()==false){

      
        $this->load->view('fees/edit_fee', $data);

    }else{
        $formArray = array();
       // $formArray['fee_id']=$this->input->post('fee_id');
        $formArray['fee_name']=$this->input->post('fee_name');
        $formArray['fee_desc']=$this->input->post('fee_desc');

        $this->fee_type_model->updatefee($fee_id,$formArray);
        redirect(base_url() . 'fee_type_con/list_fee');
    }





  }
  function delete_fee($fee_id)
    {
        $this->load->model('fee_type_model');
        $fe = $this->fee_type_model->getfee($fee_id);
        if (empty($fe)) {
            //$this->session->set_flashdata('failure', 'record not found in database');
            redirect(base_url(). 'fee_type_con/list_fee');
        }
        $this->fee_type_model->deletefee($fee_id);
        //$this->session->set_flashdata('success', 'record deleted succesfullyfrom database');
        redirect(base_url(). 'fee_type_con/list_fee');
    }



  








  }
  

?>