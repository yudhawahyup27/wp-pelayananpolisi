<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = "dashboar admin";
        return view('/admin/index');
    }
}
