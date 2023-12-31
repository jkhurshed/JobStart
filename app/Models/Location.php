<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';

    public function job()
    {
        return $this->belongsTo(Job::class, 'location_id');
    }
}
