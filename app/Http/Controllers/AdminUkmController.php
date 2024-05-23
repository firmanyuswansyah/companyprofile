<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;

class AdminUkmController extends Controller
{
    //Index
    public function index()
    {
        $data = [
            'title' => 'Manajemen Tentang Halaman Home',
            'ukm'  => Ukm::first(),
            'content' => 'admin/ukm/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $ukm = Ukm::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($ukm->cover != null) {
                unlink($ukm->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $ukm->cover;
        }

        $ukm->update($data);
        return redirect('/admin/ukm');
    }
}
