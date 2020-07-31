<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Login extends CI_Controller
{
    public function __construnct()
    {
        parent::__construnct();
    }

    public function index()
    {
        
        $data['TT'] = '';
        $this -> load -> view('/lhj/Login',$data); 
    }
} 