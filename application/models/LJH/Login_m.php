<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Login_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function id_check($id){
        $sql = "SELECT * FROM MEMBER_LJH WHERE USER_ID='".$id."'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function adm_chk($id){
        $sql = "SELECT * FROM ADMIN_LJH WHERE USER_ID = '".$id."'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function register($arr){
        $sql = "
            INSERT INTO MEMBER_LJH
            VALUES (
            '".$arr['id']."',
            '".$arr['pw']."',
            '".$arr['name']."',
            '".$arr['gender']."',
            '".$arr['phone']."',
            '".$arr['birth']."'
            )";
        $this->db->query($sql);
    }
}
?>