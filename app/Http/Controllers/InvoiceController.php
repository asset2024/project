<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Invoice';
        $invoice = Invoice::with('Pekerjaan')->get();
        $listPekerjaan = Pekerjaan::all();
        
        // $invoice = Invoice::all();
        return view('pages.admin.invoice', [
            'title' => $title,
            'invoice'=> $invoice,
            'listPekerjaan' => $listPekerjaan
            
            //  'listInvoice' => $invoice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->all());
        {
            // $request->validate([
            //     'project' => 'required',
            //     'client_id' => 'required',
            //     'nilai_kontrak' => 'required|numeric',
            //     'tgl_kontrak' => 'required|date',
            //     'no_kontrak' =>  'required|numeric',
            //     'lama_pekerjaan' => 'required|numeric', 
            //     'mulai_kontrak' => 'required|date',
            //     'selesai_kontrak' => ' required|date',
            //     'status' => 'required'
            // ]);
            
            $Invoice = new Invoice();
            $Invoice->pekerjaan_id = $request->pekerjaan_id;
            $Invoice->tgl_invoice = $request->tgl_invoice;
            $Invoice->invoice = $request->invoice;
            $Invoice->detail = $request->detail;
            $Invoice->nominal = $request->nominal;            
            $Invoice->status = '1';
            $Invoice->save();
        
           
            if ($Invoice->save()) {
                return redirect()->back()->with('success', 'Data Pekerjaan berhasil disimpan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data Project.');
            }
            
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
