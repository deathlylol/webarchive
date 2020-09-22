<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armoire extends Model
{
    public $table = 'armoire';
    public $timestamps = false;
    protected $fillable = [
        'title',
    ];

    public static function getArmoire()
    {
        return $armoire = Armoire::all();
    }

    public function cell()
    {
        return $this->hasMany('App\cell');
    }
}
