<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;
      protected $fillable = [
        'services_name',
        'services_description',
        'services_logo',
    ];

}
