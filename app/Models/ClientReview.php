<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ClientReview extends Model
{
    use HasFactory;
     protected $fillable = [
        'client_img',
        'client_title',
        'client_description',
    ];
}
    