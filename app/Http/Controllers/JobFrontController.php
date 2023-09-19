<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Application_form;
use Illuminate\Support\Facades\Auth;


class JobFrontController extends Controller
{
 public function FrontJobList(){


  $jobs = Job::join('organizations', 'jobs.organization_id', '=', 'organizations.user_id')
  ->select('jobs.*','organizations.organization_name', 'organizations.website')
  ->whereRaw('jobs.organization_id = organizations.user_id')
  ->get();


   return view('pages.Front.job.index', ['jobs' => $jobs]);
 }  
 
 public function apply($id){

    // Check if the user is not logged in or is not a candidate
    if (!Auth::check() || !auth()->user()->hasRole('candidate')) {
      return redirect()->route('user-login');
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
          'status' => 'In Process',
      ]);

      return redirect()->route('frontjoblist')->with('success', 'Application submitted successfully.');

  }

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


  return view('pages.front.applied_jobs',['applied_jobs'=>$applied_jobs]);
 }

 public function applied_distroy($id){


  $applied = Application_form::findOrFail($id);
  $applied->delete();


  return redirect()->route('view-applied')->with('success', 'Application Deleted successfully.');


}

}
