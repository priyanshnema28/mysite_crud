<?php
  class Employee_model extends CI_Model
  {

    function create($formArray)
    {
      $this->db->insert('Employee_table', $formArray); //insert in Employee_table(user_id, name);
    }

    function All(){
      return $Employee_table = $this->db->get('Employee_table')->result_array(); #Select * from users
    }
    
  }

?>