<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'deadline',
        'discount',
        'client_id',
        'company_id',
        'status_id',
    ];
}
