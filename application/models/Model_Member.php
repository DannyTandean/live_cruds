<?php

class Model_Member extends CI_Model{

  public function create()
  {
    $data = array(
      'fname' => $this->input->post('fname'),
      'lname' => $this->input->post('lname'),
      'age' => $this->input->post('age'),
      'contact' => $this->input->post('contact'),
      'address' => $this->input->post('address')
    );

    $sql = $this->db->insert('user', $data);

    if($sql === true)
    {
      return true;
    }
    else {
      return false;
    }
  }
  public function fetchMemberData()
  {
    $sql = "select * from user";
    $query = $this->db->query($sql);

    return  $query->result_array();
  }
}
