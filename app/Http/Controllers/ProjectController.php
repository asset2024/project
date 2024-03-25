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
            'listClients' => $listClients

        ]);
    }

    public function detail()
    {
        $title = 'Detail Proyek';

        return view('pages.admin.detail-project', [
            'title' => $title,

        ]);
    }

    public function detail2()
    {
        $title = 'Detail Proyek';

        return view('pages.admin.detail-project2', [
            'title' => $title,

        ]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // dd($request);
        var_dump($request->all()); {
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

            $nilai_kontrak = str_replace(',', '', $request->nilai_kontrak);
            $project = new Project();
            $project->project = $request->project;
            $project->lokasi = $request->lokasi;

            $project->client_id = $request->id;
            $project->nilai_kontrak = $nilai_kontrak;

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


    public function show($id) {
        
        $project = Project::with('client')->get();      
        return view('pages.admin.detail-project', compact('project'));
    }


    public function edit()
    {
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
        $nilai_kontrak = str_replace(',', '', $request->nilai_kontrak);
        $project = Project::findOrFail($id);
        $project->project = $request->project;
        $project->lokasi = $request->lokasi;
        $project->client_id = $request->id_client;
        $project->nilai_kontrak = $nilai_kontrak;
        $project->tgl_kontrak = $request->tgl_kontrak;
        $project->no_kontrak = $request->no_kontrak;
        $project->mulai_kontrak = $request->mulai_kontrak;
        $project->selesai_kontrak = $request->selesai_kontrak;
        $project->status = $request->status;
        $project->save();

        return redirect()->route('project')->with('success', 'Data proyek berhasil diperbarui.');
    }


    public function destroy(Project $project)
    {
        //
    }
}
