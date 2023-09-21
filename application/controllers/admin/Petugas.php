<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

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
            $data['admin'] = $this->db->get('admin')->result();
            $this->load->view('admin/petugas/index', $data);
        };
	}

    public function tambah()
    {
        $this->load->view('admin/petugas/tambah');
    }

    public function simpan()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data = array(
            'nama_admin' => $nama,
            'username' => $username,
            'password' => $password
        );
        $this->db->insert('admin', $data);
        $this->session->set_flashdata('success','Berhasil Disimpan');
        redirect('admin/petugas');
    }

    public function ubah($id)
    {
        $data['cari'] = $this->db->get_where('admin',array('id_admin' => $id))->result();
        $this->load->view('admin/petugas/ubah', $data);
    }

    public function subah()
    {
        $id = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        if ($password == "") {
            $data = array(
                'nama_admin' => $nama,
                'username' => $username
            );
        } else {
            $data = array(
                'nama_admin' => $nama,
                'username' => $username,
                'password' => $password
            );
        }

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
        $this->session->set_flashdata('success','Berhasil Disimpan');
        redirect('admin/petugas');
    }

    public function hapus($id)
    {
        $this->db->where(array('id_admin' => $id));
        $this->db->delete('admin');
        $this->session->set_flashdata('success','berhasil disimpan');
        redirect('admin/petugas');
    }

    public function report()
    {
        if ($this->session->userdata('status') != 'login') {
            redirect('admin/login');
        } else {
            $data['admin'] = $this->db->get('admin')->result();
            $this->load->view('admin/petugas/report', $data);
        };
    }
    public function cetak()
    {
        if ($this->session->userdata('status') != 'login') {
            redirect('admin/login');
        } else {
            $data['admin'] = $this->db->get('admin')->result();
            $this->load->view('admin/petugas/cetak', $data);
        };
    }
}
