<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateNumber3 extends Model
{
    protected $connection = 'third_db';
    protected $table = 'subcategory';
    protected $fillable = ['cat_id', 'time', 'date', 'number'];
}
