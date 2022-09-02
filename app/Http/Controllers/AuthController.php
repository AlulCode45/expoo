<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\StudentModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        $data = [
            'listClass' => ClassModel::all()
        ];
        return view('auth.register', $data);
    }
    public function registerAction(Request $request)
    {
        $request->validate([
            'class_id'  => 'required',
            'fullname' => 'required|max:16|min:4',
            'password' => 'required|max:16|min:8',
            'email' => 'required|email|unique:students,email',
            'fullname' => 'required',
        ], [
            'class_id.required' => 'kelas wajib di isi!',
            'fullname.required' => 'fullname wajib di isi!',
            'fullname.min' => 'fullname setidaknya berisi 4 karakter!',
            'fullname.max' => 'fullname tidak boleh lebih dari 16 karakter!',
            'password.min' => 'password setidaknya berisi 4 karakter!',
            'password.max' => 'password tidak boleh lebih dari 16 karakter!',
            'email.unique' => 'email sudah terdaftar!',
            'fullname.required' => 'nama wajib di isi!',
        ]);

        $save = [
            'class_id' => $request->class_id,
            'email' => $request->email,
            'fullname' => $request->fullname,
            'password' => bcrypt($request->password),
            'fullname' => $request->fullname,
        ];
        if (StudentModel::create($save)) {
            return back()->with('success', 'Daftar sukses , silahkan login !')->withInput();
        } else {
            return back()->with('error', 'Daftar gagal , silahkan daftar ulang !');
        }
    }

    public function login()
    {
        return view('auth.login');
    }
    public function loginAction(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('student')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->to('siswa');
        } elseif (Auth::guard('teacher')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->to('guru');
        } else {
            return back()->with('error', 'Username / Password ada yang salah !');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('login')->with('success', 'Logout berhasil');
    }
}
