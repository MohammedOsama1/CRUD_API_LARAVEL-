<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $table = 'school';
    use HasFactory;
    protected $fillable = [
        'name',
        'phone'
    ] ;
}
