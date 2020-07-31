<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/LJH/survey_m");
    }

    public function svdoclist()
    {
        $data['title'] = '설문조사 목록';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/survey/svdoclist", "content", $data);
        $this->masterpage->show();
    }

    public function svdoclist_add(){

        $data['title'] = '설문조사 기초 생성';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/survey/svdoclist_add", "content", $data);
        $this->masterpage->show();
    }

    public function svquestion(){

        $data['title'] = '설문조사 항목 만들기';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/survey/svquestion", "content", $data);
        $this->masterpage->show();
    }

    public function svdoclist_add_res(){

        $doc_title = $this->input->post("doc_title");
        $doc_comment = $this->input->post("doc_comment");
        $doc_sdate = $this->input->post("doc_sdate");
        $doc_edate = $this->input->post("doc_edate");
        $inputdate = date("Y-m-d");
        $inputip = $this->input->ip_address();

        $max_doc_num = $this->survey_m->getMaxNum();

        if(!empty($max_doc_num)){
            $max_doc_num = substr($max_doc_num[0]["DOC_NUM"], -3 ,3);
            $max_doc_num = (int)$max_doc_num+1;
            $max_doc_num = sprintf("%03d", $max_doc_num);
        } else{
            $max_doc_num = "001";
        }


        $sv_doc_num = "SV".date("Y").$max_doc_num;

        $user_id = $this->seesion->userdata("user_id");
        $user_dept = $this->surver_m->getDept($user_id)[0]["USER_DEPT"];

        $this->survey_m->savDoc($sv_doc_num, $user_id, $user_dept, $doc_title, $doc_comment, $inputdate, $inputip, $doc_sdate, $doc_edate);
        echo $sv_doc_num;
    }


}

?>