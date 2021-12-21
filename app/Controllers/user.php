<?php

namespace App\Controllers;

class user extends BaseController
{
    public function index()
    {

        return view('user/index');
    }

    public function pilih()
    {

        return view('user/pilih');
    }
}
