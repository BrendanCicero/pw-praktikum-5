<?php

namespace App\Models;

use CodeIgniter\Model;

class DevicesModel extends Model
{
    protected $table = 'devices';

    public function getDetail($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
