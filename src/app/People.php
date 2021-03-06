<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $table = 'peoples';
    protected $primaryKey = 'id';

    public $timestamps = TRUE;

    protected $fillable = [
        'name', 'position', 'images', 'text'
    ];
}
