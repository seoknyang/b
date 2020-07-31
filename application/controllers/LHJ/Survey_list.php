<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_list extends CI_Controller
{
    public function __construct()   //생성자
    {
        parent:: __construct();
        $this->load->model("/LHJ/Survey_list_m");
    }

    public function index()
    {
        $data['title'] = "설문조사";

       // $data["memberList"] = $this->Survey_list_m->getmember();

        $this->masterpage->setMasterPage ("LHJ/Masterpage");
        $this->masterpage->addContentPage("LHJ/Survey/Survey_list", 'content', $data);
        $this->masterpage->show();
    }

    public function sv_list(){
        $data['title'] = "설문조사목록";
        $data["memberList"] = $this->Survey_list_m->getmember();

        $this->masterpage->setMasterPage ("LHJ/Masterpage");
        $this->masterpage->addContentPage("LHJ/Survey/sv_list", 'content', $data);
        $this->masterpage->show();
    }

    public function sv_doc_add_result() {
        $doc_title = $this->input->post("doc_title");
        $doc_comment = $this->input->post("doc_comment");
        $doc_sdate = $this->input->post("doc_sdate");
        $doc_edate = $this->input->post("doc_edate");

        $max_doc_num = $this->survey_m->getmaxNum();

        if (empty($max_doc_num)) {
            $max_doc_num = (int)substr($max_doc_num[0]["DOC_NUM"], -3, 3);
        } else {
            $max_doc_num = "001";
        }


        $sv_doc_num = "SV".date("Y").$max_doc_num;
            //$this->survey_m->saveDoc($sv_doc_num, $doc_title, $doc_comment, $doc_sdate, $doc_edate);
        echo $sv_doc_num;

    }
}