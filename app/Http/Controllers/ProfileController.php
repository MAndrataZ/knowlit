<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('profile', ["title" => "Profile", "user" => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Cek apakah instance dari User benar
        if (!$user instanceof \App\Models\User) {
            return back()->withErrors(['error' => 'User model not found.']);
        }

        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        ]);

        $user->update([
            'username' => $request->username,
        ]);

        return redirect()->route('profile')->with('success', 'Profil Berhasil Di Update!');
    }

    public function updatePassword(Request $request)
    {
        // Pastikan user login sudah benar
        $user = Auth::user(); 

        if (!$user instanceof User) {
            return back()->withErrors(['error' => 'User tidak ditemukan.']);
        }

        // Validasi input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Periksa apakah password lama benar
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai.']);
        }

        // Update password dengan save() agar tidak perlu fillable
        $user->password = $request->new_password; // Otomatis di-hash oleh mutator
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui.');
    }


}

