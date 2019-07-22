<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kategori extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori','kategori');
    }
 
    public function index()
    {
        $data['msg'] = $this->session->flashdata('msg');
        $data['kategoris'] = $this->kategori->get();
        $this->load->view('kategori/index', $data);
    }

    public function create()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama')
        ];
        if ($data['nama_kategori']) {
            $this->kategori->save($data);
            $this->session->set_flashdata('msg', alert('success', 'Kategori ditambahkan'));
            redirect(base_url('admin/kategori'));
        }

        $this->load->view('kategori/create');
    }

    public function edit($id)
    {
        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama')
        ];
        $msg = '';
        if ($data['id_kategori'] && $data['nama_kategori']) {
            $this->kategori->updateById($data, $id, 'id_kategori');
            $msg = alert('success', 'Edit Sukses');
        }

        $kategori = $this->kategori->getById($id, 'id_kategori');
        $this->load->view('kategori/edit', ['kategori' => $kategori, 'msg' => $msg]);
    }


    public function show($id)
    {
        $kategori = $this->kategori->getById($id, 'id_kategori');
        $this->load->view('kategori/show', ['kategori' => $kategori]);
    }

    public function delete($id)
    {
        $this->kategori->deleteById($id, 'id_kategori');
        redirect('admin/kategori');
    }

 
}