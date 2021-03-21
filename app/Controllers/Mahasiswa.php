<?php

namespace App\Controllers;

use App\Models\Mahasiswa_Model;

class Mahasiswa extends BaseController
{
    protected $Mahasiswa;



    var $API = "";

    function __construct()
    {
        //$this->API = "http://localhost:8081";
        $this->Mahasiswa = new Mahasiswa_Model();
    }

    public function index()
    {
        //$data['Mahasiswa'] = json_decode($this->API . '/Mahasiswa');
        $data['Mahasiswa'] = $this->Mahasiswa->findAll();
        return view('Mahasiswa/index', $data);
    }

    public function create()
    {
        return view('Mahasiswa/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'prodi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->Mahasiswa->insert([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data Berhasil');
        return redirect()->to('/Mahasiswa');
    }


    function edit($id)
    {
        $dataMahasiswa = $this->Mahasiswa->find($id);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data['Mahasiswa'] = $dataMahasiswa;
        return view('Mahasiswa/edit', $data);
    }

    function update($id)
    {
        if (!$this->validate([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'prodi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->Mahasiswa->update($id, [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Update Data Pegawai Berhasil');
        return redirect()->to('/Mahasiswa');
    }

    function delete($id)
    {
        $dataMahasiswa = $this->Mahasiswa->find($id);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->Mahasiswa->delete($id);
        session()->setFlashdata('message', 'Data Berhasil Dihapus');
        return redirect()->to('/Mahasiswa');
    }
}
