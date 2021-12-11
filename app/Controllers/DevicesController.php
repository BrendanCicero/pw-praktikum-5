<?php

namespace App\Controllers;

use App\Models\DevicesModel;

class DevicesController extends BaseController
{
    protected $DevicesModel;
    public function __construct()
    {
        $this->DevicesModel = new DevicesModel();
    }


    public function index()
    {
        $devices = $this->DevicesModel->findAll();

        $data = [
            'judul' => 'IoT | Device',
            'devices' => $devices
        ];

        return view('pages/devices', $data);
    }
}
