<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Management
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

    /**
     * Fungsi untuk mengecek status login dari user
     *
     * Cara pemakaian:
     *
     * $session = $this->user_management->check_login('username', 'role');
     *
     * if($session != NULL) => Nah pernyataan ini akan bernilai TRUE jika session ada.
     *
     * @access public
     * @param mixed $data
     * @return mixed
     */
    public function check_login($data)
    {
        $this->_not_exist = 0;

        if (empty($data)) {
            return $this;
        }
        /**
         * Jika ingin mengecek banyak session dlam sekali pemanggilan fungsi
         */
        elseif (is_array($data)) {
            foreach ($data as $key => $value) {
                $session = $this->session($value);
                if ($session == 'empty') {
                    $this->_not_exist++;
                }
            }
        }
        /**
         * Jika ingin mengecek hanya satu session dalam sekali pemanggilan fungsi
         */
        else {
            $session = $this->session($data);
            if ($session == false) {
                $this->_not_exist++;
            }
        }

        if ($this->_not_exist > 0) {
            return true;
        } else {
            return 'exist';
        }
    }

    /**
     * Fungsi untuk mengecek apakah session ada atau tidak
     *
     * @access public
     * @param string $value Sebuah string nama session yang ingin dicek
     * @return bool
     */
    public function session($value = '')
    {
        $this->_CI->load->library('session');
        if (empty($value)) {
            return $this;
        }

        if ($this->_CI->session->userdata($value) !== null) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Fungsi untuk mencocokkan password hash dengan inputan user
     *
     * @access public
     * @param string $value String inputan dari user
     * @return bool
     */
    public function checkPassword($value = '', $username = '')
    {
        $password = $this->getPassword($username);

        $match = password_verify($value, $password);

        return $match;
    }

    /**
     * Fungsi untuk mengambil baris data dari database berdasarkan informasi login
     *
     * @access public
     * @return string
     */
    public function getPassword($username = '')
    {
        $this->_CI->load->model('CMS_Model');

        $get = $this->_CI->CMS_Model->fetch_user($username);
        $row = $get->row_array();

        return $row['password'];
    }
}
