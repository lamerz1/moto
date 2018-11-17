<?php

namespace App\Http\Controllers;

use App\Repositories\CatalogRepository;


class CatalogController extends Controller
{
    protected $catalog_rep;
    
    public function __construct(CatalogRepository $catalog_rep) {
        $this->catalog_rep = $catalog_rep;
    }
    
    function mods($mark_alias) {
        $mods = $this->catalog_rep->getMods($mark_alias);
        $mark = $this->catalog_rep->getMark($mark_alias);
        
        return view('catalog.mods', ['mods' => $mods, 'mark'=> $mark, 'mark_alias' => $mark_alias]);
    }
    
    function motos($mark_alias, $model_alias) {
        $motos = $this->catalog_rep->getMotos($mark_alias, $model_alias);
        $mark = $this->catalog_rep->getMark($mark_alias);
        $mod = $this->catalog_rep->getMod($mark_alias, $model_alias);
        
        return view('catalog.motos', ['motos' => $motos, 'mark'=> $mark, 'mod' => $mod, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias]);
    }
    
    function moto($mark_alias, $model_alias, $id) {
        $moto = $this->catalog_rep->getMoto($mark_alias, $model_alias, $id);
        
        return view('catalog.moto', ['moto' => $moto, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias, 'id' => $id]);
    }
    
}
