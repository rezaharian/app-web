<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Menampilkan formulir untuk membuat data baru
    public function create()
    {
        return view('admin.users.create');
    }

    // Menyimpan data baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8', // Min 8 karakter untuk password
            'role' => 'required',
        ]);
    
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Hashing password
        $user->role = $request->input('role');
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }
    

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    // Menampilkan formulir untuk mengedit data
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    // Memperbarui data di dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
        ]);
    
        // Validasi password hanya diperlukan jika password baru dimasukkan
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:8|confirmed',
            ]);
        }
    
        // Ambil data pengguna dari database
        $user = User::find($id);
    
        // Perbarui data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
    
        // Perbarui password jika password baru dimasukkan
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
    

    // Menghapus data dari database
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
