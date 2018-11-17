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
        // Список мотоциклов
        $motos = $this->catalog_rep->getMotos($mark_alias, $model_alias);
        
        // Данные а марки и модели в одном объекте: потому что Breadcrumbs принимает по кроме самого $trait - лишь 1 аргумент
        // Приходится имя марки и модели уместить в 1й переменной
        $mark_mod = $this->catalog_rep->getMarkMod($mark_alias, $model_alias);
        
        return view('catalog.motos', ['motos' => $motos, 'mark_mod' => $mark_mod, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias]);
    }
    
    function moto($mark_alias, $model_alias, $id) {
        $moto = $this->catalog_rep->getMoto($mark_alias, $model_alias, $id);
        
        return view('catalog.moto', ['moto' => $moto, 'mark_alias' => $mark_alias, 'model_alias' => $model_alias, 'id' => $id]);
    }
    
}
