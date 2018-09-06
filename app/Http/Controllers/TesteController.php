<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TesteRequest;

class TesteController extends Controller
{
    public function teste2a()
    {
        return view('teste2');
    }

    public function teste2b(TesteRequest $request)
    {
        dd('Samuel & Ester');
    }
}
