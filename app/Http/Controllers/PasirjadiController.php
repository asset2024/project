<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasirjadiController extends Controller
{
    public function index()
    {
        $title = 'Pasirjadi';

        return view('pages.admin.pasirjadi', [
            'title' => $title,
        ]);
    }
}
