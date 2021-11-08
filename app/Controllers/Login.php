<?php namespace App\Controllers;

use App\Models\M_user;

class Login extends BaseController
{
	public function index()
	{
		return view('admin/user_form');
   }
   
   public function login_action() 
   {
      $muser = new M_user();

      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($username, $password);

      if (($cek['username'] == $username) && ($cek['password'] == $password))
      {
         session()->set('username', $cek['username']);
         session()->set('password', $cek['password']);
         session()->set('id_user', $cek['id_user']);
         return redirect()->to(base_url('User'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('Login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('Login'));
   }

	//--------------------------------------------------------------------

}