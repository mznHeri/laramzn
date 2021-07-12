<?php
  
namespace App\Http\Controllers;
use App\Http\Controllers\AdminController\ExtendbController;  
use Illuminate\Http\Request;
use App\Models\Config;  
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
  
  
class AuthController extends ExtendbController
{

    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('dashboard');
        }
        return view('admin.login', array(
            'loginname' => $this->loginname,
        ));
    }
  
    public function login(Request $request)
    {

        $rules = [
            'identity' => 'required|string',
            'password' => 'required|string',
            'active'    => '1',
        ];
  
        $messages = [
            'identity.required' => 'Username or email is required',
            'password.required' => 'Password is required',
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        
        

        $identity  = $request->input('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        

        $data = [
            "$fieldName"    => $request->input('identity'),
            'password'      => $request->input('password'),
        ];
  
        Auth::attempt($data);
  
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('dashboard');
  
        } else { // false
  
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route($this->loginname);
        }
  
    }
  
    public function showFormRegister()
    {
        return view('register');
    }
  
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
  
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route($this->LoginName);
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }
  
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('home');
    }
  
  
}