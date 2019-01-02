<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Manajer_sdm extends CI_Controller
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
        // } elseif ($this->session->userdata('role') == '') {
        //     redirect(base_url(''));
        // }
        $this->load->library('user_management');
        $this->load->library('data_konvertor');
        $this->load->model('Main_model', 'M');
    }

    public function index()
    {
        $var = [
            'title' => 'Manajer SDM',
            'content' => '/manajer_sdm/content/main',
            'breadcrumbs' => explode('/', 'manajer_sdm')
        ];

        $this->load->vars($var);
        $this->load->view('manajer_sdm/layout');
    }

    public function list_pegawai()
    {
        $var = [
            'title' => 'List Pegawai',
            'content' => '/manajer_sdm/content/list_pegawai',
            'breadcrumbs' => explode('/', 'manajer_sdm/list_pegawaii'),
            'pasien' => $this->M->select_data_column(
                'data_user',
                [
                    'du_id', 'du_nama', 'du_tanggal_lahir', 'du_jenis_kelamin', 'du_role'
                ]
            )->result()
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/layout');
    }

    public function tambah_pegawai()
    {
        $var = [
            'title' => 'Tambah Pegawai',
            'content' => '/manajer_sdm/content/tambah_pegawai',
            'breadcrumbs' => explode('/', 'manajer_sdm/tambah_pegawai')
        ];

        $this->load->vars($var);
        $this->load->view('manajer_sdm/layout');
    }

    public function tambah_pegawai_proses()
    {
        if ($this->input->post('tambah') != '') {
            $this->form_validation->set_rules('du_nama', 'Nama', 'required|trim|max_length[75]');
            $this->form_validation->set_rules('du_jenis_kelamin', 'Jenis Kelamin', 'required|in_list[Pria,Wanita]');
            $this->form_validation->set_rules('du_tempat_lahir', 'Tempat Lahir', 'required|trim|max_length[75]');
            $this->form_validation->set_rules('du_tanggal_lahir', 'Tanggal Lahir', 'required|regex_match[/^([0-9]{2,4})-([0-1][0-9])-([0-3][0-9])?$/]');
            $this->form_validation->set_rules('du_alamat', 'Alamat', 'required|trim|max_length[100]');
            $this->form_validation->set_rules('du_nomor_telepon', 'Nomor Telepon', 'required|numeric|min_length[10]|max_length[13]');
            $this->form_validation->set_rules('du_role', 'Tingkatan User', 'required|in_list[resepsionis,kasir,staff_kesehatan,manajer_sdm,staff_keuangan,staff_aset]');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('validation_errors', 'true');
                $this->session->set_flashdata('validation_errors_msg', validation_errors('<span class="white-text error-msg">', '</span>'));

                redirect('manajer_sdm/tambah_pegawai');
            } else {
                $isDuplicate = $this->M->select_data_cond('data_user', [
                    'du_nama' => $this->input->post('du_nama'),
                    'du_tanggal_lahir' => $this->input->post('du_tanggal_lahir'),
                    'du_tempat_lahir' => ucwords($this->input->post('du_tempat_lahir')),
                ])->num_rows();

                if ($isDuplicate < 1) {
                    $query = $this->M->insert_data('data_user', [
                        'du_id' => '',
                        'du_nama' => $this->input->post('du_nama'),
                        'du_jenis_kelamin' => $this->input->post('du_jenis_kelamin'),
                        'du_tempat_lahir' => $this->input->post('du_tempat_lahir'),
                        'du_tanggal_lahir' => $this->input->post('du_tanggal_lahir'),
                        'du_alamat' => $this->input->post('du_alamat'),
                        'du_nomor_telepon' => $this->input->post('du_nomor_telepon'),
                        'du_password' => md5($this->input->post('du_tanggal_lahir')),
                        'du_role' => $this->input->post('du_role')
                    ]);

                    $session = [
                        'id' => $this->M->getLastInserted('du_id', 'data_user', 'du_nama', $this->input->post('du_nama')),
                        'nama' => $this->input->post('du_nama'),
                        'role' => $this->input->post('du_role')
                    ];

                    $this->session->set_userdata($session);
                    $this->session->set_flashdata('error_message', 'Pegawai berhasil ditambahkan.');
                    redirect(base_url('manajer_sdm/tambah_pegawai'));
                } else {
                    $this->session->set_flashdata('error_message', 'Pegawai telah terdaftar sebelumnya. Silahkan coba lagi.');
                    redirect(base_url('manajer_sdm/tambah_pegawai'));
                }
            }
        } else {
            redirect(base_url('manajer_sdm'));
        }
    }
}
