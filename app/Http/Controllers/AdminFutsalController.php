<?php

namespace App\Http\Controllers;

use App\Models\futsal;
use Illuminate\Http\Request;

class AdminFutsalController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen Futsal',
            'futsal'  => futsal::first(),
            'content' => 'admin/kemahasiswaan/futsal/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $futsal = futsal::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($futsal->cover != null) {
                unlink($futsal->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $futsal->cover;
        }

        $futsal->update($data);
        return redirect('/admin/kemahasiswaan/futsal');
    }
}
