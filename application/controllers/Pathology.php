<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pathology extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('labrcv_model');
        $this->load->library('upload');
        $this->load->library('Pdf');
        $this->load->model('pathology_model');
        $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);
        $this->load->model('ion_auth_model');
        $this->load->model('settings_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        if (!$this->ion_auth->in_group(array('admin'))) {
            redirect('home/permission');
        }
    }

    function index() {
        $data['ptNInfo'] = $this->labrcv_model->getptninfo();

        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['user_P'] = $this->settings_model->get_log_user($loginId);


        $this->load->view('home/dashboard', $data); // just the header file
        $this->load->view('pathology/pathology', $data);
        $this->load->view('home/footer'); // just the header file
    }

    function search_printID() {
        $pId = $this->input->get('id');
        $data = $this->pathology_model->searchSinglePrint($pId);
        echo json_encode($data);
    }

    function test_add() {
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['user_P'] = $this->settings_model->get_log_user($loginId);

        $data['test_info'] = $this->pathology_model->get_testInfos();
        $data['test_dept'] = $this->pathology_model->get_testDept();

        $this->load->view('home/dashboard', $data); // just the header file
        $this->load->view('pathology/test_add', $data);
        $this->load->view('home/footer'); // just the header file
    }

    function get_TestGrup() {
        $dept_id = $this->input->get('deptId');
        $data = $this->pathology_model->get_testGrp($dept_id);
        echo json_encode($data);
    }

    function get_tst_grup_byID() {
        $tst_grup = $this->input->get('tst_Grp_id');
        $data = $this->pathology_model->get_tst_grup($tst_grup);
        echo json_encode($data);
    }

    function AddNewTest() {
        $dep_idi            = $this->input->post('dep_idi');
        $grup_id            = $this->input->post('grup_id');
        $test_name          = $this->input->post('test_name');
        $test_rate_normal   = $this->input->post('test_rate_normal');
        $test_rate_argnt    = $this->input->post('test_rate_argnt');
        $test_grup_typ      = $this->input->post('test_grup_typ');
        $data = array(
            'dep_id'        => $dep_idi,
            'grup_iid'      => $grup_id,
            'inv_name'      => $test_name,
            'rate'          => $test_rate_normal,
            'argent_rate'   => $test_rate_argnt,
            'grup_type'     => $test_grup_typ 
        );
        $this->pathology_model->insert_new_test($data);
        $this->session->set_flashdata('feedback', 'Test Addedd Successfully');
            redirect('pathology/test_add');
    }

    function editPathoTest() {
        $tst_inv_ID = $this->input->post('inv_idi');
        $tst_Name = $this->input->post('test_name');
        $tst_NRate = $this->input->post('test_rate_normal');
        $tst_ARate = $this->input->post('test_rate_argnt');
        $edata = array(
            'inv_name'      => $tst_Name,     
            'rate'          => $tst_NRate,     
            'argent_rate'   => $tst_ARate     
        );
        $this->pathology_model->update_testINV($tst_inv_ID, $edata);
        $this->session->set_flashdata('feedback', 'Update Successfully');
            redirect('pathology/test_add');
    }

    function getTestInfobyID() {
        $tstID = $this->input->get('tstID');
        $data = $this->pathology_model->get_tst_byID($tstID);
        echo json_encode($data);
    }

    function deleteTst() {
        $tstID = $this->input->get('tstid');
        $this->pathology_model->del_tst_inv($tstID);
        $this->session->set_flashdata('feedback', 'Deleted');
            redirect('pathology/test_add');
    }

}

/* End of file Pathology.php */
/* Location: ./application/modules/pathology/controllers/pathology.php */