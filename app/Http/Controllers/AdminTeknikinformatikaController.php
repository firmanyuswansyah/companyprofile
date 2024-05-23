<?php

namespace App\Http\Controllers;

use App\Models\Teknikinformatika;
use Illuminate\Http\Request;

class AdminTeknikinformatikaController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Manajemen Teknik Informatika-S1',
            'teknikinformatika'  => Teknikinformatika::first(),
            'content' => 'admin/pendidikan/teknikinformatika/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $teknikinformatika = Teknikinformatika::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            // 'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($teknikinformatika->cover != null) {
                unlink($teknikinformatika->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $teknikinformatika->cover;
        }

        $teknikinformatika->update($data);
        return redirect('/admin/pendidikan/teknikinformatika');
    }
}
