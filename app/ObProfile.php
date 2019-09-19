<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObProfile extends Model
{
    public $timestamps = true;
    
    protected $table = 'obprofile';
    
    protected $primaryKey = '';
    
    public $incrementing = true;
    
    protected $fillable = ['idno', 'idtype', 'oldidno', 'passportno', 'name', 'dob', 'race', 'gender', 'occupation', 'dodeath', 'addby', 'dateadd'];
}
