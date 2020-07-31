<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMaxNum() {
    	$sql = "SELECT * FROM (SELECT DOC_NUM FROM SVDOCLIST_PKH ORDER BY DOC_NUM DESC) WHERE ROWNUM = 1";
    	$query = $this->db->query($sql);

    	return $query->result_array();
	}

	public function getDept($id) {
    	$sql = "SELECT USER_DEPT FROM MEMBER_PKH WHERE USER_ID = '".$id."'";
		$query = $this->db->query($sql);

		return $query->result_array();
	}

	public function saveDoc($sv_doc_num, $user_id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate) {
    	$sql = "INSERT INTO SVDOCLIST_PKH (
			DOC_NUM,
			DOC_EMPNO,
			DOC_DEPT,
			DOC_TITLE,
			DOC_COMMENT,
			DOC_INPUTDATE,
			DOC_INPUTIP,
			DOC_STARTDATE,
			DOC_ENDDATE
		) VALUES (
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
