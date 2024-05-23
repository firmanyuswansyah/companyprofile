<?php

namespace App\Http\Controllers;

use App\Models\Strukturorganisasi;
use Illuminate\Http\Request;

class AdminStrukturorganisasiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Struktur Organisasi',
            'strukturorganisasi'  => Strukturorganisasi::first(),
            'content' => 'admin/about/strukturorganisasi/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $strukturorganisasi = Strukturorganisasi::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($strukturorganisasi->cover != null) {
                unlink($strukturorganisasi->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $strukturorganisasi->cover;
        }

        $strukturorganisasi->update($data);
        return redirect('/admin/about/strukturorganisasi');
    }
}
