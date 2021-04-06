<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $table = 'pages';
    protected $primaryKey = 'id';

    public $timestamps = TRUE;

    protected $fillable = [
        'name', 'alias', 'text', 'images'
    ];

}
