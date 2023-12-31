<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		if ($this->session->userdata('status') != 'login') {
            redirect('login');
        } else {
            $data['kandidat'] = $this->db->get('kandidat')->result();
            $this->load->view('utama', $data);
        };
	}

    public function pilih()
    {
        $pemilih = $this->session->userdata('id_pemilih');
        $cek = $this->db->get_where('pilih',array('id_pemilih' => $pemilih));
        $banyak = $cek->num_rows();
        if ($banyak >=1) {
            $this->session->set_flashdata('error','Anda telah selesai melakukan pemilihan!');
            redirect('utama');
        } else {
            $data['kandidat'] = $this->db->get('kandidat')->result();
            $this->load->view('pilih/index', $data);
        }
    }

    public function simpan($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $pemilih = $this->session->userdata('id_pemilih');
        $data = array(
            'id_kandidat' => $id,
            'id_pemilih' => $pemilih,
            'tgl_vote' => $tgl
        );
        $this->db->insert('pilih',$data);
        $this->session->set_flashdata('success','Pemilihan berhasil!');
        redirect('utama');
    }
}
