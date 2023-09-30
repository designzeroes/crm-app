<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Employee;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->user()->hasRole('employee')) {
            $org = Employee::where('user_id', auth()->user()->id)->first();
            $jobs = Job::where('organization_id', $org->creator_id)
              ->withCount('application_form')
             ->get();
        } elseif ($request->user()->hasRole('organization')) {
            $org = Organization::where('user_id', auth()->user()->id)->first();
            $jobs = Job::where('organization_id', $org->user_id)
              ->withCount('application_form')
             ->get();
             
        }

        
         return view('pages.controlpanel.job.index', ['jobs' => $jobs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.controlpanel.job.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        if ($request->user()->hasRole('employee')) {
            $org = Employee::where('user_id', auth()->user()->id)->first();
          $creator =  $org->creator_id;
        } elseif ($request->user()->hasRole('organization')) {
            $org = Organization::where('user_id', auth()->user()->id)->first();
            $creator =  $org->user_id;
        }
        

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
        $validatedData['organization_id'] = $creator ;
        $validatedData['user_id'] = auth()->user()->id;

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

        $job = Job::where('jobs.id', $id)->first();

        return view('pages.controlpanel.job.show', ['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findOrFail($id);

        return view('pages.controlpanel.job.edit', ['job' => $job]);
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
            'is_remote' => 'nullable|string|max:20',
            'skill' => 'nullable|string',
            'experience' => 'nullable|string',
            'education' => 'nullable|string',
            'budget' => 'nullable|string',
            'bid_close' => 'nullable|date',
            'deadline' => 'nullable|date',
            'career_page_url' => 'nullable|url',
            'is_pinned_in_career_page' => 'nullable|boolean',
        ];
    
      $validatedData = $request->validate($rules);
      
      Job::findOrFail($id)->update($validatedData);

      
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
