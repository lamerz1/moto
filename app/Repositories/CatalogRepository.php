<?php

namespace App\Repositories;

use App\Moto;

class MotoRepository {

    /**
     * Объект модели.
     * @var object
     */
    protected $model;

    public function __construct(Moto $moto) {
        $this->model = $moto;
    }

    // Получение данные кликнутой марки по её алиасу
    public function getMark($mark_alias) {
        return $this->model->select(['marks.name',
                            'marks.text',
                            'marks.logo'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('motos.is_active', '=', 1)
                        ->first();
    }

    // Вывод списка марок на главной
    public function getMarks() {
        return $this->model->select(['marks.name',
                            'marks.alias',
                            'marks.logo',
                            \DB::raw('COUNT(motos.id) AS Count')])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('motos.is_active', '=', 1)
                        ->groupBy('marks.name', 'marks.alias', 'marks.logo')
                        ->orderBy('marks.name')
                        ->get();
    }

    // Вывод списка моделей при клике на марку
    public function getMods($mark_alias) {
        return $this->model->select(['models.name',
                            'models.alias',
                            \DB::raw('COUNT(motos.id) AS Count')])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('motos.is_active', '=', 1)
                        ->groupBy('models.name', 'models.alias')
                        ->orderBy('models.name')
                        ->get();
    }

    // Рандомные 4 мотоцикла на главной
    public function getLastMotos() {
        return $this->model->select(['motos.id',
                            'marks.name AS MarkName',
                            'marks.alias AS MarkAlias',
                            'models.name AS ModelName',
                            'models.alias AS ModelAlias',
                            'motos.year',
                            'motos.mileage',
                            'motos.volume',
                            'motos.price'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('motos.is_active', '=', 1)
                        ->limit(4)
                        ->orderby(\DB::raw('RAND()'))
                        ->get();
    }

    // Список мотоциклов при клике на марку и модель
    public function getMotos($mark_alias, $model_alias) {
        return $this->model->select(['motos.id',
                            'marks.name AS MarkName',
                            'marks.alias AS MarkAlias',
                            'models.name AS ModelName',
                            'models.alias AS ModelAlias',
                            'motos.price',
                            'motos.year'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('models.alias', '=', $model_alias)
                        ->where('motos.is_active', '=', 1)
                        ->orderBy('motos.id')
                        ->get();
    }

    // Вывод конткетного мотоцикла при клике на его id
    public function getMoto($mark_alias, $model_alias, $id) {
        return $this->model->select(['motos.id',
                            'marks.name AS MarkName',
                            'marks.alias AS MarkAlias',
                            'models.name AS ModelName',
                            'models.alias AS ModelAlias',
                            'drives.name AS DriveName',
                            'transmissions.name AS TransmissionName',
                            'engines.name AS EngineName',
                            'cylinders_numbers.name AS CylindersNumberName',
                            'cylinders_arrangements.name AS CylindersArrangemetName',
                            'cycles_numbers.name AS CyclesNumberName',
                            'colors.name AS ColorName',
                            'motos.year',
                            'motos.mileage',
                            'motos.volume',
                            'motos.power',
                            'motos.price',
                            'motos.text',
                            'motos.is_new',
                            'motos.is_crashed',
                            'motos.is_customs',
                            'motos.is_stock',
                            'motos.visits_number',
                            'motos.date_created',
                            'motos.date_updated'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->join('drives', 'drives.id', '=', 'motos.drive_id')
                        ->join('transmissions', 'transmissions.id', '=', 'motos.transmission_id')
                        ->join('engines', 'engines.id', '=', 'motos.engine_id')
                        ->join('cylinders_numbers', 'cylinders_numbers.id', '=', 'motos.cylinders_number_id')
                        ->join('cylinders_arrangements', 'cylinders_arrangements.id', '=', 'motos.cylinders_arrangement_id')
                        ->join('cycles_numbers', 'cycles_numbers.id', '=', 'motos.cycles_number_id')
                        ->join('colors', 'colors.id', '=', 'motos.color_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('models.alias', '=', $model_alias)
                        ->where('motos.id', '=', $id)
                        ->where('motos.is_active', '=', 1)
                        ->first();
    }

}
