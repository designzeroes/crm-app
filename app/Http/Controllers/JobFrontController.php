<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Application_form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class JobFrontController extends Controller
{
 public function FrontJobList(Request $request){


  $jobs = Job::join('organizations', 'jobs.organization_id', '=', 'organizations.user_id')
  ->select('jobs.*','organizations.organization_name', 'organizations.website')
  ->whereRaw('jobs.organization_id = organizations.user_id')
  ->get();

  if (strpos($request->url(), '/api/') !== false) {

    return response()->json(['jobs' => $jobs]);
}

   return view('pages.guest.jobs_list', ['jobs' => $jobs]);
 }  
 
 public function apply( $id){

    // Check if the user is not logged in or is not a candidate
    if (!Auth::check() || !auth()->user()->hasRole('candidate')) {
      return view('pages.guest.guest-apply', ['id' => $id]);
  }

  // Check if the user has already applied for the job
  $existingApplication = Application_form::where('user_id', auth()->user()->id)
      ->where('job_id', $id)
      ->first();

  if ($existingApplication) {
      // User has already applied, you can return an error message or redirect as needed
      return redirect()->back()->with('error', 'You have already applied for this job.');
  } else {
      // User has not applied, create a new application
      Application_form::create([
          'user_id' => auth()->user()->id,
          'job_id' => $id,
          'is_registred' => 1,
          'status' => 'In Process',
      ]);

      return redirect()->route('frontjoblist')->with('success', 'Application submitted successfully.');

  }

 }

 public function guest_apply(Request $request, $id){

      // Validate the form input, including the file upload
      $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'cv' => 'required|mimes:pdf|max:1024', 
    ]);
    
    // Handle the file upload and store the CV in the 'public/cv' directory
    $cvPath = $request->file('cv')->store('cv', 'public');

    // Create a new JobApplication instance and save it to the database
    Application_form::create([
        'job_id' => $id,
        'name' => $request->input('name'),
        'position' => $request->input('position'),
        'email' => $request->input('email'),
      'is_registered' => 0,
        'cv' => $cvPath, ]);

    return redirect()->route('frontjoblist')->with('success', 'Application submitted successfully.');

 }

 public function view_applied(){

    // Get the authenticated user
    $user = auth()->user();
    $id = $user->application_form->pluck('job_id')->all();
    
    $applied_jobs = Job::whereIn('jobs.id', $id)
    ->join('application_form', 'jobs.id', '=', 'application_form.job_id')
    ->select('jobs.*', 'application_form.id as form_id', 'application_form.status')
    ->where('application_form.user_id', auth()->user()->id)
    ->get();


  return view('pages.guest.applied_jobs',['applied_jobs'=>$applied_jobs]);
 }

 public function applied_distroy($id){


  $applied = Application_form::findOrFail($id);
  $applied->delete();


  return redirect()->route('view-applied')->with('success', 'Application Deleted successfully.');


}

}
