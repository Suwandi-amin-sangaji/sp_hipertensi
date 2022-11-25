<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('level') != 99) {
        //     redirect(base_url());
        // }
    }

    public function index()
    {
        $data['pasien'] = $this->m_vic->get_data('pasien');
        $this->mylib->view('diagnosa', $data);
    }

    public function data_pasien()
    {
        $this->mylib->view('data_pasien');
    }
}
