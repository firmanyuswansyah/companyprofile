<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class AdminVisimisiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Visi dan Misi',
            'visimisi'  => Visimisi::first(),
            'content' => 'admin/about/visimisi/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $visimisi = Visimisi::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($visimisi->cover != null) {
                unlink($visimisi->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $visimisi->cover;
        }

        $visimisi->update($data);
        return redirect('/admin/about/visimisi');
    }
}
