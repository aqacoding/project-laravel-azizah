<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.data')->with([
            'mahasiswa' => Mahasiswa::all()
        ]);
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $validate = $request->validated();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->npm = $request->txtnpm;
        $mahasiswa->fullname = $request->txtfullname;
        $mahasiswa->address = $request->txtaddress;
        $mahasiswa->gender = $request->txtgender;
        $mahasiswa->phone = $request->txtphone;
        $mahasiswa->emailaddress = $request->txtemail;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('msg','Add New Mahasiswa Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
