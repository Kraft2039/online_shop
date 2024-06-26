<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L2Category extends Model
{
    use HasFactory;

    protected $table = 'l2_categories';
    protected $guarded = false;
}
