<?php

namespace App\Http\Controllers;

use App\Models\Cashin;
use App\Models\Pekerjaan;

use Illuminate\Http\Request;

class CashinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Cash In';
        $cashin = Cashin::with('pekerjaan')->get();
        $listPekerjaan = Pekerjaan::all();

        // $Pekerjaan = Pekerjaan::all();
        return view('pages.admin.cashin', [
            'title' => $title,
            'cashin' => $cashin,
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
            
            $Cashin = new Cashin();
            $Cashin->pekerjaan_id = $request->pekerjaan_id;
            $Cashin->tgl_transaksi = $request->tgl_transaksi;
            $Cashin->transaksi = $request->transaksi;
            $Cashin->nominal = $request->nominal;
            $Cashin->dari = $request->dari;
            $Cashin->catatan = $request->catatan;
            $Cashin->status = '1';
            $Cashin->save();
        
           
            if ($Cashin->save()) {
                return redirect()->back()->with('success', 'Data Pekerjaan berhasil disimpan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data Project.');
            }
            
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashin $cashin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashin $cashin)
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
        $cashins = Cashin::findOrFail($id);
        $cashins->pekerjaan_id = $request->id;
        $cashins->tgl_transaksi = $request->tgl_transaksi;
        $cashins->transaksi = $request->transaksi;
        $cashins->nominal = $nominal;
        $cashins->dari = $request->dari;
        $cashins->catatan = $request->catatan;
        $cashins->status = $request->status;
        $cashins->save();
        
        return redirect()->route('cashin')->with('success', 'Data proyek berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashin $cashin)
    {
        //
    }
}
