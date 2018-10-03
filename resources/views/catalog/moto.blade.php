@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>{{ $moto->MarkName }} {{ $moto->ModelName }}</b></div>
    <div style="width: 800px;">
        Цена: {{ $moto->price }} руб.<br>
        Год: {{ $moto->year }} руб.<br>
    </div>
</div>
@endsection