@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div style="display: inline-block; width: 500px; vertical-align: top;">
        <div><b>О компании</b></div>
        <div>
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
        </div>
    </div>
    <div style="display: inline-block;">
        <img src="#" width="350" height="200">
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>Наши преимущества</b></div>
    <div>
        <div style="display: inline-block; width: 200px;">
            <img src="#" width="200" height="200">
            <p>
                ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            </p>
        </div>
        <div style="display: inline-block; width: 200px;">
            <img src="#" width="200" height="200">
            <p>
                ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            </p>
        </div>
        <div style="display: inline-block; width: 200px;">
            <img src="#" width="200" height="200">
            <p>
                ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            </p>
        </div>
        <div style="display: inline-block; width: 200px;">
            <img src="#" width="200" height="200">
            <p>
                ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            </p>
        </div>
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>Марки</b></div>
    <div style="width: 800px;">
        @foreach ($marks as $mark)
        <div style="display: inline-block; width: 100px;">
            <a href="/catalog/{{ $mark->alias }}/"><img src="{{ $mark->logo }}" width="100" height="100"></a>
            <a href="/catalog/{{ $mark->alias }}/">{{ $mark->name }}</a> ({{ $mark->Count }})
        </div>
        @endforeach
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>Поиск</b></div>
    <div>
        <div style="display: inline-block;">
            <input type="text">
        </div>
        <div style="display: inline-block;">
            <input type="text">
        </div>
        <div style="display: inline-block;">
            <input type="text">
        </div>
        <div style="display: inline-block;">
            <input type="submit" value="Искать">
        </div>
        <div><a href="#">Расширенный поиск</a></div>
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>Последние мотоциклы</b></div>
    <div>
        @foreach ($motos as $moto)
        <div style="display: inline-block; width: 200px;">
            <a href="/catalog/{{ $moto->MarkAlias }}/{{ $moto->ModelAlias }}/{{ $moto->id }}.html"><img src="#" width="200" height="200"></a>
            <p>
                <a href="/catalog/{{ $moto->MarkAlias }}/{{ $moto->ModelAlias }}/{{ $moto->id }}.html">{{ $moto->MarkName }} {{ $moto->ModelName }}</a><br>
                Год: {{ $moto->year }} <br>
                Объём: {{ $moto->volume }} см<sup>3</sup>.<br>
                Пробег: {{ $moto->mileage }} км.<br>
                Цена: {{ $moto->price }} руб.
                
            </p>
        </div>
        @endforeach
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div style="width: 800px; display: inline-block; vertical-align: top;">
        <div><b>Отзывы</b></div>
        <div>
            <img src="#" width="150" height="180" align="left">
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
            ыываыва ыва ыва ыва ыва ыва ываыва ыва ыва ыва
        </div>
    </div>
</div>
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>Наши клиенты</b></div>
    <div>
        <div style="display: inline-block; width: 180px;">
            <img src="#" width="180" height="100">
        </div>
        <div style="display: inline-block; width: 180px;">
            <img src="#" width="180" height="100">
        </div>
        <div style="display: inline-block; width: 180px;">
            <img src="#" width="180" height="100">
        </div>
        <div style="display: inline-block; width: 180px;">
            <img src="#" width="180" height="100">
        </div>
        <div style="display: inline-block; width: 180px;">
            <img src="#" width="180" height="100">
        </div>
    </div>
</div>
@endsection