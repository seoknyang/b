<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_list_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getMember() {
        $sql = "SELECT * FROM MEMBER_LHJ";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    /*public function getMaxNum() {
        $sql = "SELECT * FROM LHJ_SVDOCLIST WHERE RO";
    }*/

    /*public function getDept($id) {
        $sql = "SELECT USER_DEPT FROM MEMBER_LHJ"
    }*/
}
?>