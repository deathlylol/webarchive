<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $table = 'file';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'file_name',
        'folder_id'
    ];

    public static function getFile()
    {
        return File::all();
    }

    public function folder()
    {
        return $this->belongsTo('App\Folder','folder_id','id');
    }
}
