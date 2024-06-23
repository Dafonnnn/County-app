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
        $client_aktif = Client::where('status', 'aktif')->count();
        $paket_gold = Client::where('paket', 'gold')->count();
        $paket_silver = Client::where('paket', 'silver')->count();
        $paket_bronze = Client::where('paket', 'bronze')->count();
        $paket_itbss = Client::where('paket', 'itbss')->count();
        $clients = Client::all();
        return view('index', [
            'clients' => $clients,
            'client_aktif' => $client_aktif,
            'paket_gold' => $paket_gold,
            'paket_silver' => $paket_silver,
            'paket_bronze' => $paket_bronze,
            'paket_itbss' => $paket_itbss
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
    public function edit(Client $client)
    {
        return view('formeditclient', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Client $client, Request $request)
    {
        $client->update([
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('client');
    }
}
