<?php

namespace App\Http\Controllers;

use App\Repositories\MotoRepository;


class CatalogController extends Controller
{
    protected $moto_rep;
    
    public function __construct(MotoRepository $moto_rep) {
        $this->moto_rep = $moto_rep;
    }
    
    function mods($mark_alias) {
        $mods = $this->moto_rep->getMods($mark_alias);
        
        return view('catalog.mods', ['mods' => $mods, 'mark_alias' => $mark_alias]);
    }
    
    function listMotos($mark_alias, $model_alias) {
        $motos = $this->moto_rep->listMotos($mark_alias, $model_alias);
        
        return view('catalog.motos', ['motos' => $motos, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias]);
    }
    
    function moto($mark_alias, $model_alias, $id) {
        $moto = $this->moto_rep->getMoto($mark_alias, $model_alias, $id);
        
        return view('catalog.moto', ['moto' => $moto, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias, 'id' => $id]);
    }
    
}
