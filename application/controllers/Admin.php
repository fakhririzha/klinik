<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_management');
        $this->load->library('data_konvertor');
        $this->load->model('Admin_model', 'ADM');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/home';

            $this->load->vars($var);
            $this->load->view('admin/layout');
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }

    public function gagal_input()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/gagal_input';

            $this->load->vars($var);
            $this->load->view('admin/layout');
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function forbidden_403()
    {
        $this->load->view('admin/forbidden_403');
    }

    public function data_inventaris()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/data_peralatan';
            $var['breadcrumbs'] = explode('/', 'admin/data_inventaris');

            $data['peralatan'] = $this->ADM->select_data('inventaris_peralatan')->result();

            $this->load->vars($var);
            $this->load->view('admin/layout', $data);
        } else {
            $this->load->view('admin/notfound');
        }
    }

    public function hapus_inventaris($ip_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $pd_id != '') {
            $query = $this->ADM->select_data_cond('inventaris_peralatan', ['ip_id' => $ip_id]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $query = $this->ADM->delete_data('inventaris_peralatan', ['ip_id' => $ip_id]);
                redirect('admin/data_obat');
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function data_obat()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/data_obat';
            $var['breadcrumbs'] = explode('/', 'admin/data_obat');

            $data['obat'] = $this->ADM->select_data('inventaris_obat')->result();

            $this->load->vars($var);
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function hapus_obat($ib_kode)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $ib_kode != '') {
            $query = $this->ADM->select_data_cond('inventaris_obat', ['ib_kode' => $ib_kode]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $query = $this->ADM->delete_data('inventaris_obat', ['ib_kode' => $ib_kode]);
                redirect('admin/data_obat');
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function data_pasien()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/data_pasien';
            $var['breadcrumbs'] = explode('/', 'admin/data_pasien');

            $data['pasien'] = $this->ADM->select_data_column('patient_data', [
                '0' => 'pd_id',
                '1' => 'pd_nama',
                '2' => 'pd_tanggal_lahir',
                '3' => 'pd_tempat_lahir',
                '4' => 'pd_jenis_kelamin',
                '5' => 'pd_nomor_narahubung',
                '6' => 'pd_alamat',
                '7' => 'pd_faskes_utama'
            ])->result();

            $this->load->vars($var);
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function registrasi_pasien()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/registrasi_pasien';
            $var['breadcrumbs'] = explode('/', 'admin/registrasi_pasien');

            $this->load->vars($var);
            $this->load->view('admin/layout');
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function insert_registrasi_pasien()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $this->input->post('action') != null) {
            //Insert Pasien
            $column_patient_data = $this->data_konvertor->push_data_to_array_kolom('patient_data', 'pd_id');
            $value_patient_data = $this->data_konvertor->push_data_to_array_form('patient_data', 'pd_id');

            $data_patient_data = array_combine($column_patient_data, $value_patient_data);

            $insert_patient_data = $this->ADM->insert_data('patient_data', $data_patient_data);
            if ($insert_patient_data) {
            } else {
                redirect('/admin/gagal_input');
            }
        } else {
            redirect('/default/forbidden_403');
        }
    }

    public function edit_pasien($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $patient_id != '') {
            $var['content'] = '/admin/content/edit_pasien';
            $var['breadcrumbs'] = explode('/', 'admin/edit_pasien/' . $patient_id);
            $var['patient_id'] = $patient_id;

            $query = $this->ADM->select_data_cond('patient_data', ['pd_id' => $patient_id]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $data['pasien'] = $query->result();

                $this->load->vars($var);
                $this->load->view('admin/layout', $data);
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            $this->load->view('admin/notfound');
        }
    }

    public function edit_pasien_data($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $this->input->post('action') != null && $patient_id != '') {
            //Insert Pasien
            $column_patient_data = $this->data_konvertor->push_data_to_array_kolom('patient_data', 'pd_id');
            $value_patient_data = $this->data_konvertor->push_data_to_array_form('patient_data', 'pd_id');

            $data_patient_data = array_combine($column_patient_data, $value_patient_data);

            $insert_patient_data = $this->ADM->update_data('patient_data', $data_patient_data, ['pd_id' => $patient_id]);
            if ($insert_patient_data) {
                echo "<script>alert('sukses!')</script>";
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function delete_pasien($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $patient_id != '') {
            $query = $this->ADM->select_data_cond('patient_data', ['pd_id' => $pd_id]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $query = $this->ADM->delete_data('patient_data', ['pd_id' => $pd_id]);
                redirect('admin/data_pasien');
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function print_pasien($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $patient_id != '') {
            $var['patient_id'] = $patient_id;

            $query = $this->ADM->select_data_cond('patient_data', ['pd_id' => $patient_id]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $data['pasien'] = $query->result();
                $this->load->view('admin/content/print_pasien', $data);
            } else {
                $this->load->view('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function view_pasien($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $patient_id != '') {
            $var['content'] = '/admin/content/view_pasien';
            $var['breadcrumbs'] = explode('/', 'admin/view_pasien/' . $patient_id);
            $var['patient_id'] = $patient_id;

            $query = $this->ADM->select_data_cond('patient_data', ['pd_id' => $patient_id]);
            $num_rows = $query->num_rows();
            if ($num_rows > 0) {
                $data['pasien'] = $query->result();

                $this->load->vars($var);
                $this->load->view('admin/layout', $data);
            } else {
                $this->load->view('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function pemeriksaan_kesehatan()
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin') {
            $var['content'] = '/admin/content/pemeriksaan_kesehatan';
            $var['breadcrumbs'] = explode('/', 'admin/pemeriksaan_kesehatan');

            $data['pasien'] = $this->ADM->select_data_column('patient_data', [
                '0' => 'pd_id',
                '1' => 'pd_nama',
                '2' => 'pd_tanggal_lahir',
                '3' => 'pd_tempat_lahir',
                '4' => 'pd_jenis_kelamin',
                '5' => 'pd_nomor_narahubung',
                '6' => 'pd_alamat',
                '7' => 'pd_faskes_utama'
            ])->result();

            $this->load->vars($var);
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function pemeriksaan_kesehatan_pasien($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $patient_id != '') {
            $var['content'] = '/admin/content/pemeriksaan_kesehatan_pasien';
            $var['breadcrumbs'] = explode('/', 'admin/pemeriksaan_kesehatan_pasien/' . $patient_id);

            $data_pasien_query = $this->ADM->select_data_cond('patient_data', ['pd_id' => $patient_id]);
            $data_pasien = $data_pasien_query->result();
            if ($data_pasien_query->num_rows() > 0) {
                $var['patient_id'] = $patient_id;
                $var['pd_name'] = $data_pasien[0]->pd_name;
                $var['pd_dob'] = $data_pasien[0]->pd_dob;

                $data['column_ros'] = $this->ADM->getAllColumnName('review_of_system')->result();
                $data['column_vs'] = $this->ADM->getAllColumnName('vital_signs')->result();
                $data['column_pe'] = $this->ADM->getAllColumnName('physical_exam')->result();

                $this->load->vars($var);
                $this->load->view('admin/layout', $data);
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }

    public function insert_pemeriksaan_kesehatan($patient_id)
    {
        if ($this->session->userdata('logged_in') != '' && $this->session->userdata('role') == 'admin' && $this->input->post('action') != null && $patient_id != '') {
            //Medical Record dulu boss
            $insert_medical_record = [
                'mr_id' => '',
                'pd_id' => $patient_id,
                'mr_type' => 'Pemeriksaan Kesehatan',
                'mr_date' => $this->input->post('pn_date')
            ];
            $insert_medical_record = $this->ADM->insert_data('medical_record', $insert_medical_record);

            if ($insert_medical_record) {
                //abis itu lanjut progress note
                $column_progress_note = $this->data_konvertor->push_data_to_array_kolom('progress_note', 'pn_id');
                $value_progress_note = $this->data_konvertor->push_data_to_array_form('progress_note', 'pn_id');
                $insert_progress_note_key = [
                    'mr_id' => $this->ADM->getLastInserted('mr_id', 'medical_record', $patient_id, 'pd_id')
                ];
                $combine_progress_note = array_combine($column_progress_note, $value_progress_note);

                $mr_id = $this->ADM->getLastInserted('mr_id', 'medical_record', $patient_id, 'pd_id');

                $data_progress_note = array_merge($insert_progress_note_key, $combine_progress_note);
                $insert_progress_note = $this->ADM->insert_data('progress_note', $data_progress_note);

                if ($insert_progress_note) {
                    //setelah itu review of system
                    $column_ros = $this->data_konvertor->push_data_to_array_kolom('review_of_system');
                    $value_ros = $this->data_konvertor->push_data_to_array_form('review_of_system');
                    $insert_ros_key = [
                        'pn_id' => $this->ADM->getLastInserted('pn_id', 'progress_note', $mr_id, 'mr_id')
                    ];
                    $combine_ros = array_combine($column_ros, $value_ros);
                    $data_ros = array_merge($insert_ros_key, $combine_ros);
                    $insert_ros = $this->ADM->insert_data('review_of_system', $data_ros);

                    if ($insert_ros) {
                        $column_vital_signs = $this->data_konvertor->push_data_to_array_kolom('vital_signs');
                        $value_vital_signs = $this->data_konvertor->push_data_to_array_form('vital_signs');
                        $insert_vital_signs_key = [
                            'pn_id' => $this->ADM->getLastInserted('pn_id', 'progress_note', $mr_id, 'mr_id')
                        ];
                        $combine_vital_signs = array_combine($column_vital_signs, $value_vital_signs);
                        $data_vital_signs = array_merge($insert_vital_signs_key, $combine_vital_signs);
                        $insert_vital_signs = $this->ADM->insert_data('vital_signs', $data_vital_signs);

                        if ($insert_vital_signs) {
                            $column_physical_exam = $this->data_konvertor->push_data_to_array_kolom('physical_exam');
                            $value_physical_exam = $this->data_konvertor->push_data_to_array_form('physical_exam');
                            $insert_physical_exam_key = [
                                'pn_id' => $this->ADM->getLastInserted('pn_id', 'progress_note', $mr_id, 'mr_id')
                            ];
                            $combine_physical_exam_signs = array_combine($column_physical_exam, $value_physical_exam);
                            $data_physical_exam_signs = array_merge($insert_physical_exam_key, $combine_physical_exam_signs);
                            $insert_physical_exam_signs = $this->ADM->insert_data('physical_exam', $data_physical_exam_signs);
                        } else {
                            redirect('admin/gagal_input');
                        }
                    } else {
                        redirect('admin/gagal_input');
                    }
                } else {
                    redirect('admin/gagal_input');
                }
            } else {
                redirect('admin/gagal_input');
            }
        } else {
            redirect('admin/forbidden_403');
        }
    }
}
