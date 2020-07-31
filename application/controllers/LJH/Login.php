<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/LJH/login_m");
    }

    public function index()
    {
        $data['title'] = '로그인';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/login/login", "content", $data);
        $this->masterpage->show();
    }

    public function login_check(){
        $id = $this->input->post("user_id");
        $pw = $this->input->post("user_pass");

        $login_ok = $this->login_m->id_check($id);

        if (empty($login_ok)){
            echo "<script>";
            echo "alert ('아이디가 존재하지 않습니다.');";
            echo "history.back(-1)";
            echo "</script>";
        }
        else{
            //아이디가 있을경우
            if ($pw == $login_ok[0]["USER_PW"]){
                $this->session->set_userdata('user_id', $id);
                //세션 저장$this->session->set_userdata('세션변수', '값')
                //$this->session->userdata('세션변수') 세션불러오기
                //$this->session-sess_destroy(); 세션 삭제

                // 비밀번호가 일치하는 경우
                if(!empty($this->login_m->adm_chk($id))){
                    //관리자인 경우
                    echo "<script>";
                    echo "location.href='/LJH/survey/svdoclist';";
                    echo "</script>";
                }
                else{
                    //관리자가 아닌경우
                    echo "<script>";
                    echo "location.href='/LJH/login';";
                    echo "</script>";
                }
            }
            else{
                echo "<script>";
                echo "alert ('비밀번호가 일치하지 않습니다.');";
                echo "history.back(-1)";
                echo "</script>";
            }
        }
    }

    public function register(){
        
        $data['title'] = '회원가입';

        $this->masterpage->setMasterPage("LJH/MasterPage");
        $this->masterpage->addContentPage("LJH/login/register", "content", $data);
        $this->masterpage->show();
    }

    public function id_chk(){
        $id = $this->input->post("user_id");
        $result = $this->login_m->id_check($id);

        //없으면 가입가능
        if(empty($result)){
            echo "O";
        }
        else{
            echo "X";
        }
    }

    public function register_ok() {
        $regi_arr = array(
            'id'=> $this->input->post("user_id"),
            'pw'=> $this->input->post("user_pw"),
            'name'=> $this->input->post("user_name"),
            'gender'=> $this->input->post("user_gender"),
            'phone'=> $this->input->post("user_phone"),
            'birth'=> $this->input->post("user_birth")
        );

        $this->login_m->register($regi_arr);

        echo "<script>";
        echo "alert ('회원가입이 되었습니다.');";
        echo "location.href='/LJH/login';";
        echo "</script>";
    }
}
?>