<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sulmun_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }



    public function who_chk($id)
    {

        $sql = "SELECT * FROM ADMIN_PJH WHERE USER_ID= '" . $id . "'";

        $query = $this->db->query($sql);

        return $query->result_array();
    }
    public function getmember()
    {
        $sql = "SELECT * FROM MEMBER_PJH1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function getMaxNum()
    {
        //$sql="SELECT * FROM SVDOCLIST_PJH ORDER BY DOC_NUM DESC";

    }

}

?>