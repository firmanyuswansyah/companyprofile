<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\bem;
use App\Models\Blog;
use App\Models\futsal;
use App\Models\himaif;
use App\Models\himasi;
use App\Models\ldk;
use App\Models\Sejarah;
use App\Models\Service;
use App\Models\sisteminformasi;
use App\Models\Strukturorganisasi;
use App\Models\teknikinformatika;
use App\Models\Ukm;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home
    function index()
    {
    $data = [
        'ukm'  => Ukm::first(),
        'service' => Service::limit(6)->get(),
        'blog' => Blog::limit(4)->get(),
        'banner' => Banner::get(),
        'content' => 'home/home/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function visimisi()
    {
    $data = [
        'visimisi'  => Visimisi::first(),
        'content' => 'home/about/visi_dan_misi/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function strukturorganisasi()
    {
    $data = [
        'strukturorganisasi'  => Strukturorganisasi::first(),
        'content' => 'home/about/struktur_organisasi/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function sisteminformasi()
    {
    $data = [
        'sisteminformasi'  => sisteminformasi::first(),
        'content' => 'home/pendidikan/sistem_informasi/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function teknikinformatika()
    {
    $data = [
        'teknikinformatika'  => teknikinformatika::first(),
        'content' => 'home/pendidikan/teknik_informatika/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function bem()
    {
    $data = [
        'bem'  => bem::first(),
        'content' => 'home/kemahasiswaan/bem/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function ldk()
    {
    $data = [
        'ldk'  => ldk::first(),
        'content' => 'home/kemahasiswaan/ldk/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function himaif()
    {
    $data = [
        'himaif'  => himaif::first(),
        'content' => 'home/kemahasiswaan/himaif/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function himasi()
    {
    $data = [
        'himasi'  => himasi::first(),
        'content' => 'home/kemahasiswaan/himasi/index'
     ];
     return view('home.layouts.wrapper', $data);
    }
    
    function futsal()
    {
    $data = [
        'futsal'  => futsal::first(),
        'content' => 'home/kemahasiswaan/futsal/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

    function sejarah()
    {
    $data = [
        'sejarah'  => Sejarah::first(),
        'content' => 'home/sejarah/index'
     ];
     return view('home.layouts.wrapper', $data);
    }

}
