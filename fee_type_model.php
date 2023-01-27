<?php
class fee_type_model extends CI_model
{


    function create($formArray)
    {

        $this->db->insert('fee_type', $formArray);
    }


    function all()
    {

        return $fee = $this->db->get('fee_type')->result_array();


    }



    function getfee($fee_id)
    {
        $this->db->where('fee_id', $fee_id);
        return $fee = $this->db->get('fee_type')->row_array();

    }
    function updatefee($fee_id, $formArray)
    {
        $this->db->where('fee_id', $fee_id);
        $this->db->update('fee_type', $formArray);

    }
    function deletefee($fee_id)
    {
        $this->db->where('fee_id', $fee_id);
        $this->db->delete('fee_type');
    }
}

?>