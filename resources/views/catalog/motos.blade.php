@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    {{ Breadcrumbs::render('mods', $mark->name) }}
    <div><b>Мотоциклы </b></div>
    <div style="width: 800px;">
        @foreach ($motos as $moto)
        <div style="padding-bottom: 10px;">
            <a href="/catalog/{{ $mark_alias }}/{{ $model_alias }}/{{ $moto->id }}.html">{{ $moto->MarkName }} {{ $moto->ModelName }}</a>
            <div>Цена: {{ $moto->price}} руб.</div>
            <div>Год выпуска: {{ $moto->price}} руб.</div>
        </div>
        @endforeach
    </div>
</div>
@endsection