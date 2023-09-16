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

  if (!Auth::check() || !auth()->user()->hasRole('candidate')) {
    return redirect()->route('user-login');
} else {

  Application_form::create([
    'user_id' => auth()->user()->id,
    'job_id' => $id,
]);
    return redirect()->route('frontjoblist');
}

 }

 public function view_applied(){
  $user = auth()->user();
  $jobIds = $user->application_form->pluck('job_id')->all();
  dd($user);
  
  $applied_jobs = Job::where('user_id', auth()->user()->id)->get();
  return view('pages.front.applied_jobs',['applied_jobs'=>$applied_jobs]);
 }
}
