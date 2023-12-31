<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Company;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with(['company', 'job_type', 'locations', 'category'])->get(); // Fetch jobs
        // dd($jobs);
        return view('job', ['jobs' => $jobs]);
    }

    public function get()
    {
        $jobTypes = JobType::all();
        $company = Company::all();
        $location = Location::all();
        $category = Category::all();
        
        // dd($category);

        return view('job', [
            'jobTypes' => $jobTypes,
            'company' => $company,
            'location' => $location,
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //function for creating a job
        // dd($_POST);
        Job::create($request->all());

        return redirect()->route('job_get');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
