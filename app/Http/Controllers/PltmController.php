<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PltmController extends Controller
{
    public function index()
    {
        $title = 'PLTM Cirompang';

        return view('pages.admin.pltm', [
            'title' => $title,
        ]);
    }
}
