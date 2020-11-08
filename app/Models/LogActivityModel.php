<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;

class LogActivityModel extends Model
{
    use HasFactory;
    public static function  getActivityLog()
    {
        return Activity::all();
        
        # code...
    }
}
