<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pathology_model extends CI_model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function searchSinglePrint($pId) {
        $this->db->like('lab_rgstr_iidd', $pId);
        $sql = $this->db->get('lab_patient_info');
        return $sql->result();
    }

}
