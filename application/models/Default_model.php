<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Default_model extends CI_Model
{
    public function checklogin($ed_nama,$ed_password)
    {
        $result = $this->db->query("SELECT * FROM employee_data WHERE ed_nama LIKE '$ed_nama' AND ed_password LIKE '$ed_password';");
        return $result->num_rows();   
    }
    public function login($ed_nama,$ed_password)
    {
        $result = $this->db->query("SELECT * FROM employee_data WHERE ed_nama LIKE '$ed_nama' AND ed_password LIKE '$ed_password';");
        return $result->row();
    }
}
