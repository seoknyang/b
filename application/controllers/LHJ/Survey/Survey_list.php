<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_list extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("/LHJ/Survey_list_m");
    }

    public function index()
    {
        $data['title'] = "설문조사";

        $this->masterpage->setMasterPage ("LHJ/Masterpage");
        $this->masterpage->addContentPage("LHJ/Survey_list", 'content', $data);
        $this->masterpage->show();
    }
}