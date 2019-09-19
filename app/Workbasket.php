<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workbasket extends Model
{

    protected $workbasket;
 
    protected $fillable = [
        'wbid',
        'date',
        'time',
        'caserefno',
        'caseid',
        'revisionrefno',
        'medrefno',
        'rtwrefno',
        'remarkid',
        'brcode',
        'operid',
        'status',
        'taskcode',
        'msrefno'
    ];

      
}
