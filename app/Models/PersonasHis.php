<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonasHis extends Model
{
    use HasFactory;
    protected $table = 'personas_his';
    protected $primaryKey = 'id';
}
