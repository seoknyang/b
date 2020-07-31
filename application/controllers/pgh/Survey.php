<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/pgh/survey_m");
    }

    public function sv_doc_add() {
        $data['title'] = "설문조사 목록";

        $this->masterpage->setMasterPage("pgh/MasterPage");
        $this->masterpage->addContentPage("pgh/survey/sv_doc_add", 'content', $data);
        $this->masterpage->show();
    }

	public function sv_doc_add_result(){
		$doc_title = $this->input->post("doc_title");
		$doc_comment = $this->input->post("doc_comment");
		$doc_sdate = $this->input->post("doc_sdate");
		$doc_edate = $this->input->post("doc_edate");
		$inputdate = date("Y-m-d");
		$inputip = $this->input->ip_address();

		$max_doc_num = $this->survey_m->getMaxNum();

		if (!empty($max_doc_num)) {
			$max_doc_num = substr($max_doc_num[0]["DOC_NUM"], -3, 3);
			$max_doc_num = (int)$max_doc_num+1;
			$max_doc_num = sprintf("%03d", $max_doc_num);
		} else {
			$max_doc_num = "001";
		}

		$sv_doc_num = "SV".date("Y").$max_doc_num;

		$user_id = $this->session->userdata("user_id");
		$user_dept = $this->survey_m->getDept($user_id)[0]["USER_DEPT"];

		$this->survey_m->saveDoc($sv_doc_num, $user_id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate);
		echo $sv_doc_num;
    }

	public function sv_question_add(){
    	$data["title"] = "항목 추가";

		$this->masterpage->setMasterPage("pgh/MasterPage");
		$this->masterpage->addContentPage("pgh/survey/sv_question_add", 'content', $data);
		$this->masterpage->show();
	}
}

?>
