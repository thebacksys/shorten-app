<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \DateTimeInterface;

class User extends Authenticatable
{
    use UUID;

    public $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
