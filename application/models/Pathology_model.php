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

    function get_grup() {
        $this->db->join('diagonostic_dept', 'diagonostic_dept.diag_dept_idii = patho_test_group.diag_dept_id', 'left');
        $sql = $this->db->get('patho_test_group');
        return $sql->result();
    }

    function del_grup($g_id) {
        $this->db->where('tst_grp_iddi', $g_id);
        $this->db->delete('patho_test_group');        
    }

    function insert_grup_data($sata) {
        $this->db->insert('patho_test_group', $sata);
    }

    function getGrupIDD($grpID) {
        $this->db->where('tst_grp_iddi', $grpID);
        $sql = $this->db->get('patho_test_group');
        return $sql->row();
    }

    function update_grup_data($sata, $grp_idi) {
        $this->db->where('tst_grp_iddi', $grp_idi);
        $this->db->update('patho_test_group', $sata);        
    }

    function get_grupforRange() {
        $this->db->where('diag_dept_id', '1');
        $sql = $this->db->get('patho_test_group');
        return $sql->result();
    }

    function get_invBygrpID($grpID) {
        $this->db->where('grup_iid', $grpID);
        $sql = $this->db->get('patho_inv');
        return $sql->result();
    }

    function insert_RangData($aData) {
        $this->db->insert('patho_test_range', $aData);
    }

    function getTstRngByINV($inv_ids) {
        $this->db->where('tst_inv_iid', $inv_ids);
        $sql = $this->db->get('patho_test_range');
        return $sql->result();        
    }
}
