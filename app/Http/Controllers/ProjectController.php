<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Project';
        $project = Project::with('client')->get();
        $listClients = Client::all();
        // Menghitung selisih hari antara tanggal sekarang dan tanggal selesai
       

        // $project = Project::all();
        return view('pages.admin.project', [
            'title' => $title,
            'listProject' => $project,
            'listClients'=>$listClients
            
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
            
            $project = new Project();
            $project->project = $request->project;  
            $project->client_id = $request->client_id;
            $project->nilai_kontrak = $request->nilai_kontrak;
            $project->tgl_kontrak = $request->tgl_kontrak;
            $project->no_kontrak = $request->no_kontrak;
            $project->lama_pekerjaan = '';
            $project->mulai_kontrak = $request->mulai_kontrak;
            $project->selesai_kontrak = $request->selesai_kontrak;
            $project->status = '1';
            $project->save();
        
           
            if ($project->save()) {
                return redirect()->back()->with('success', 'Data Project berhasil disimpan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data Project.');
            }
            
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
