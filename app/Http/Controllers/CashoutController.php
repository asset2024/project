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
        $title = 'Cash Out';
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
        $cashout = Cashout::findOrFail($id);
        $cashout->pekerjaan_id = $request->id;
        $cashout->tgl_transaksi = $request->tgl_transaksi;
        $cashout->transaksi = $request->transaksi;
        $cashout->nominal = $nominal;
        $cashout->tujuan = $request->tujuan;
        $cashout->catatan = $request->catatan;
        $cashout->status= '1';
        $cashout->save();
        
        return redirect()->route('cashout')->with('success', 'Data proyek berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashout $cashout)
    {
        //
    }
    public function nonaktif($id)
    {
   // dd($id);
        // Temukan pekerjaan berdasarkan ID
        $co = Cashout::findOrFail($id);
      //  dd($pekerjaan);
        // Ubah status pekerjaan menjadi tidak aktif
        $co->status = '2';
        $co->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Status pekerjaan berhasil diubah menjadi tidak aktif.');
    }
}
