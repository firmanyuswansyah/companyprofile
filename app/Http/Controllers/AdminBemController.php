<?php

namespace App\Http\Controllers;

use App\Models\bem;
use Illuminate\Http\Request;

class AdminBemController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen BEM',
            'bem'  => bem::first(),
            'content' => 'admin/kemahasiswaan/bem/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $bem = bem::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($bem->cover != null) {
                unlink($bem->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $bem->cover;
        }

        $bem->update($data);
        return redirect('/admin/kemahasiswaan/bem');
    }
}
