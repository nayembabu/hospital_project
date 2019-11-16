<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reception extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('receptionist_model');
        $this->load->model('settings_model');
        $this->load->library('upload');
       // $this->load->library('Pdf');
        $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);
        $this->load->model('ion_auth_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        if (!$this->ion_auth->in_group(array('admin', 'Accountant', 'Receptionist', 'Sr_Receptionist'))) {
            redirect('home/permission');
        }
    }

    public function index() {
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $timestamp = time();
        $thisdate = date('Y-m-d', time());

        $data['tickets'] = $this->receptionist_model->get_ticketss($thisdate);
        $data['settings'] = $this->settings_model->getSettings();
        $data['doctors'] = $this->receptionist_model->getdoctor();

        $data['user_P'] = $this->settings_model->get_log_user($loginId); 

        $this->load->view('home/dashboard', $data); // just the header file
        $this->load->view('reception/ticket', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function getTicketJsonEncode() {  
        $getthedate = $this->input->get('date');     
        $thisdate = date('Y-m-d', strtotime($getthedate));
        $data = $this->receptionist_model->get_ticketss($thisdate);
        echo json_encode($data);
    }

    public function allticket() {
        $data['tickets'] = $this->receptionist_model->getAllTicket();
        $data['settings'] = $this->settings_model->getSettings();
        $data['doctors'] = $this->receptionist_model->getdoctor();
        
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['user_P'] = $this->settings_model->get_log_user($loginId); 

        $this->load->view('home/dashboard', $data); // just the header file
        
        $this->load->view('reception/total_ticket', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function getlastTicketSerial() {
        $getDate = $this->input->get('app_date');
        $dr_id = $this->input->get('dr_id');
        $AppDate = date('Y-m-d', strtotime($getDate));
        $data = $this->receptionist_model->getAppSerial($dr_id, $AppDate);
        echo json_encode($data);
    }    

    public function incmexnp() {
        $data['dctr'] = $this->receptionist_model->getdoctor();
        
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['user_P'] = $this->settings_model->get_log_user($loginId); 

        $this->load->view('home/dashboard', $data); // just the header file
        
        $this->load->view('reception/incmexnp_view', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function ticketbydate() {
        $th_date = $this->input->post('date');
        $thisdate = date('Y-m-d', strtotime($th_date));
        $data['tickets'] = $this->receptionist_model->getTicketByDate($thisdate);
        $data['settings'] = $this->settings_model->getSettings();
        
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['user_P'] = $this->settings_model->get_log_user($loginId); 

        $this->load->view('home/dashboard', $data); // just the header file
        
        $this->load->view('reception/ticketbydate', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function Newticket() {
        $dr_id          = $this->input->post('dr_id');
        $patient        = $this->input->post('patient');
        $age            = $this->input->post('age').' '.$this->input->post('y_m_d');
        $mobile         = $this->input->post('mobile');
        $serial         = $this->input->post('serial');
        $adate          = $this->input->post('date');
        $ap_date        = date('Y-m-d', strtotime($adate));
        $emp_id         = $this->ion_auth->user()->row()->emp_id;
        $doctor_fee     = $this->input->post('doctor_fee');
        $hospital_fee   = $this->input->post('hospital_fee');
        $thistime       = time();
        $thisdate       = date('Y-m-d', $thistime);

                $data = array(
                    'dr_id'         => $dr_id,
                    'app_patient'   => $patient,
                    'age'           => $age,
                    'mobile'        => $mobile,
                    'ap_date'       => $ap_date,
                    'emp_id'        => $emp_id,
                    'doctor_fee'    => $doctor_fee,
                    'hospital_fee'  => $hospital_fee,
                    'ticket_serial' => $serial,
                    'thistime'      => $thistime,
                    'app_serial'    => 'outdoor',
                    'print'         => 'printed',
                    'paid'          => 'paid',
                    'thisdate'      => $thisdate
                );
        $this->receptionist_model->insertappoint($data);
        $this->session->set_flashdata('feedback', 'Ticket Added');

        $insertId = $this->db->insert_id();
        
        $link = "<script>window.open('print_ticket?id=$insertId','_blank', 'width=800,height=800,left=300,top=300');document.location.href = 'index';</script>";
        echo $link;
    }

    function print_ticket() {
        $ap_id = $this->input->get('id');
        $data['app_ticket'] = $this->receptionist_model->getAppById($ap_id);
        $this->load->view('reception/ticket_print', $data);

    }

    function editticketprint() {
        $data = array();
        $id = $this->input->get('id');
        $print = 'printed';
        $paid = 'paid';
        $data = array( 
            'print' => $print,
            'paid' => $paid
        );
        $this->receptionist_model->editticketprint($id, $data);
        $this->session->set_flashdata('feedback', 'Ticket Printed');
        redirect('reception');
    }

    public function editTicketData() {
        $a_id           = $this->input->post('ap_id');
        $dr_id          = $this->input->post('dcr_id');
        $patient        = $this->input->post('p_name');
        $age            = $this->input->post('p_age');
        $mobile         = $this->input->post('mobile_no');
        $serial         = $this->input->post('serial_no');
        $adate          = $this->input->post('app_date');
        $ap_date        = date('Y-m-d', strtotime($adate));
        $doctor_fee     = $this->input->post('docr_fee');
        $emp_id         = $this->ion_auth->user()->row()->emp_id;
        $hospital_fee   = $this->input->post('hospl_fee');

                $data = array(
                    'dr_id'         => $dr_id,
                    'app_patient'   => $patient,
                    'age'           => $age,
                    'mobile'        => $mobile,
                    'ap_date'       => $ap_date,
                    'doctor_fee'    => $doctor_fee,
                    'hospital_fee'  => $hospital_fee,
                    'ticket_serial' => $serial,
                    'first_edit_emp'=> $emp_id
                );
        $this->session->set_flashdata('feedback', 'Ticket Updated');
        $this->receptionist_model->updateAppointTicket($a_id, $data);
        redirect('reception');
    }

    function getdrfeeByJason() {
        $dr_id = $this->input->get('id');
        $data['defees'] = $this->receptionist_model->getdefeeById($dr_id);
        echo json_encode($data);
    }

    function getdrByJason() {
        $dr_id = $this->input->get('drid');
        $data['doctorr'] = $this->receptionist_model->getdrById($dr_id);
        echo json_encode($data);
    }

    function getticketByJason() {
        $tc_id = $this->input->get('id');
        $data['ticketss'] = $this->receptionist_model->getticketById($tc_id);
        echo json_encode($data);
    }

    function seachTicketID() {
        $tc_id = $this->input->get('id');
        $data['tct'] = $this->receptionist_model->searchTicket($tc_id);
        echo json_encode($data);
    }

    function editTicketByJason() {
        $ap_id = $this->input->get('id');
        $data = $this->receptionist_model->getAppById($ap_id);
        echo json_encode($data);
    }

    public function print_total() {
        $loginId = $this->ion_auth->user()->row()->emp_id;
        $data['doctors'] = $this->receptionist_model->getdoctor();
        $data['users'] = $this->receptionist_model->getUsers();
        
        $data['user_P'] = $this->settings_model->get_log_user($loginId); 

        $this->load->view('home/dashboard', $data); // just the header file
        
        $this->load->view('reception/ticket_statement_view', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function countprint() {
        $emp_id = $this->ion_auth->user()->row()->emp_id;
        $dr_id = $this->input->get('dr_id');
        $date = $this->input->get('date');
        $t_date = date('Y-m-d', strtotime($date));

        $data['ticket_count'] = $this->receptionist_model->getticketcount($emp_id, $dr_id, $t_date);
        $this->load->view('reception/count_print', $data);

        // HTML to PDF
        $html = $this->output->get_output();
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();        
        $this->dompdf->stream("Daily_Attendance.pdf", array("Attachment"=>0)); //Output Line
    }

    public function count_e_dr() {
        $dr_id = $this->input->get('dr_id');
        $date = $this->input->get('date');
        $t_date = date('Y-m-d', strtotime($date));

        $data['ticket_count'] = $this->receptionist_model->get_dr_count($dr_id, $t_date);
        $this->load->view('reception/count_print', $data);

        // HTML to PDF
        $html = $this->output->get_output();
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();        
        $this->dompdf->stream("Daily_Attendance.pdf", array("Attachment"=>0)); //Output Line
    }

    public function countprintadmin() {
        $emp_id = $this->input->get('emp_id');
        $dr_id = $this->input->get('dr_id');
        $date = $this->input->get('date');
        $t_date = date('Y-m-d', strtotime($date));

        $data['ticket_count'] = $this->receptionist_model->getticketcount($emp_id, $dr_id, $t_date);
        $this->load->view('reception/count_print', $data);

        // HTML to PDF
        $html = $this->output->get_output();
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();        
        $this->dompdf->stream("Daily_Attendance.pdf", array("Attachment"=>0)); //Output Line
    }

    public function totalticket() {
        $datefrom = date('Y-m-d', strtotime($this->input->get('date')));
        $todate = date('Y-m-d', strtotime($this->input->get('todate'))); 
        $data['s_date'] = date('d-M-y', strtotime($datefrom));
        $data['l_date'] = date('d-M-y', strtotime($todate));
        $data['ticket_stmn'] = $this->receptionist_model->get_ticket_date_date($datefrom, $todate);

        $this->load->view('reception/ticket_stmnt', $data);

    }

    public function count_e() {
        $emp_id = $this->input->get('emp_id');
        $date = $this->input->get('date');
        $t_date = date('Y-m-d', strtotime($date));

        $data['ticket_co'] = $this->receptionist_model->getEmptckt($emp_id, $t_date);
        $data['dr_infos'] = $this->receptionist_model->getDrinfo();
        $this->load->view('reception/emp_ticket', $data);

        // HTML to PDF
        $html = $this->output->get_output();
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();        
        $this->dompdf->stream("Daily_Attendance.pdf", array("Attachment"=>0)); //Output Line
    }

    function deleteticket() {
        $data = array();
        $id = $this->input->get('id');
        if ($this->ion_auth->in_group(array('admin'))) {
            $this->receptionist_model->deleteticket($id);
            $this->session->set_flashdata('feedback', 'Deleted');
            redirect('reception');
        }else {
                redirect('home/permission');
                }

    }

















// END Bracket
}




