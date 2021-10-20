<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'logo',
        'cnpj',
        'name',
    ];

    public static function boot(){
        parent::boot();
        static::creating(function($company){
            $company->slug=Str::slug($company->name);
        });
    }
}
