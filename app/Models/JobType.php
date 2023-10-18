<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class JobType extends Model
{
    use HasFactory;
    protected $table = 'job_type';

    public function job()
    {
        return $this->belongsTo(Job::class, 'type');
    }
}
