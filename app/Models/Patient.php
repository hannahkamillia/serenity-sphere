<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //use HasFactory;
    public $table = 'patients';
    public $primaryKey ='email';
    public $incrementing = true;
    public $timestamps = false;

}
