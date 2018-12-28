<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Konvertor
{
    /**
     * Variabel yang meng-"inherit" super class dari CodeIgniter
     *
     * @access protected
     * @var object
    */
    protected $_CI;

    /**
     * Variabel untuk diproses
     *
     * @var mixed
     */
    private $_data = [];

    /**
     * Variabel untuk menyimpan berapa banyak  session yang tidak ada
     * @var int
     */
    private $_not_exist;

    /**
     * Konstruktor untuk kelas UserManagement
     */
    public function __construct()
    {
        $this->_CI = &get_instance();
    }

    public function push_data_to_array_kolom($namatabel, $pk = '')
    {
        $kolom = [];
        $this->_CI->load->model('Admin_model');

        $data = $this->_CI->Admin_model->getAllColumnName($namatabel);
        $data = $data->result();
        if ($pk == '') {
            foreach ($data as $key) {
                array_push($kolom, "$key->Field");
            }
        } else {
            foreach ($data as $key) {
                if ($key->Field != $pk) {
                    array_push($kolom, "$key->Field");
                }
            }
        }
        return $kolom;
    }

    public function push_data_to_array_form($namatabel, $pk = '')
    {
        $form = [];
        $this->_CI->load->model('Admin_model');

        $data = $this->_CI->Admin_model->getAllColumnName($namatabel);
        $data = $data->result();
        if ($pk == '') {
            foreach ($data as $key) {
                array_push($form, "$key->Field");
            }
        } else {
            foreach ($data as $key) {
                if ($key->Field != $pk) {
                    $val = $_POST[$key->Field];
                    array_push($form, $val);
                }
            }
        }
        return $form;
    }
}
