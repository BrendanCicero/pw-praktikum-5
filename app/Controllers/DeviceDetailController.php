<?php

namespace App\Controllers;

use App\Models\DevicesDetailModel;
use App\Models\DevicesModel;

class DeviceDetailController extends BaseController
{
    protected $DevicesDetailModel;
    public function __construct()
    {
        $this->DevicesDetailModel = new DevicesDetailModel();
        $this->DevicesModel = new DevicesModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'IoT | Device Detail'
        ];

        return view('pages/devices_detail', $data);
    }

    public function detail($slug)
    {

        $data = [
            'judul' => 'IoT | Device',
            'devices' => $this->DevicesModel->getDetail($slug),
            'detail' => $this->DevicesDetailModel->findAll()
        ];

        return view('pages/devices_detail', $data);
    }
}
