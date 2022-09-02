<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionModel extends Model
{
    protected $table = 'discussions';
    protected $guarded = ['id'];
}
