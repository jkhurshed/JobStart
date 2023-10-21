<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    public function job()
    {
        return $this->belongsTo(Job::class, 'category_id');
    }
}
