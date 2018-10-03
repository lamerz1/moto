<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model {

    public $table = 'marks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'Name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    /**
     * Связь один ко многим (one to many)
     * между таблицами marks (текущий класс) и таблицей models (модель Mod)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * */
    public function models() {
        return $this->hasMany(\App\Mod::class);
    }

}
