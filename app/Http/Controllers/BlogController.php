<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function show(string $id): View
    {
        return view('index', [
            'user' => User::findOrFail($id)
        ]);
    }

}


