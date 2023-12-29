<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\heroModel;

class heroesController extends Controller
{
    public function getHero() {
        $data = heroModel::all();
        // dd($data);
        return view('welcome', compact('data'));
    }
    public function getDetails() {
        $data = heroModel::all();
        // dd($data);
        return view('crud.index', compact('data'));
    }

    public function postHero(Request $request) {
        // dd($request->all());
        $data = heroModel::all();
        heroModel::create([
            'hero_name' => $request->hero_name,
            'hero_attribute' => $request->hero_attribute,
        ]);
        // dd($data);
        }
    public function editHero() {
        $data = heroModel::all();
        // dd($data);
        return view('welcome', compact('data'));
    }
    // public function postHero() {
    //     $data = heroModel::all();
    //     // dd($data);
    //     return view('welcome', compact('data'));
    // }
}
