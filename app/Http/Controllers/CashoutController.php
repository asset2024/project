<?php

namespace App\Http\Controllers;

use App\Models\Cashout;
use App\Models\Pekerjaan;

use Illuminate\Http\Request;

class CashoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Cashins';
        $cashout = Cashout::with('pekerjaan')->get();
        $listPekerjaan = Pekerjaan::all();

        // $Pekerjaan = Pekerjaan::all();
        return view('pages.admin.cashout', [
            'title' => $title,
            'cashout' => $cashout,
            'listPekerjaan'=>$listPekerjaan
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
            
            $Cashout = new Cashout();
            $Cashout->pekerjaan_id = $request->pekerjaan_id;
            $Cashout->tgl_transaksi = $request->tgl_transaksi;
            $Cashout->transaksi = $request->transaksi;
            $Cashout->nominal = $request->nominal;
            $Cashout->tujuan = $request->tujuan;
            $Cashout->catatan = $request->catatan;
            $Cashout->status = '1';
            $Cashout->save();
        
           
            if ($Cashout->save()) {
                return redirect()->back()->with('success', 'Data Pekerjaan berhasil disimpan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data Project.');
            }
            
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashout $cashout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashout $cashout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cashout $cashout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashout $cashout)
    {
        //
    }
}
