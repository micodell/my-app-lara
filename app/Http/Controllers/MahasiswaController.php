<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index')->with('mahasiswa',$mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $route = 'mahasiswa.register';

        $mahasiswa->name = $request->name;
        $mahasiswa->email = $request->email;
        $mahasiswa->birthdate = $request->birthdate;
        $mahasiswa->no_ktp = $request->no_ktp;
        $mahasiswa->school_name = $request->school_name;
        $mahasiswa->gpa = $request->gpa;
        $mahasiswa->save();

        return redirect()->route($route);
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
