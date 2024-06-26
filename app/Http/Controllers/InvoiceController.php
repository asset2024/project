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
        $invoice = Invoice::with('pekerjaan')->get();
        $listPekerjaan = Pekerjaan::all();

        // $invoice = Invoice::all();
        return view('pages.admin.invoice', [
            'title' => $title,
            'invoice'=> $invoice,
            'listPekerjaan'=> $listPekerjaan
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
        var_dump($request->all());
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
            
            $inv = new Invoice();
            $inv->pekerjaan_id = $request->pekerjaan_id;
            $inv->tgl_invoice = $request->tgl_invoice;
            $inv->invoice = $request->invoice;
            $inv->detail = 'draft';
            $inv->nominal = $request->nominal;
            $inv->status = '1';
            $inv->tgl_jtempo =$request->tgl_jtempo;
            $inv->save();
        
           
            if ($inv->save()) {
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
    public function update(Request $request, $id)
    {
        
        // $request->validate([

        //     'project' => 'required',
        //     'id' => 'required',
        //     'nilai_kontrak' => 'required|numeric',
        //     'tgl_kontrak' => 'required|date',
        //     'no_kontrak' => 'required',
        //     'mulai_kontrak' => 'required|date',
        //     'selesai_kontrak' => 'required|date',
        //     'status' => 'required',
        // ]);
        
        $nominal = str_replace(',', '', $request->nominal);
        $invoices = Invoice::findOrFail($id);
        $invoices->pekerjaan_id = $request->id;
        $invoices->tgl_invoice = $request->tgl_invoice;
        $invoices->invoice = $request->invoice;
        $invoices->detail = $request->detail;
        $invoices->nominal = $nominal;
        $invoices->status = $request->status;
        $invoices->tgl_jtempo = $request->tgl_jtempo;

        $invoices->save();
        
        return redirect()->route('invoice')->with('success', 'Data proyek berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function nonaktif($id){
        $i = Invoice::findorFail($id);

        $i->status='2';
        $i->save();
        return redirect()->back()->with('success', 'Status pekerjaan berhasil diubah menjadi tidak aktif.');
    }
}
