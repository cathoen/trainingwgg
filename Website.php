<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasukModel;

class Website extends BaseController
{
    private $model;

    public function __construct() 
    {
        $this->model = new MasukModel;
    }

    public function index()
    {
        $data['title'] = 'Training IT WGG';
        $data['data_kelas'] = $this->model->tampilan_data();

        return view('kelas/tambahadmin', $data);
    }

    public function tambah() 
    {
        $data['title'] = 'Tambah Admin';
        $data['data_admin'] = $this->model->tampilan_data();

        if ($this->request->getPost('submit_tambah') == 'ya')
        {
            $validasi = [
                'username' => [
                    'rules' => 'min_length[5]|is_unique[admin.username]',
                    'errors' => [
                        'min_length' => 'Username minimal 5 karakter!',
                        'is_unique' => 'Username telah digunakan!'
                    ]
                ],
                'password' => [
                    'rules' => 'min_length[5]|max_length[15]',
                    'errors' => [
                        'min_length' => 'Password minimal 5 karakter',
                        'max_length' => 'Password maksimal 15 karakter'
                    ]
                ],
                'retype' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Masukkan sesuai password yang telah dimasukkan di atas'
                    ]
                ],
            ];

            $error = false;
            $error_val = [];

            if (!$this->validate($validasi))
            {
                $error = true;
                $error_val = $this->validator->getErrors();
            }

            if ($error) 
            {
                return redirect()
                    ->to(site_url('tambah'))
                    ->with('error_val', $error_val)
                    ->withInput();
            }

            $this->model->tambah_data([
                'Username' => $this->request->getVar('username'),
                'Password' => $this->request->getVar('password')
            ]);

            if ($this->model->db->affectedRows() > 0)
                return redirect()
                    ->to(site_url('tambah'))
                    ->with('msg_success', 'Data berhasil ditambahkan');            

            return redirect()
                ->to(site_url('tambah'))
                ->with('msg_error', 'Data gagal ditambahkan');
        }

        return view('kelas/tambahadmin', $data);
    }
}
