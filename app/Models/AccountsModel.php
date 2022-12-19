<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AccountsModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'password',
        'created_at',
        'created_user',
        'updated_at',
        'updated_user',
        'fl_admin',
    ];
}
