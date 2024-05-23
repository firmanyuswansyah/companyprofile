<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Manajemen Service',
            'service'  => Service::get(),
            'content' => 'admin/service/index'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Service',
            'content' => 'admin/service/add'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'title'   => 'required',
            'icon'   => 'required',
            'desc'   => 'required',
        ]);

        Service::create($data);
        return redirect('/admin/service');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit Service',
            'service'  => Service::find($id),
            'content' => 'admin/service/add'
        ];
        return view("admin.layouts.wrapper", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $service = Service::find($id);
        $data = $request->validate([
            'title'   => 'required',
            'icon'   => 'required',
            'desc'   => 'required',
        ]);
        $service->update($data);
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete
        $service = Service::find($id);
        $service->delete();
        return redirect('/admin/service');
    }
}

