<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Resepsionis extends CI_Controller
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
        } elseif ($this->session->userdata('role') == 'staff_aset') {
            redirect(base_url('staff_aset'));
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
            'title' => 'Resepsionis',
            'content' => '/resepsionis/content/main',
            'breadcrumbs' => explode('/', 'resepsionis')
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/layout');
    }

    public function list_pasien()
    {
        $var = [
            'title' => 'List Pasien',
            'content' => '/resepsionis/content/list_pasien',
            'breadcrumbs' => explode('/', 'resepsionis/list_pasien'),
            'pasien' => $this->M->select_data_column(
                'data_pasien',
                [
                    'dp_id', 'dp_nama', 'dp_tanggal_lahir', 'dp_jenis_kelamin', 'dp_nomor_telepon'
                ]
            )->result()
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/layout');
    }

    public function ambil_no_antri()
    {
        $var = [
            'title' => 'Ambil Antrian',
            'content' => '/resepsionis/content/ambil_no_antri',
            'breadcrumbs' => explode('/', 'resepsionis/ambil_no_antri')
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/layout');
    }

    public function cetak_kartu_pasien($dp_nik)
    {
        $var = [
            'title' => 'Cetak Kartu',
            // 'content' => '/resepsionis/content/cetak_kartu_pasien'
            'pasien' => $this->M->select_data_cond('data_pasien', ['dp_nik' => $dp_nik])->result()
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/content/cetak_kartu_pasien');
    }

    public function pendaftaran_pasien()
    {
        $var = [
            'title' => 'Pendaftaran Pasien',
            'content' => '/resepsionis/content/pendaftaran_pasien',
            'breadcrumbs' => explode('/', 'resepsionis/pendaftaran_pasien')
        ];

        $this->load->vars($var);
        $this->load->view('resepsionis/layout');
    }

    public function pendaftaran_pasien_proses()
    {
        //|regex_match[/^([0-9]{2,4})-([0-1][0-9])-([0-3][0-9])?$/]
        if ($this->input->post('daftar') != '') {
            $this->form_validation->set_rules('dp_nama', 'Nama', 'required|trim|max_length[75]');
            $this->form_validation->set_rules('dp_jenis_kelamin', 'Jenis Kelamin', 'required|in_list[Pria,Wanita]');
            $this->form_validation->set_rules('dp_tempat_lahir', 'Tempat Lahir', 'required|trim|max_length[75]');
            $this->form_validation->set_rules('dp_tanggal_lahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('dp_alamat', 'Alamat', 'required|trim|max_length[100]');
            $this->form_validation->set_rules('dp_nik', 'Nomor Telepon', 'required|numeric|exact_length[16]');
            $this->form_validation->set_rules('dp_nomor_telepon', 'Nomor Telepon', 'required|numeric|min_length[10]|max_length[13]');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('validation_errors', 'true');
                $this->session->set_flashdata('validation_errors_msg', validation_errors('<span class="white-text error-msg">', '</span>'));

                redirect('resepsionis/pendaftaran_pasien');
            } else {
                $isDuplicate = $this->M->select_data_cond('data_pasien', [
                    'dp_nik' => $this->input->post('dp_nik')
                ])->num_rows();

                if ($isDuplicate < 1) {
                    $query = $this->M->insert_data('data_pasien', [
                        'dp_id' => '',
                        'dp_nik' => $this->input->post('dp_nik'),
                        'dp_nama' => $this->input->post('dp_nama'),
                        'dp_jenis_kelamin' => $this->input->post('dp_jenis_kelamin'),
                        'dp_tempat_lahir' => $this->input->post('dp_tempat_lahir'),
                        'dp_tanggal_lahir' => $this->input->post('dp_tanggal_lahir'),
                        'dp_alamat' => $this->input->post('dp_alamat'),
                        'dp_nomor_telepon' => $this->input->post('dp_nomor_telepon')
                    ]);

                    $query2 = $this->M->insert_data('data_user', [
                        'du_id' => '',
                        'du_nama' => $this->input->post('dp_nama'),
                        'du_jenis_kelamin' => $this->input->post('dp_jenis_kelamin'),
                        'du_tempat_lahir' => $this->input->post('dp_tempat_lahir'),
                        'du_tanggal_lahir' => $this->input->post('dp_tanggal_lahir'),
                        'du_alamat' => $this->input->post('dp_alamat'),
                        'du_nomor_telepon' => $this->input->post('dp_nomor_telepon'),
                        'du_password' => md5($this->input->post('dp_tanggal_lahir')),
                        'du_role' => 'pasien'
                    ]);

                    $query3 = $this->M->insert_data('e_payment', [
                        'ep_id' => '',
                        'dp_id' => $this->M->getLastInserted('dp_id', 'data_pasien', 'dp_nik', $this->input->post('dp_nik')),
                        'ep_saldo' => 0,
                        'ep_status' => 'tidak_aktif'
                    ]);

                    $session = [
                        'id' => $this->M->getLastInserted('du_id', 'data_user', 'du_nama', $this->input->post('du_nama')),
                        'nama' => $this->input->post('du_nama'),
                        'role' => 'pasien'
                    ];

                    $this->session->set_userdata($session);
                    $this->session->set_flashdata('error_message', 'Pasien berhasil ditambahkan.');
                    redirect(base_url('resepsionis/pendaftaran_pasien'));
                } else {
                    $this->session->set_flashdata('error_message', 'Pasien telah terdaftar sebelumnya. Silahkan coba lagi.');
                    redirect(base_url('resepsionis/pendaftaran_pasien'));
                }
            }
        } else {
            redirect(base_url('resepsionis'));
        }
    }
}
