<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public $table = 'folder';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'cell_id'
    ];
    public static function getFolders()
    {
        return Folder::all();
    }

    public function cell()
    {
        return $this->belongsTo('App\Cell','cell_id','id');
    }

    public function file()
    {
        return $this->hasMany('App\file');
    }
}
