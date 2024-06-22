<?php

namespace App\Http\Controllers;

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
        $Invoices = Invoice::all();
        return view('Invoice', [
            'Invoices' => $Invoices
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
        //dd($request->all());
        Invoice::validate($request->all());
        return redirect()->route('invoice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //
    {
        // $request->validate([
        //     'nama_perusahaan' => ['required'],
        //     'tanggal_deal' => ['required'],
        //     'periode_paket' => ['required'], // Removed space after 'periode_paket'
        //     'jenis_paket' => ['required'],
        //     'closing_bill' => ['required'],
        //     'pic_laporan' => ['required'],
        //     'pembayaran' => ['required'],
        //     'tanda_selesai' => ['required']
        // ]);

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
    public function show(Invoice $invoice )
    {
        dd($invoice);
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
    public function update(Invoice $invoice, Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect ('invoice');
    }
}
