<?php

namespace App\Http\Controllers;

use App\Models\himaif;
use Illuminate\Http\Request;

class AdminHimaifController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen Hima-IF',
            'himaif'  => himaif::first(),
            'content' => 'admin/kemahasiswaan/himaif/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $himaif = himaif::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($himaif->cover != null) {
                unlink($himaif->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $himaif->cover;
        }

        $himaif->update($data);
        return redirect('/admin/kemahasiswaan/himaif');
    }
}
