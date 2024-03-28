<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CngController extends Controller
{
    public function index()
    {
        $title = 'CNG';

        return view('pages.admin.cng', [
            'title' => $title,
        ]);
    }
}
