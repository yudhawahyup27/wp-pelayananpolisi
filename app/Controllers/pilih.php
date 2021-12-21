<?php

namespace App\Controllers;

class pilih extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Skck | online'
        ];
        return view('/pilih/index');
    }
}
