<?php

namespace App\Http\Controllers;

use App\Models\sisteminformasi;
use Illuminate\Http\Request;

class AdminSisteminformasiController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen Teknik Informasi-S1',
            'sisteminformasi'  => sisteminformasi::first(),
            'content' => 'admin/pendidikan/sisteminformasi/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $sisteminformasi = sisteminformasi::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($sisteminformasi->cover != null) {
                unlink($sisteminformasi->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $sisteminformasi->cover;
        }

        $sisteminformasi->update($data);
        return redirect('/admin/pendidikan/sisteminformasi');
    }
}
