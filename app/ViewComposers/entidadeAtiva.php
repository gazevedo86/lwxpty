<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Entidade;
class entidadeAtiva
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        //Select dos dados aqui
        $entidades = new Entidade();
        $listaEntidades = $entidades->listaEntidades();
        $view->with('listaEntidades', $listaEntidades);

    }
}
