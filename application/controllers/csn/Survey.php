<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("/csn/Survey_m");
	}

	public function sv_list() {
		$data['title'] = "설문조사 목록";

		$data['admin_id'] = $this->session->userdata('admin_id');
		$data['memberList'] = $this->Survey_m->getMember();
		$data['admin_level'] = $this->session->userdata('admin_level');
		$data['admin_name'] = $this->Survey_m->adminGetName()[0]['USER_NAME'];

		$this->masterpage->setMasterPage("csn/MasterPage1");
		$this->masterpage->addContentPage("csn/list", 'content', $data);
		$this->masterpage->show();
	}

	public function list_add(){
		$data['title'] = "설문";

		$data['admin_id'] = $this->session->userdata('admin_id');
		$data['memberList'] = $this->Survey_m->getMember();
		$data['admin_level'] = $this->session->userdata('admin_level');
		$data['admin_name'] = $this->Survey_m->adminGetName()[0]['USER_NAME'];

		$this->masterpage->setMasterPage("csn/MasterPage1");
		$this->masterpage->addContentPage("csn/list_add", 'content', $data);
		$this->masterpage->show();
	}
	public function sv_question_add() {
		$data['title'] = "설문항목 생성";

		$data['admin_id'] = $this->session->userdata('admin_id');
		$data['memberList'] = $this->Survey_m->getMember();
		$data['admin_level'] = $this->session->userdata('admin_level');
		$data['admin_name'] = $this->Survey_m->adminGetName()[0]['USER_NAME'];

		$this->masterpage->setMasterPage("csn/MasterPage1");
		$this->masterpage->addContentPage("csn/sv_question_add", 'content', $data);
		$this->masterpage->show();
	}

	public function sv_doc_add_result() {
		$doc_title = $this->input->post("doc_title");
		$doc_comment = $this->input->post("doc_comment");
		$doc_sdate = $this->input->post("doc_sdate");
		$doc_edate = $this->input->post("doc_edate");
		$inputdate = date("Y-m-d");
		$inputip = $this->input->ip_address();

		$max_doc_num = $this->Survey_m->getMaxNum();

		if (!empty($max_doc_num)) {
			$max_doc_num = substr($max_doc_num[0]["DOC_NUM"], -3, 3);
			$max_doc_num = (int)$max_doc_num+1;
			$max_doc_num = sprintf("%03d", $max_doc_num);
		} else {
			$max_doc_num = "001";
		}

		$sv_doc_num = "SV".date("Y").$max_doc_num;

		$user_id = $this->session->userdata("admin_id");
		$user_dept = $this->Survey_m->getDept($user_id)[0]["USER_DEPT"];

		$this->Survey_m->saveDoc($sv_doc_num, $user_id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate);
		echo $sv_doc_num;
	}


}

?>
