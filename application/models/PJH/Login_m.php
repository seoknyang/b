<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Login_check($id)
    {
        $sql = "SELECT * FROM MEMBER_PJH1 WHERE USER_ID= '" . $id . "'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }


    public function register($arr)
    {
        $sql = "
            INSERT INTO MEMBER_PJH1
            VALUES (
            '" . $arr['id'] . "',
            '" . $arr['pw'] . "',
            '" . $arr['name'] . "',
            '" . $arr['gender'] . "',
            '" . $arr['phone'] . "',
            '" . $arr['birth'] . "'
            )";

        $this->db->query($sql);
    }
}

?>