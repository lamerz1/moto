<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mod extends Model {

    public $table = 'models';

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * */
    public function marks() {
        return $this->belongsTo(\App\Mark::class);
    }

    /**
     * Связь один ко многим (one to many)
     * между таблицами models (текущий класс) и таблицей motos (модель Moto)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * */
    public function motos() {
        return $this->hasMany(\App\Moto::class);
    }

}
