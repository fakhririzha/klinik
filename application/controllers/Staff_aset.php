<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Staff_aset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') == 'admin') {
            redirect(base_url('admin'));
        } elseif ($this->session->userdata('role') == 'kasir') {
            redirect(base_url('kasir'));
        } elseif ($this->session->userdata('role') == 'manajer_sdm') {
            redirect(base_url('manajer_sdm'));
        } elseif ($this->session->userdata('role') == 'resepsionis') {
            redirect(base_url('resepsionis'));
        } elseif ($this->session->userdata('role') == 'staff_kesehatan') {
            redirect(base_url('staff_kesehatan'));
        } elseif ($this->session->userdata('role') == 'staff_keuangan') {
            redirect(base_url('staff_keuangan'));
        } elseif ($this->session->userdata('role') == 'pasien') {
            redirect(base_url('pasien'));
        } elseif ($this->session->userdata('role') == '') {
            redirect(base_url(''));
        }
        $this->load->library('user_management');
        $this->load->library('data_konvertor');
        $this->load->model('Main_model', 'M');
    }

    public function index()
    {
        $var = [
            'title' => 'Staff Aset',
            'content' => '/staff_aset/content/main',
            'breadcrumbs' => explode('/', 'staff_aset')
        ];

        $this->load->vars($var);
        $this->load->view('staff_aset/layout');
    }
}
