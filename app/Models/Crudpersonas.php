<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crudpersonas extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $primaryKey = 'id';
}
