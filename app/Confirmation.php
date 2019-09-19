<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    public $timestamps = true;
    
    protected $table = 'confirmation';
    
    protected $primaryKey = 'id';
    
    public $incrementing = true;
    
    protected $fillable = ['name','designation', 'date'];
}
