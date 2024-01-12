<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function API()
    {
        return [
            "pesan" => [
                "Yuki",
                "Caca",
                "Mijeh"
            ]
        ];
    }

    public function data()
    {
        $data = [
            "data" => [

                [
                    "nama"    => "Ahmad Al Wabil",
                    "julukan" => "Al",
                ],
                [
                    "nama"    => "Kristian Suriyadharma",
                    "julukan" => "Kristi",
                ],
                [
                    "nama"    => "Rakesh Bramantyo",
                    "julukan" => "Braman",
                ],
                [
                    "nama"    => "David Ephraim",
                    "julukan" => "Efrym",
                ],
                [
                    "nama"    => "Mirza Alayda Umayroh",
                    "julukan" => "Aijeh",
                ],
                [
                    "nama"    => "Oktaviana Salsabila",
                    "julukan" => "Caca",
                ],
                [
                    "nama"    => "Ichiro Albert Mandang Sundah",
                    "julukan" => "Icibet",
                ],
            ]
        ];
        return view('home', compact('data'));
    }
}
