<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
     $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('page', function($breadcrumbs, $page) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($page, route('page', $page));
});

Breadcrumbs::register('mods', function($breadcrumbs, $mark) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($mark, route('mods', $mark));
});

Breadcrumbs::register('motos', function($breadcrumbs, $mark_mod) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($mark_mod->MarkName, route('mods', $mark_mod));
    $breadcrumbs->push($mark_mod->ModName);
});