<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateNumber extends Model
{
    protected $connection = 'second_db'; // Specify the name of the second database connection

    protected $table = 'subcategory';

    protected $fillable = ['cat_id', 'time', 'date', 'number'];
}
