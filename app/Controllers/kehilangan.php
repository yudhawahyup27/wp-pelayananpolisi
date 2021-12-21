<?php


namespace App\Controllers;


use App\Models\modelhilang;

class kehilangan extends BaseController
{
    protected $modelhilang;

    public function __construct()
    {
        $this->modelhilang = new modelhilang();
    }
    public function index()
    {

        return view('kehilangan/index');
    }

    public function lihat()
    {
        $sempak2 = array(
            'kehilangan' => $this->modelhilang->findAll(),
        );

        return view('kehilangan/lihat', $sempak2);
    }

    public function delete($id)
    {
        $this->modelhilang->delete($id);
        return redirect()->to('/kehilangan/lihat/');
    }


    public function create()
    {

        $data = [
            'title' => 'Daftar',

        ];

        return view('kehilangan/index', $data);
    }

    public function save()
    {
        $this->modelhilang->save([

            'nama_pel' => $this->request->getVar('nama_pel'),
            'kasus' => $this->request->getVar('kasus'),
            'alamat' => $this->request->getVar('alamat'),

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Di tambahkan');
        return redirect()->to('/kehilangan/index');
    }
    public function ubah($nama_pel)
    {
        $data = [

            'kehilangan' => $this->modelhilang->getkehilangan($nama_pel)
        ];

        return view('kehilangan/ubah', $data);
    }
    public function update($id)
    {
        $this->modelhilang->save([
            'id' => $id,
            'nama_pel' => $this->request->getVar('nama_pel'),
            'kasus' => $this->request->getVar('kasus'),
            'alamat' => $this->request->getVar('alamat'),

        ]);
    }
}
