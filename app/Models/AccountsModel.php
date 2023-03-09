<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class AccountsModel extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'accounts';

    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'employee_id',
        'user_name',
        'email',
        'password',
        'created_at',
        'created_user',
        'updated_at',
        'updated_user',
        'fl_admin',
		'email_verified_at',
		'remember_token'
    ];
}
