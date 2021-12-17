<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Concerns\HasComments;

class Post extends Model
{
    use HasFactory;
    use HasComments;

    public $guarded = [];
}
