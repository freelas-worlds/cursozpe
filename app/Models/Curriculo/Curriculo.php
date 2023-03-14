<?php

namespace App\Models\Curriculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'curriculos';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'confirmado'
    ];
}
