<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //
    {
        // $request->validate([
        //     'nama_perusahaan' => ['required'],
        //     'alamat_perusahaan' => ['required'],
        //     'nomor_telp_perusahaan' => ['required'],
        //     'status' => ['required'],
        //     'paket' => ['required'],
        //     'kebutuhan_laporan' => ['required'],
        //     'masa_aktif' => ['required'],
        //     'nama_pic' => ['required'],
        //     'telp_pic' => ['required'],
        //     'alamat_pic' => ['required'],
        // ]);

        Client::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'no_telp_perusahaan' => $request->no_telp_perusahaan,
            'status' => $request->status,
            'paket' => $request->paket,
            'kebutuhan_laporan' => $request->kebutuhan_laporan,
            'masa_aktif' => $request->masa_aktif,
            'nama_pic' => $request->nama_pic,
            'telp_pic' => $request->telp_pic,
            'alamat_pic' => $request->alamat_pic,
        ]);

        return redirect('client');

        // return redirect()->route('pekerja.index')->with('success', 'Pekerja created successfully!');
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
