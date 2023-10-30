<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Degree;
use App\Models\Employee;
use App\Models\Categories;
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

    
        $this->hasPermission('job-create');
        $categories = Categories::all();
        $degrees = Degree::all();
        return view('pages.controlpanel.job.create',['categories'=>$categories, 'degrees' => $degrees]);
        
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
            'category_id' => 'required',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:20',
            'status' => 'in:Active,Inactive',
            'is_remote' => 'nullable|boolean',
            'skill' => 'nullable|string',
            'experience' => 'nullable|string',
            'degree_id' => 'nullable|string',
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

        $categories = Categories::all();

        return redirect()->route('job.index',['categories'=>$categories]);

    }


    public function show(string $id)
    {

        $this->hasPermission('job-view');

        $job = Job::where('jobs.id', $id)->first();
        $degrees = Degree::all();
        return view('pages.controlpanel.job.show', ['job'=>$job,'degrees'=> $degrees]);

   
    }

    public function edit(string $id)
    {
        $this->hasPermission('job-edit');
        $job = Job::find($id);
        $category = Categories::where('id', $job->category_id)->first();
        $categories = Categories::where('id', '!=', $job->category_id)->get();
        $degree = Degree::where('id', $job->degree_id)->first();
        $degrees = Degree::where('id', '!=', $job->degree_id)->get();


        return view('pages.controlpanel.job.edit', [
            'job' => $job,
            'cat'=> $category,
            'categories'=> $categories,
            'degree' => $degree,
            'degrees' => $degrees
        ]);
        
    }


    public function update(Request $request, string $id)
    {

        $rules = [
            'job_title' => 'nullable|string|max:255',
            'category_id' => 'nullable',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:20',
            'status' => 'in:Active,Inactive',
            'is_remote' => 'nullable|string|max:20',
            'skill' => 'nullable|string',
            'experience' => 'nullable|string',
            'degree_id' => 'nullable',
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
        $this->hasPermission('job-delete');
            // Retrieve the job based on the provided $id
    $job = Job::findOrFail($id);

    // Delete the job
    $job->delete();

    // You can redirect or do something else after the job is deleted
    return redirect()->route('job.index');
    }

    private function hasPermission($permissionName)
    {
        if (!auth()->user()->hasPermissionTo($permissionName)) {
            abort(403);
        }
    }


}
