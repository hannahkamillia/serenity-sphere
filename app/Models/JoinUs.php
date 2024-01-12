<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
   // use HasFactory;
   public $table = 'join_us';
   public $primaryKey ='email';
   public $incrementing = true;
   public $timestamps = false;

}
