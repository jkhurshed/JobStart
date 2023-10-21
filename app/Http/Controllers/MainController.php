<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;

class MainController extends Controller
{
    //
    public function index(){
        
        $job = Job::with(['company', 'job_type', 'category', 'locations'])->get();
        $category = Category::all();
        
        return view('home', [
            'jobs' => $job,
            'category' => $category
        ]);
    }
}