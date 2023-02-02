<?php
class Department_model extends CI_model
{


    function create($formArray)
    {

        $this->db->insert('department', $formArray);
    }


    function all()
    {

        return $department = $this->db->select('d.*,b.branch_name')
            ->From('department as d')
            ->join('branch as b', 'b.branch_id = d.branch_id', 'LEFT')
            ->get()->result_array();


    }



    function getUser($department_id)
    {
        $this->db->where('department_id', $department_id);

        return $department = $this->db->get('department')->row_array();

    }
    function updateUser($department_id, $formArray)
    {
        $this->db->where('department_id', $department_id);
        $this->db->update('department', $formArray);

    }
    function deleteUser($department_id)
    {
        $this->db->where('department_id', $department_id);
        $this->db->delete('department');
    }


    public function get_branch_id()
    {
        $qury = $this->db->get('branch'); //branch_id into department through id
        return $qury->result_array();
    }

}

?>