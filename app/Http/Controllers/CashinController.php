<?php

namespace App\Http\Controllers;

use App\Models\Cashin;
use Illuminate\Http\Request;

class CashinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Cash In';

        // $cashin = Cashin::all();
        return view('pages.admin.cashin', [
            'title' => $title,
            //  'listCashin' => $cashin,
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
        //
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
    public function update(Request $request, Cashin $cashin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashin $cashin)
    {
        //
    }
}
