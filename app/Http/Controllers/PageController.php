<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;

class PageController extends Controller
{
    protected $page_rep;

    public function __construct(PageRepository $page_rep) {
        $this->page_rep = $page_rep;
    }
    
    function index($page_alias) {
        $page = $this->page_rep->getPage($page_alias);

        return view('pages.index', ['page' => $page]);
    }
}
