<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTamu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'list_tamu';
}
