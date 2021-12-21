<?php


namespace App\Controllers;


use App\Models\mskck;

class skck extends BaseController
{
    protected $mskck;

    public function __construct()
    {
        $this->mskck = new mskck();
    }
    public function index()
    {

        return view('skck/index');
    }

    public function lihat()
    {
        $sempak = array(
            'skck' => $this->mskck->findAll(),
        );

        return view('skck/lihat', $sempak);
    }

    public function delete($id)
    {
        $this->mskck->delete($id);
        return redirect()->to('/skck/lihat/');
    }


    public function create()
    {

        $data = [
            'title' => 'Daftar',

        ];

        return view('skck/index', $data);
    }

    public function save()
    {
        $this->mskck->save([

            'nama_d' => $this->request->getVar('nama_d'),
            'nama_b' => $this->request->getVar('nama_b'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Di tambahkan');
        return redirect()->to('/skck/index');
    }
    public function ubah($nama_d)
    {
        $data = [

            'skck' => $this->mskck->getskck($nama_d)
        ];

        return view('skck/ubah', $data);
    }
    public function update($id)
    {
        $this->mskck->save([
            'id' => $id,
            'nama_d' => $this->request->getVar('nama_d'),
            'nama_b' => $this->request->getVar('nama_b'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),

        ]);
    }
}
