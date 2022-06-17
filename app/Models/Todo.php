<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'created_at', 'updated_at'];
    
        public static $rules = array(
        'content' => 'required|max:20',
        'created_at' => 'date_format:"Y-m-d /H:i:s.u"',
        'updated_at' => 'date_format:"Y-m-d /H:i:s.u"'
        );
}