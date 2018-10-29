<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
     $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('page', function($breadcrumbs, $page) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($page->name, route('page', $page));
});

Breadcrumbs::register('mark', function($breadcrumbs, $mods) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($mods->name, route('mods', $mods));
});