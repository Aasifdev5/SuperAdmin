<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateNumber4 extends Model
{
    protected $connection = 'fourth_db';
    protected $table = 'subcategory';
    protected $fillable = ['cat_id', 'time', 'date', 'number'];
}
