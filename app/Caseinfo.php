<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caseinfo extends Model
{
    public $timestamps = true;
    
    protected $table = 'caseinfo';
    
    protected $primaryKey = 'caserefno';
    
    public $incrementing = true;

    protected $fillable = [
        'caserefno',
        'casetype',
        'schemerefno',
        'accdrefno',
        'brcode',
        'dateadd',
        'addby',
        'status',
        'noticedate'
    ];

    // public function workbasket()
    // {
    // 	// hasMany(RelatedModel, foreignKeyOnRelatedModel = todolist_id, localKey = id)
    // 	//kalau buat hasMany kena buat looping
    // 	return $this->hasMany(Workbasket::class, 'caserefno','caserefno');
    // }
}
