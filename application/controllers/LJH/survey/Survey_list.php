<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Survey_list extends CI_Controller
{
    public function svdoclist()
    {

        $data['title'] = '설문조사 목록';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/list", "content", $data);
        $this->masterpage->show();
    }
}

?>