<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{

    protected $fillable = ['category','name','photoUrls','tags','status'];
}
