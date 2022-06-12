<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todo extends Model
{
    use HasFactory;
    protected $guarded = array('id');
}
function createTodo($Todo)
{
    $now = Carbon::date()->format('Y-m-d H:i:s:v');

    $Todo = new Todo();
    $Todo->created_at = $now;
    $Todo->updated_at = $now;
}
