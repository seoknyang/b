<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sulmun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("/PJH/login_m");
        $this->load->model("/PJH/sulmun_m");
    }

    public function sulmun_list()
    {
        $data['title']='설문목록';

        $id=$this->session->userdata('user_id');
        $data['name']=$this->login_m->login_check($id)[0]["USER_NAME"];

       // $data['memberList']=$this->sulmun_m->getmember();

        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun",'content',$data);
        $this->masterpage->show();


    }
    public function sulmun_add()
    {
        $data['title']='설문목록';
        $id=$this->session->userdata('user_id');

        $data['name']=$this->login_m->login_check($id)[0]["USER_NAME"];


        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun_add",'content',$data);
        $this->masterpage->show();

    }
    public function sulmun_create()
    {
        $data['title']='설문목록';
        $id=$this->session->userdata('user_id');

        $data['name']=$this->login_m->login_check($id)[0]["USER_NAME"];


        $this->masterpage->setMasterPage("PJH/MasterPage1");
        $this->masterpage->addContentPage("PJH/sulmun_create",'content',$data);
        $this->masterpage->show();

    }
    public function  sv_question_add()
    {
        //$doc_title=$this->input->post('doc_title');

    }


}