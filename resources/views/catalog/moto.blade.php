@extends('layouts.main')

@section('content')
<div style="border-bottom: 1px #000000 solid; padding-bottom: 20px;">
    <div><b>{{ $moto->MarkName }} {{ $moto->ModelName }}</b></div>
    <div style="width: 800px;">
        Марка: <a href="/catalog/{{ $moto->MarkAlias }}/">{{ $moto->MarkName }}</a><br>
        Модель: <a href="/catalog/{{ $moto->MarkAlias }}/{{ $moto->ModelAlias }}/">{{ $moto->ModelName }}</a><br>
        Провод: {{ $moto->DriveName }}<br>
        КПП: {{ $moto->TransmissionName }}<br>
        Двигатель: {{ $moto->EngineName }}<br>
        Число цилиндров: {{ $moto->CylindersNumberName }}<br>
        Расположение цилиндров: {{ $moto->CylindersArrangemetName }}<br>
        Число тактов: {{ $moto->CyclesNumberName }}<br>
        Цвет: {{ $moto->ColorName }}<br>
        Год: {{ $moto->year }}<br>
        Пробег: {{ $moto->mileage }} км.<br>
        Объём: {{ $moto->volume }} см<sup>3</sup>.<br>
        Мощность: {{ $moto->power }} лс.<br>
        Цена: {{ $moto->price }} руб.<br>
        <hr>
        Описание:<br>
        {{ $moto->text }}
        <hr>
        Новый:
        @if ($moto->is_news == 0)
            Б/у
        @else
            Новый
        @endif
        <br>
        Битый:
        @if ($moto->is_crashed == 0)
            Не битый
        @else
            Битый
        @endif
        <br>
        Таможня:
        @if ($moto->is_customs == 0)
            Не растаможен
        @else
            Растаможен
        @endif
        <br>
        В наличии:
        @if ($moto->is_stock == 0)
            На заказ
        @else
            В наличии
        @endif
        <hr>
        Размещено: {{ $moto->date_created }}<br>
        Обновлено: {{ $moto->date_updated }}<br>
        Просмотров: {{ $moto->visits_number}}
    </div>
</div>
@endsection