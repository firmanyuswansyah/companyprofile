<?php

namespace App\Http\Controllers;

use App\Models\ldk;
use Illuminate\Http\Request;

class AdminLdkController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen LDK',
            'ldk'  => ldk::first(),
            'content' => 'admin/kemahasiswaan/ldk/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $ldk = ldk::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($ldk->cover != null) {
                unlink($ldk->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $ldk->cover;
        }

        $ldk->update($data);
        return redirect('/admin/kemahasiswaan/ldk');
    }
}
