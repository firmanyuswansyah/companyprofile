<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    function index()
    {
        $data = [
            "content"=> "home/contact/index",
        ];
        return view("home.layouts.wrapper", $data);
    }



    public function send(Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
            'desc' => 'required',
        ]);
        
        Pesan::create($data);
        return redirect()->back()->with('success', 'pesan anda telah terkirim');
    }
    
    // public function send(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' =>'required',
    //         'desc' => 'required',
    //     ]);
    //     Pesan::create($data);
    //     return redirect('/contact');
    // }    
}
