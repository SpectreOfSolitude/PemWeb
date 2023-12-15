<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function Empty()
    {
        return view('pesan');
    }

    public function submitData(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'NIK' => $request->input('NIK'),
            'Provinsi' => $request->input('Provinsi'),
            'Kota' => $request->input('Kota'),
            'noTelp' => $request->input('noTelp'),
        ];
        return view('dashboardAdmin', compact(
            'data',
        ));
    }
}
