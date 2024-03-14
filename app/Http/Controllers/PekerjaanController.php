<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Project;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pekerjaans';
        $Pekerjaan = Pekerjaan::with('project')->get();
        $listProject = Project::all();

        // $Pekerjaan = Pekerjaan::all();
        return view('pages.admin.Pekerjaan', [
            'title' => $title,
            'listPekerjaan' => $Pekerjaan,
            'listProject'=>$listProject
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
            
            $Pekerjaan = new Pekerjaan();
            $Pekerjaan->pekerjaan = $request->pekerjaan;
            $Pekerjaan->project_id = $request->project_id;
            $Pekerjaan->no_spk = $request->no_spk;
            $Pekerjaan->nilai_pekerjaan = $request->nilai_pekerjaan;
            $Pekerjaan->mulai_pekerjaan= $request->mulai_pekerjaan;
            $Pekerjaan->selesai_pekerjaan = $request->selesai_pekerjaan;
            $Pekerjaan->progres = $request->progres;
            $Pekerjaan->status = '1';
            $Pekerjaan->save();
        
           
            if ($Pekerjaan->save()) {
                return redirect()->back()->with('success', 'Data Pekerjaan berhasil disimpan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data Project.');
            }
            
        } 
    }
    /**
     * Display the specified resource.
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        //
    }
}
