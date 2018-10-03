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

    // Вывод списка марок на главной
    public function getMarks() {
        return $this->model->select(['marks.name', 'marks.alias', 'marks.logo', \DB::raw('COUNT(motos.id) AS Count')])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->groupBy('marks.name', 'marks.alias', 'marks.logo')
                        ->orderBy('marks.name')
                        ->get();
    }

    // Вывод списка моделей при клике на марку
    public function getMods($mark_alias) {
        return $this->model->select(['models.name', 'models.alias', \DB::raw('COUNT(motos.id) AS Count')])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->groupBy('models.name', 'models.alias')
                        ->orderBy('models.name')
                        ->get();
    }

    // Рандомные 4 мотоцикла на главной
    public function getLastMotos() {
        return $this->model->select(['motos.id', 'marks.name AS MarkName', 'marks.alias AS MarkAlias', 'models.name AS ModelName', 'models.alias AS ModelAlias', 'motos.price', 'motos.year'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->limit(4)
                        ->orderby(\DB::raw('RAND()'))
                        ->get();
    }

    // Список мотоциклов при клике на марку и модель
    public function listMotos($mark_alias, $model_alias) {
        return $this->model->select(['motos.id', 'marks.name AS MarkName', 'marks.alias AS MarkAlias', 'models.name AS ModelName', 'models.alias AS ModelAlias', 'motos.price', 'motos.year'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('models.alias', '=', $model_alias)
                        ->orderBy('motos.id')
                        ->get();
    }

    // Вывод конткетного мотоцикла при клике на его id
    public function getMoto($mark_alias, $model_alias, $id) {
        return $this->model->select(['motos.id', 'marks.name AS MarkName', 'marks.alias AS MarkAlias', 'models.name AS ModelName', 'models.alias AS ModelAlias', 'motos.price', 'motos.year'])
                        ->join('models', 'models.id', '=', 'motos.model_id')
                        ->join('marks', 'marks.id', '=', 'models.mark_id')
                        ->where('marks.alias', '=', $mark_alias)
                        ->where('models.alias', '=', $model_alias)
                        ->where('motos.id', '=', $id)
                        ->first();
    }

}
