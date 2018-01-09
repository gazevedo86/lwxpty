<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Configuracao;
class listaEstados
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        //Select dos dados aqui
        $configuracao = new Configuracao();
        $listaEstados = $configuracao->listaEstados();
        $view->with('listaEstados', $listaEstados);

    }
}
