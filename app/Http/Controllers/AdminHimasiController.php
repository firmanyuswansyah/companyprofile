<?php

namespace App\Http\Controllers;

use App\Models\himasi;
use Illuminate\Http\Request;

class AdminHimasiController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen Hima-SI',
            'himasi'  => himasi::first(),
            'content' => 'admin/kemahasiswaan/himasi/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $himasi = himasi::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($himasi->cover != null) {
                unlink($himasi->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $himasi->cover;
        }

        $himasi->update($data);
        return redirect('/admin/kemahasiswaan/himasi');
    }
}
