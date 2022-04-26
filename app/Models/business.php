<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    protected $fillable = ['name', 'email', 'address','logo'];
    use HasFactory;
}
