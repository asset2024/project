<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\Cashin;
use App\Models\Pekerjaan;
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

    public function detail($id)
    {
        $title = 'Detail Proyek';
        $project = Project::with('client')->findOrFail($id);
        $data = [
            'listProject' => $project,
            'title' => $title,
        ];
        return view('pages.admin.detail-project', $data);
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
        $proj = Project::find($id)->project;   
        $lokasi = Project::find($id)->lokasi;
        $nilai_kontrak = Project::find($id)->nilai_kontrak;
        $nilai_pekerjaan = Pekerjaan::find($id)->nilai_pekerjaan;
        $no_kontrak = Project::find($id)->no_kontrak;
        $mulai_pekerjaan = Pekerjaan::find($id)->mulai_pekerjaan;
        $selesai_pekerjaan = Pekerjaan::find($id)->selesai_pekerjaan;
        $mulai_kontrak = Project::find($id)->mulai_kontrak;
        $selesai_kontrak = Project::find($id)->selesai_kontrak;
        $lama_pekerjaan = Project::find($id)->lama_pekerjaan;
        $totalcashin = Cashin::where('pekerjaan_id', $id)
                     ->where('status', 1)
                     ->sum('nominal');
        $prog = Pekerjaan::find($id)->progres;
        $termin_inv = Pekerjaan::find($id)->termin_inv;
        $kerjaan = Pekerjaan::find($id)->pekerjaan;
        $no_k = Project::find($id)->no_kontrak;
        $no_spk = Pekerjaan::find($id)->no_spk;


        return view('pages.admin.detail-project', compact('prog','termin_inv','mulai_kontrak','selesai_kontrak','no_spk','no_k','kerjaan','totalcashin','lama_pekerjaan','project','proj','lokasi','nilai_kontrak','nilai_pekerjaan','no_kontrak','mulai_pekerjaan','selesai_pekerjaan'));
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
