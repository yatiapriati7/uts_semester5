<?php

namespace App\Controllers;
use App\Models\M_user;
class User extends BaseController
{
   public function index()
   {
      if (session()->get('username') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }
      return view('admin/user_view');
   }
   public function v_buku(){
       return view('buku/v_user');
   }

   //--------------------------------------------------------------------

}