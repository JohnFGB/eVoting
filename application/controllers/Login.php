<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('login/index');
	}

    public function masuk()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek = $this->db->get_where('pemilih',array(
            'username' => $username,
            'password' => $password
        ));
        $banyak = $cek->num_rows();
        $data = $cek->result();

        if ($banyak >= 1) {
            $data_session = array(
                'username' => $data[0]->username,
                'id_pemilih' => $data[0]->id_pemilih,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('utama');
        } else {
            $this->session->set_flashdata('error','Username atau Password salah');
            redirect('login');
        }
    }
    public function logout()
    {
        session_destroy();
        redirect('utama');
    }
}
