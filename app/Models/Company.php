<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Job;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';

    public function job():BelongsTo
    {
        return $this->belongsTo(Job::class, 'company_id');
    }
}
