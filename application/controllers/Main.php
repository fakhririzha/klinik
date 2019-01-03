<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('role') == 'admin') {
        //     redirect(base_url('admin'));
        // } elseif ($this->session->userdata('role') == 'kasir') {
        //     redirect(base_url('kasir'));
        // } elseif ($this->session->userdata('role') == 'manajer_sdm') {
        //     redirect(base_url('manajer_sdm'));
        // } elseif ($this->session->userdata('role') == 'staff_aset') {
        //     redirect(base_url('staff_aset'));
        // } elseif ($this->session->userdata('role') == 'staff_kesehatan') {
        //     redirect(base_url('staff_kesehatan'));
        // } elseif ($this->session->userdata('role') == 'staff_keuangan') {
        //     redirect(base_url('staff_keuangan'));
        // } elseif ($this->session->userdata('role') == 'pasien') {
        //     redirect(base_url('pasien'));
        // }

        $this->load->model('Main_model', 'M');
    }

    //fungsi utama untuk load halaman utama
    public function index()
    {
        $this->load->view('frontend/index');
    }

    public function contactpage()
    {
        $this->load->view('frontend/contact');
    }

    public function aboutpage()
    {
        $this->load->view('frontend/about');
    }

    public function servicespage()
    {
        $this->load->view('frontend/services');
    }

    public function newspage()
    {
        $this->load->view('frontend/news');
    }

    public function newspage2()
    {
        $this->load->view('frontend/news2');
    }

    public function dokterpage()
    {
        $this->load->view('frontend/dokter');
    }

    public function detailpage()
    {
        $this->load->view('frontend/detail1');
    }

    public function detailpage2()
    {
        $this->load->view('frontend/detail2');
    }

    public function detailpage3()
    {
        $this->load->view('frontend/detail3');
    }

    public function detailpage4()
    {
        $this->load->view('frontend/detail4');
    }

    public function detailpage5()
    {
        $this->load->view('frontend/detail5');
    }

    public function detailpage6()
    {
        $this->load->view('frontend/detail6');
    }

    public function loginpage()
    {
        $this->load->view('frontend/login');
    }

    public function login()
    {
        $du_id = $this->input->post('du_id');
        $du_password = $this->input->post('du_password');

        $query = $this->M->select_data_cond('data_user', [
            'du_id' => $this->input->post('du_id'),
            'du_password' => md5($this->input->post('du_password'))
        ]);

        $data = $query->row();
        $rows = $query->num_rows();

        if ($rows > 0) {
            $session = [
                'id' => $data->du_id,
                'nama' => $data->du_nama,
                'role' => $data->du_role
            ];

            $this->session->set_userdata($session);

            redirect(base_url("$data->du_role"));
        } else {
            $this->session->set_flashdata('warning', 'Maaf, Username atau Password anda salah!');
            redirect(base_url('Main/loginpage'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(''));
    }

    public function checkrole($role)
    {
        if ($role === 'staff_humas') {
            redirect(base_url());
        }
    }
}
