<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Company;
use App\Models\JobType;
use App\Models\Location;
use App\Models\Category;

class Job extends Model
{
    protected $table = 'job';
    use HasFactory;
    protected $fillable = ['title', 'salary', 'company_id', 'type', 'location_id', 'description', 'category_id'];

    public function company()
    {
        return $this->hasMany(Company::class, 'id', 'company_id');
    }

    public function job_type()
    {
        return $this->hasMany(JobType::class, 'id', 'type');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'id', 'location_id');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }
}
