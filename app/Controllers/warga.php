<?php

namespace App\Controllers;

class warga extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Skck | online'
        ];
        return view('/warga/index');
    }
}
