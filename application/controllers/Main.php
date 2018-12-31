<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    //fungsi utama untuk load halaman utama
    public function index()
    {
        $this->load->view('halaman_depan/index');
    }
     public function contactpage()
    {
        $this->load->view('halaman_depan/contact');
    }
     public function aboutpage()
    {
        $this->load->view('halaman_depan/about');
    }
     public function servicespage()
    {
        $this->load->view('halaman_depan/services');
    }
     public function newspage()
    {
        $this->load->view('halaman_depan/news');
    }
    public function loginpage()
    {
        $this->load->view('halaman_depan/login');
    }

    public function login()
    {
        $ed_nama = $this->input->post('ed_nama');
        $ed_password = $this->input->post('ed_password');

        if($this->Default_model->checklogin($ed_nama,$ed_password))
        {
            $datalogin = $this->Default_model->login($ed_nama,$ed_password);
            $data = array(
                            'datalogin' => $datalogin,
            );

            $this->session->set_userdata('nama',$datalogin->ed_nama);
            $this->session->set_userdata('password',$datalogin->ed_password);
            $this->session->set_userdata('role',$datalogin->ed_role);
            $this->session->set_flashdata('success','Selamat datang, '.$datalogin->ed_nama);

            redirect(base_url("Main/checkrole/$datalogin->ed_role"));   
        }
        else
        {
            $this->session->set_flashdata('warning','Maaf, Username atau Password anda salah!');
            redirect(base_url('Main/loginpage'));
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('success','Logout Berhasil !');
        redirect(base_url());
    }

    public function checkrole($role)
    {
        if($role === 'staff_humas')
        {
            redirect(base_url());
        }
    }
}
