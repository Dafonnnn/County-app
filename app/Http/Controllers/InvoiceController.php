<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Pekerja;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view('Invoice', [
            'invoice' => $invoice
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forminvoice');
    }

    public function insertdata(Request $request){
        Invoice::create([
            "nama_client" => $request->nama_client,
            "tanggal_deal" => $request->tanggal_deal,
            "periode_paket" => $request->periode_paket,
            "jenis_paket" => $request->jenis_paket,
            "closing_bill" => $request->closing_bill,
            "pic_laporan" => $request->pic_laporan,
            "pembayaran" => $request->pembayaran,
            "tanda_selesai" => $request->tanda_selesai
        ]);

        return redirect()->route('invoice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //
    {

        invoice::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'tanggal_deal' => $request->tanggal_deal,
            'periode_paket' => $request->periode_paket, // Removed space after 'periode_paket'
            'jenis_paket' => $request->jenis_paket,
            'closing_bill' => $request->closing_bill,
            'pic_laporan' => $request->pic_laporan,
            'pembayaran' => $request->pembayaran,
            'tanda_selesai' => $request->tanda_selesai
        ]);

        print_r("test");
        exit;

        // return redirect()->route('pekerja.index')->with('success', 'Pekerja created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id )
    {
        $invoice = Invoice::find($id);

        return view("formeditinvoice", [
            "invoice" => $invoice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice )
    {
        dd($invoice);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $invoice = Invoice::find($id);

        $invoice->update([
            "nama_client" => $request->nama_client,
            "tanggal_deal" => $request->tanggal_deal,
            "periode_paket" => $request->periode_paket,
            "jenis_paket" => $request->jenis_paket,
            "closing_bill" => $request->closing_bill,
            "pic_laporan" => $request->pic_laporan,
            "pembayaran" => $request->pembayaran,
            "tanda_selesai" => $request->tanda_selesai
        ]);

        return redirect()->route('invoice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Invoice::find($id)->delete();
        return redirect ('invoice');
    }
}
