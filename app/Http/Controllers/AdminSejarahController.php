<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class AdminSejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Sejarah',
            'sejarah'  => Sejarah::first(),
            'content' => 'admin/sejarah/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    //update
    public function update(Request $request)
    {
        $sejarah = Sejarah::first();
       // dd($request->all());
       $data = $request->validate([
            'name'   => 'required',
            'desc'  => 'required',
            'cover'  => 'required',
        ]);

        //upload cover
        if ($request->hasFile('cover')) {

            if ($sejarah->cover != null) {
                unlink($sejarah->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            
            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $sejarah->cover;
        }

        $sejarah->update($data);
        return redirect('/admin/sejarah');
    }
}
