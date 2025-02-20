<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen User',
            'user'  => User::get(),
            'content' => 'admin/user/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Akun Mahasiswa',
            'content' => 'admin/user/add'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'nim'   => 'required',
            'name'  => 'required',
            'email'=> 'required|unique:users',
            'jurusan'=> 'required',
            'semester'=> 'required',
            'password'=> 'required|min:3',
            're_password'=> 'required|same:password',
        ]);

        $data['password']   = Hash::make($data['password']);

        User::create($data);
        return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit Akun Mahasiswa',
            'user'  => User::find($id),
            'content' => 'admin/user/add'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $data = $request->validate([
            'nim'   => 'required',
            'name'  => 'required',
            'email'=> 'required|unique:users,email,' . $user->id,
            'jurusan'=> 'required',
            'semester'=> 'required',
            // 'password'=> 'min:3',
            're_password'=> 'same:password',
        ]);

        if ($request->password){
            $data['password']   = Hash::make($data['password']);
        }else{
            $data['password'] = $user->password;
        }
        $user->update($data);
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
