<?php

namespace App\Http\Controllers;

class DisplayController extends Controller
{
    public function tampilkanData()
{
    // data statis untuk ditampilka
    $data = [
        ['name' => 'Nico Robin', 'email' => 'robins@gmail.com', 'message' => 'Watashinonamaeha robindesu.'],
        ['name' => 'Nisinoya Shoto', 'email' => 'shoto@gmail.com', 'message' => 'Watashinonamaeha noyadesu.'],
        ['name' => 'Eren Yaegar', 'email' => 'eren@gmail.com', 'message' => 'Watashinonamaeha erendesu.']
    ];

    return view('display-data', compact('data'));
}
}
