<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Survey_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMaxNum(){
        $sql = "SELECT DOC_NUM FROM SVCDOCLIST_LJH WHERE ROWNUM = 1 ORDER BY DOC_NUM DESC";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function getDept($id){
        $sql = "SELECT USER_DEPT FROM MEMBER_LJH WHERE USER_ID = '".$id."'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }
    public function savDoc($sv_doc_num, $user_id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate){

        $sql = "INSERT INTO SVDOCLIST_LJH(
            DOC_NUM,
            DOC_EMPNO,
            DOC_DEPT,
            DOC_TITLE,
            DOC_COMMENT,
            DOC_INPUTDATE,
            DOC_INPUTIP,
            DOC_STARTDATE,
            DOC_ENDDATE
        ) VALUE (
            '".$sv_doc_num."',
            '".$user_id."',
            '".$user_dept."',
            '".$doc_title."',
            '".$doc_comment."',
            '".$inputdate."',
            '".$inputip."',
            '".$doc_sdate."',
            '".$doc_edate."'
        )";
        $this->db->query($sql);
    }
}
