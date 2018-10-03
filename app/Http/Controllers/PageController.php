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
        $pages = $this->page_rep->get($page_alias);

        return view('pages.index', ['pages' => $pages]);
    }
}
