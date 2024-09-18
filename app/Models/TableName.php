<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableName extends Model
{
    protected $table = 'table_name'; // Explicitly define the table name

    protected $fillable = [
        'name',
        'description',
    ];
}
