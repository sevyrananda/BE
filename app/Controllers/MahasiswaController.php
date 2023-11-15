<?php

namespace App\Controllers;

use App\Database\Migrations\Mahasiswa;
use App\Models\MahasiswaModel;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        $mahasiswaModel = new \App\Models\MahasiswaModel();
        $data = $mahasiswaModel->findAll();

        if (!empty($data)) {
            $response = [
                'status' => 'success',
                'message' => 'Data retrieved successfully',
                'data' => $data
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'No data found',
                'data' => []
            ];
        }

        return $this->respond($response);
    }

    public function create()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->save($data);

        $response = [
            'status' => '200',
            'message' => 'Data berhasil ditambahkan',
            'data' => $data,
        ];
    }
}
