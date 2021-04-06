<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table = 'portfolios';
    protected $primaryKey = 'id';

    public $timestamps = TRUE;

    protected $fillable = [
        'name', 'images', 'filter'
    ];
}
