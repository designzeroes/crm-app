<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Organization;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();

        return view('pages.controlpanel.company.job.index', ['jobs' => $jobs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.controlpanel.company.job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Get the authenticated user
        $user = auth()->user();
        // Retrieve the organization associated with the user
        $organization = $user->organization;

        $rules = [
            'job_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:20',
            'status' => 'in:Active,Inactive',
            'is_remote' => 'nullable|boolean',
            'skill' => 'nullable|string',
            'experience' => 'nullable|string',
            'education' => 'nullable|string',
            'budget' => 'nullable|string',
            'bid_close' => 'nullable|date',
            'deadline' => 'nullable|date',
            'career_page_url' => 'nullable|url',
            'is_pinned_in_career_page' => 'nullable|boolean',
        ];
    
                // Validate the request data
        $validatedData = $request->validate($rules);
        $validatedData['organization_id'] = $organization->id;
        $validatedData['creator'] = $user->id;

        // Create the job using the validated data
        Job::create($validatedData);

    
        // You can redirect or do something else after the job is created
        return redirect()->route('job.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findOrFail($id);

        return view('pages.controlpanel.company.job.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'job_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:20',
            'status' => 'in:Active,Inactive',
            'is_remote' => 'nullable|boolean',
            'skill' => 'nullable|string',
            'experience' => 'nullable|string',
            'education' => 'nullable|string',
            'budget' => 'nullable|string',
            'bid_close' => 'nullable|date',
            'deadline' => 'nullable|date',
            'career_page_url' => 'nullable|url',
            'is_pinned_in_career_page' => 'nullable|boolean',
        ];
    
      // Validate the request data
      $validatedData = $request->validate($rules);

      // Retrieve the job based on the provided $id
      $job = Job::findOrFail($id);
  
      // Update the job using the validated data
      $job->update($validatedData);
  
      // You can redirect or do something else after the job is updated
      return redirect()->route('job.index');
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            // Retrieve the job based on the provided $id
    $job = Job::findOrFail($id);

    // Delete the job
    $job->delete();

    // You can redirect or do something else after the job is deleted
    return redirect()->route('job.index');
    }
}
