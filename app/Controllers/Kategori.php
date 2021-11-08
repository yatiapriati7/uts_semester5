<?php

namespace App\Controllers;
use App\Models\M_kategori;
use App\Controllers\BaseController;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->kategori = new M_kategori();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kategori',
            'kategori' => $this->kategori->findAll()
        ];
        return view('kategori/v_user', $data);
    }
    public function save(){
    	$data = [
            'kategori' =>$this->request->getPost('kategori'),
            'diskripsi' =>$this->request->getPost('diskripsi'),
		];
		$this->kategori->save($data);
        return redirect()->to('kategori');
    }
	public function edit($id){
		$data=[
			'title'=>'Edit Kategori',
            'kategori'=>$this->kategori->find($id),
            'link'=>site_url('kategori/save_edit/'.$id),
		];
		return view('kategori/form',$data);
	}
	public function save_edit($id){
        
            $data = [
                'kategori' =>$this->request->getPost('kategori'),
                'diskripsi' =>$this->request->getPost('diskripsi'),
            ];
        
		$this->kategori->update($id,$data);
		return redirect()->to('kategori');
	}
	public function hapus($id){
		$this->kategori->delete($id);
		return redirect()->to('kategori');
	}
    public function tambah(){
        $data=[
            'title'=>'Tambah Kategori',
            'link'=>site_url('kategori/save'),
        ];
        return view('kategori/form',$data);
    }
}
