<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pekerjas = Pekerja::all();
        return view('pekerja', [
            'pekerjas' => $pekerjas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formpekerja');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store() //
    {
        request()->validate([
            'id' => ['required'],
            'nama_pekerja' => ['required'],
            'no_telp_pekerja' => ['required'],
            'status' => ['required'],
            'alamat_pekerja' => ['required'],
            'id_invoice' => ['required'],
            'tugas' => ['required'],
            'deadline' => ['required'],
            'tugas_selesai' => ['required']
        ]);

        Pekerja::create([
            'id'=>request('id'),
            'nama_pekerja'=>request('nama_pekerja'),
            'no_telp_pekerja'=>request('no_telp_pekerja'),
            'status'=>request('status'),
            'alamat_pekerja'=>request('alamat_pekerja'),
            'id_invoice'=>request('id_invoice'),
            'tugas'=>request('tugas'),
            'deadline'=>request('deadline'),
            'tugas_selesai'=>request('tugas_selesai')
        ]);
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
