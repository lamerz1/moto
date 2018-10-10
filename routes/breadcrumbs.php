<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
     $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('page', function($breadcrumbs, $page_alias) {
    $page = Page::findOrFail($page_alias);
    $breadcrumbs->parent('home');
    $breadcrumbs->push($page->name, route('page', $page));
});