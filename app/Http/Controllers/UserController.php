<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        $site = Site::first();
        return view('admin.user.index', compact('users', 'site'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user, $id)
    {
        $user = User::find($id);
        $site = Site::first();
        return view('admin.user.edit', compact('user', 'site'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $pengguna = User::find($id);
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->role = $request->role;
        $pengguna->phone = $request->phone;
        $pengguna->bio = $request->bio;
        $pengguna->save();

        return to_route('pengguna.index')->withToastSuccess('Berhasil mengubah data pengguna');
    }

    public function destroy($id)
    {
        $pengguna = User::find($id);
        $pengguna->delete();

        return to_route('pengguna.index')->withToastSuccess('Berhasil menghapus data pengguna');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120|dimensions:max_width=512,max_height=512',
        ]);

        $user = auth()->user();
        $oldImagePath = $user->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $format = $file->getClientOriginalExtension();
            $random = Str::random(4);
            $filename = 'IMG_' . $random . '_' . $user->name . '.' . $format;

            $file->move(public_path('assets/avatar'), $filename);

            $user->image = $filename;
            $user->save();

            if ($oldImagePath !== 'default.png') {
                if (file_exists(public_path('assets/avatar/' . $oldImagePath))) {
                    unlink(public_path('assets/avatar/' . $oldImagePath));
                }
            }
        }

        return back()->withToastSuccess('Berhasil mengubah foto profil');
    }
}
