<?php

namespace App\Controllers;
use App\Models\M_buku;
use App\Models\M_kategori;
use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function __construct()
    {
        $this->buku = new M_buku();
        $this->kategori = new M_kategori();
    }

    public function index()
    {
        $buku = $this->buku->join('kategori', 'buku.id_kategori = kategori.id_kategori')->get()->getResultArray();
        $data = [
            'title' => 'Data Buku',
            'buku' => $buku
        ];
        return view('buku/v_user', $data);
    }
    public function save(){
    	$data = [
    		'gambar_sampul' =>$this->updload('gambar_sampul'),
            'judul' =>$this->request->getPost('judul'),
            'pengarang' =>$this->request->getPost('pengarang'),
    		'penerbit' =>$this->request->getPost('penerbit'),
    		'id_kategori' =>(int)$this->request->getPost('id_kategori')
		];
		$this->buku->save($data);
        return redirect()->to('buku');
    }
	public function edit($id){
		$buku=$this->buku->find($id);
		$data=[
			'title'=>'Edit Buku',
            'buku'=>$buku,
            'link'=>site_url('buku/save_edit/'.$id),
            'kategori'=>$this->kategori->get()->getResult()
		];
		return view('buku/Edit',$data);
	}
	public function save_edit($id){
        $data=[];
        if($this->request->getFiles('gambar_sampul')){
            $data = [
                'gambar_sampul' =>$this->updload('gambar_sampul'),
                'judul' =>$this->request->getPost('judul'),
                'pengarang' =>$this->request->getPost('pengarang'),
                'penerbit' =>$this->request->getPost('penerbit'),
                'id_kategori' =>$this->request->getPost('id_kategori')
            ];
        }else{
            $data = [
                'judul' =>$this->request->getPost('judul'),
                'pengarang' =>$this->request->getPost('pengarang'),
                'penerbit' =>$this->request->getPost('penerbit'),
                'id_kategori' =>$this->request->getPost('id_kategori')
            ];
        }
		$this->buku->update($id,$data);
		return redirect()->to('buku');
	}
	public function hapus($id){
		$this->buku->delete($id);
		return redirect()->to('buku');
	}
    public function tambah(){
        $data=[
            'title'=>'Tambah Buku',
            'link'=>site_url('buku/save'),
            'kategori'=>$this->kategori->get()->getResult(),
        ];
        return view('buku/edit',$data);
    }
    private function updload($file){
            $file = $this->request->getFile($file);
            $newName = $file->getName();
            $file->move(ROOTPATH.'public/uploads/', $newName);
            return $newName;
    }
    public function cetak($id){
        $buku=$this->buku->find($id);
		$data=[
			'title'=>'Print Buku',
            'buku'=>$buku
		];
		return view('buku/print',$data);
	}
    }

    
