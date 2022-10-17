<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Transaction extends Model
{
    use UUID;

    public $table = 'transcations';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'short_link',
        'origin_link',
        'created_by',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
