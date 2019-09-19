<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reftable extends Model
{

    protected $table = 'reftable';

    protected $fillable = [
        'tablerefcode',
        'refcode',
        'descen',
        'descbm'
    ];

}
