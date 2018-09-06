<?php

namespace Modules\Colaboradores\Http\Controllers\Visitantes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Colaboradores\Http\Requests\Visitantes\NovaSenhaRequest;

class NovaSenhaController extends Controller
{
    public function teste1a()
    {
        return view('Colaboradores::visitantes.teste1');
    }

    public function teste1b(NovaSenhaRequest $request)
    {
        dd('Testando...');
    }
}
