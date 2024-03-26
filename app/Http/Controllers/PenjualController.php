<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

     public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function inputRegister(Request $request)
    {
        // testing hasil input
        // dd($request->all());
        // validasi atau aturan value column pada db
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        // tambah data ke db bagian table users
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        // apabila berhasil, bkl diarahin ke hlmn login dengan pesan success
        return redirect('/register')->with('successs', 'berhasil membuat akun!');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin')->with('success', "Login Berhasil admin!");
        }elseIf(Auth::user()->role == 'petugas'){
            return redirect()->route('data.petugas');
        }
            return redirect()->route('data');
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        } 
        

    }

      public function logout()
    { 
        Auth::logout();
        return redirect('/login');
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(Penjual $penjual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjual $penjual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjual $penjual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
    {
        
    }
}