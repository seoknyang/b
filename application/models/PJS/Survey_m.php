<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_m extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function survey_list_chk($num){
        $sql = "SELECT * FROM PJS_SVDOCLIST WHERE 
        DOC_DEPT like '%".$num['dept']."%'
        OR DOC_TITLE like '%".$num['title']."%'
        OR DOC_ENDDATE like '%".$num['end_date']."%'";

        $query = $this -> db -> query($sql);
        return $query -> result_array();
    }
}
?>