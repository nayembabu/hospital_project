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

    function get_testInfos() {
        $this->db->join('diagonostic_dept', 'diagonostic_dept.diag_dept_idii = patho_inv.dep_id', 'left');
        $this->db->join('patho_test_group', 'patho_test_group.tst_grp_iddi = patho_inv.grup_iid', 'left');
        $sql = $this->db->get('patho_inv');
        return $sql->result();
    }

    function get_testDept() {
        $query = $this->db->get('diagonostic_dept');
        return $query->result();
    }

    function get_testGrp($dept_id) {
        $this->db->where('diag_dept_id', $dept_id);
        $sql = $this->db->get('patho_test_group');
        return $sql->result();
    }

    function get_tst_grup($tst_grup) {
        $this->db->where('tst_grp_iddi', $tst_grup);
        $sql = $this->db->get('patho_test_group');
        return $sql->row();
    }

    function insert_new_test($data) {
        $this->db->insert('patho_inv', $data);
    }

    function get_tst_byID($tstID) {
        $this->db->where('tst_inv_id', $tstID);
        $sql = $this->db->get('patho_inv');
        return $sql->row();
    }

    function del_tst_inv($tstID) {
        $this->db->where('tst_inv_id', $tstID);
        $this->db->delete('patho_inv');
    }

    function update_testINV($tst_inv_ID, $edata) {
        $this->db->where('tst_inv_id', $tst_inv_ID);
        $this->db->update('patho_inv', $edata);
    }
}
