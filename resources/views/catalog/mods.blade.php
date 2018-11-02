@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    {{ Breadcrumbs::render('mods', $mark_name) }}
    <div><b>Модели</b></div>
    <div style="width: 800px;">
        @foreach ($mods as $mod)
        <div style="display: inline-block; width: 200px;">
            <a href="/catalog/{{ $mark_alias }}/{{ $mod->alias }}/">{{ $mod->name }}</a> ({{ $mod->Count }})
        </div>
        @endforeach
    </div>
</div>
@endsection