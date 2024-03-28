<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LpgController extends Controller
{
    public function index()
    {
        $title = 'LPG';

        return view('pages.admin.lpg', [
            'title' => $title,
        ]);
    }
    public function detail()
    {
        $title = 'LPG Detail';

        return view('pages.admin.lpg-detail', [
            'title' => $title,
        ]);
    }
}
