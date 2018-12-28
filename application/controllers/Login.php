<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_management');
        $this->load->library('data_konvertor');
        $this->load->model('Admin_model', 'ADM');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == '' && $this->session->userdata('role') == '') {
            $var['content'] = '/user/content/login';

            $this->load->vars($var);
            $this->load->view('user/layout');
        } else {
            redirect('admin/');
        }
    }

    public function proses_login()
    {
        if ($this->session->userdata('logged_in') == '' && $this->session->userdata('role') == '') {
            $query = $this->ADM->select_data_cond('employee_data', [
                'ed_nip' => $this->input->post('ed_nip'),
                'ed_password' => md5($this->input->post('ed_password'))
            ]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $result = $query->row();
                $session_data = [
                    'logged_in' => 'true',
                    'role' => 'admin',
                    'nama' => $result->ed_nama
                ];

                $this->session->set_userdata($session_data);
                redirect('admin/');
            } else {
                redirect('gagal_input');
            }
        } else {
            redirect('admin/');
        }
    }
}
