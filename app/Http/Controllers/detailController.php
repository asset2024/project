<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    public function index()
    {
        $title = 'Detail Project';

        //  $client = Client::all();
        return view('pages.admin.detail-project', [
            'title' => $title,
            //    'listClient' => $client,
        ]);
    }
}
