<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComboUc extends Model
{
    use HasFactory;
    protected $table = 'ug_uc';
    protected $primaryKey = 'id';
}
