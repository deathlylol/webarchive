<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    public $table = 'cell';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'armoire_id',
    ];

    public static function getCell()
    {
        return Cell::all();
    }

    public function folder()
    {
        return $this->hasMany('App\folder');
    }

    public function armoire()
    {
        return $this->belongsTo('App\Armoire','armoire_id','id');
    }
}
