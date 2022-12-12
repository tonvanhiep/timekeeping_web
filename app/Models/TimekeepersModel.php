<?php

namespace App\Models;

use Database\Factories\TimekeepersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TimekeepersModel extends Model
{
    use HasFactory;

    protected $table = 'timekeepers';

    protected $fillable = [
        'id',
        'office_id',
        'account',
        'password',
        'device_index',
        'status',
        'created_at',
        'created_user',
        'updated_at',
        'updated_user'
    ];



    protected static function newFactory()
    {
        return TimekeepersFactory::new();
    }
}
