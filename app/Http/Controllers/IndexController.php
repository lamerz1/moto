<?php

namespace App\Http\Controllers;

use App\Repositories\CatalogRepository;

class IndexController extends Controller {

    protected $catalog_rep;

    public function __construct(CatalogRepository $catalog_rep) {
        $this->catalog_rep = $catalog_rep;
    }

    public function index() {
        $marks = $this->catalog_rep->getMarks();
        $motos = $this->catalog_rep->getLastMotos();

        return view('index.index', ['marks' => $marks, 'motos' => $motos]);
    }

}
