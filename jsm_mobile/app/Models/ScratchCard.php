<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScratchCard extends Model
{
    use HasFactory;
    
    protected $fillable = ['column1', 'column2', 'column3']; // Update columns accordingly
}
