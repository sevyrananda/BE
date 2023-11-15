<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $data = $userModel->findAll();

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
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $userModel = new UserModel();
        $userModel->save($data);

        $response = [
            'status' => '200',
            'message' => 'Data berhasil ditambahkan',
            'data' => $data,
        ];
    }
}