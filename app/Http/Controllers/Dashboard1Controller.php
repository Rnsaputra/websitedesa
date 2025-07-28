<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Dashboard1Controller extends Controller
{
    public function index()
    {
        $posts = Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString();
        $user = User::all();
        return view("dashboard", compact("user","posts"))->with('title', 'Berita Desa Setren');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users|regex:/^\S*$/',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
            'is_admin' => 'nullable|boolean'
        ], [
            'username.regex' => 'username tidak boleh mengandung spasi'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect("/register")->with('success', 'User Berhasil Ditambahkan');
    }

    public function updateProfile(Request $request, $username)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'username' => 'bail|required|min:2|unique:users,username,' . $username,
            'email' => 'required|email|unique:users,email,' . $username,
            'first_name' => 'required|string|max:255',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Temukan pengguna berdasarkan username dan perbarui datanya
        $user = User::where('username', $username)->firstOrFail();
        $user->update($validatedData);

        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('user.profile', ['username' => $username])->with('success', 'Profil berhasil diperbarui.');
    }

    public function delete($username)
    {
        // Temukan pengguna berdasarkan ID dan hapus
        $user = User::where($username);
        $user->delete();

        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('dashboard')->with('success', 'User  deleted successfully.');
    }
}
