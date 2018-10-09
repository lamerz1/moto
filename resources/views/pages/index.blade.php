@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    {{ Breadcrumbs::render('page', $page_alias) }}
    <div><b>{{ $pages->name }}</b></div>
    <div style="width: 800px;">
        {{ $pages->text }}
    </div>
</div>
@endsection