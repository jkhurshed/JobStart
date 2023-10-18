<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobTypeRequest;
use App\Http\Requests\UpdateJobTypeRequest;
use App\Models\JobType;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_type = JobType::all();
        
        // passing the jobs variable to the view
        return view('job', ['job_type' => $job_type]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        JobType::create($request->all());

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobType $jobType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobTypeRequest $request, JobType $jobType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobType $jobType)
    {
        //
    }
}
