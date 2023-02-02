<?php
class Branch_model extends CI_model
{


    function create($formArray)
    {

        $this->db->insert('branch', $formArray);
    }


    function all()
    {

        return $branch = $this->db->get('branch')->result_array();


    }



    function getbranch($branch_id)
    {
        $this->db->where('branch_id', $branch_id);
        return $branch = $this->db->get('branch')->row_array();

    }
    function updatebranch($branch_id, $formArray)
    {
        $this->db->where('branch_id', $branch_id);
        $this->db->update('branch', $formArray);

    }
    function deletebranch($branch_id)
    {
        $this->db->where('branch_id', $branch_id);
        $this->db->delete('branch');
    }
}

?>