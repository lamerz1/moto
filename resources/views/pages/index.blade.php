@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    {{ Breadcrumbs::render('page', $page->name) }}
    <div><b>{{ $page->name }}</b></div>
    <div style="width: 800px;">
        {{ $page->text }}
    </div>
</div>
@endsection