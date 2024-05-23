<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Kategori',
            'kategori'  => Kategori::get(),
            'content' => 'admin/kategori/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori',
            'content' => 'admin/kategori/add'
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
            'name'   => 'required',
            // 'icon'   => 'required',
            // 'desc'   => 'required',
        ]);

        kategori::create($data);
        return redirect('/admin/posts/kategori');
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
            'kategori'  => Kategori::find($id),
            'content' => 'admin/kategori/add'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $kategori = Kategori::find($id);
        $data = $request->validate([
            'name'   => 'required',
            // 'icon'   => 'required',
            // 'desc'   => 'required',
        ]);
        $kategori->update($data);
        return redirect('/admin/posts/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/admin/posts/kategori');
    }
}
