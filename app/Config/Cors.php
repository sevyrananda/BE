<?php

namespace Config;

class Cors
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: *");
        header("Access-Control-Allow-Credentials: true");
    }
}
