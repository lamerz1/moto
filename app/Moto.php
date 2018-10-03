<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model {

    public $table = 'motos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    /**
     * Связь один ко многим (one to many) между таблицами auto(текущий класс) и таблицей models (модель Mod).
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * */
    public function models() {
        return $this->belongsTo(\App\Mod::class);
    }

}
