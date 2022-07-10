<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_In extends Model
{
    use HasFactory;
    protected $guarded = array('user_id');
}
