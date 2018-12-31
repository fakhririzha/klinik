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
}
