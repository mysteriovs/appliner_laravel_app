<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zgloszenie extends Model
{
    use HasFactory;
    protected $table = 'zgloszenia';
    protected $primaryKey = 'ZgloszeniaID';
}