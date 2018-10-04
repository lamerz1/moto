<?php

namespace App\Repositories;

use App\Page;

class PageRepository {

    /**
     * Объект модели.
     * @var object
     */
    protected $model;

    public function __construct(Page $page) {
        $this->model = $page;
    }

    public function get($page_alias) {
        return $this->model->select(['pages.name',
                            'pages.alias',
                            'pages.text'])
                        ->where('pages.alias', '=', $page_alias)
                        ->first();
    }

}
