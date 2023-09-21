<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		if ($this->session->userdata('status') != 'login') {
            redirect('admin/login');
        } else {
            $data['pemilih'] = $this->db->get('pemilih')->result();
            $this->load->view('admin/pemilih/index', $data);
        };
	}

    public function tambah()
    {
        $this->load->view('admin/pemilih/tambah');
    }

    public function simpan()
    {
        $nama_pemilih = $this->input->post('nama');
        $kelamin = $this->input->post('kelamin');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $id = $this->input->post('kode');
            $data = array(
                'nama_pemilih' => $nama_pemilih,
                'jenkel_pemilih' => $kelamin,
                'username' => $username,
                'password' => $password,
            );
            $this->db->insert('pemilih', $data);
            $this->session->set_flashdata('success','Berhasil Disimpan');
            redirect('admin/pemilih');
    }

    public function ubah($id)
    {
        $data['cari'] = $this->db->get_where('pemilih',array('id_pemilih' => $id))->result();
        $this->load->view('admin/pemilih/ubah', $data);
    }

    public function subah()
    {
        $nama_pemilih = $this->input->post('nama');
        $kelamin = $this->input->post('kelamin');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $id = $this->input->post('kode');
        if ($password == '') {
            $data = array(
                'nama_pemilih' => $nama_pemilih,
                'jenkel_pemilih' => $kelamin,
                'username' => $username,
            );
        } else {
            $data = array(
                'nama_pemilih' => $nama_pemilih,
                'jenkel_pemilih' => $kelamin,
                'username' => $username,
                'password' => $password,
            );
        }

    $this->db->where('id_pemilih', $id);
    $this->db->update('pemilih', $data);
    $this->session->set_flashdata('success','Berhasil Disimpan');
    redirect('admin/pemilih');
}


    public function hapus($id)
    {
        $this->db->where(array('id_pemilih' => $id));
        $this->db->delete('pemilih');
        $this->session->set_flashdata('success','berhasil dihapus');
        redirect('admin/pemilih');
    }
}
