<?php

namespace App\Http\Controllers;

use App\Repositories\MotoRepository;

class IndexController extends Controller {

    protected $moto_rep;

    public function __construct(MotoRepository $moto_rep) {
        $this->moto_rep = $moto_rep;
    }

    public function index() {
        $marks = $this->moto_rep->getMarks();
        $motos = $this->moto_rep->getLastMotos();

        return view('index.index', ['marks' => $marks, 'motos' => $motos]);
    }

}
