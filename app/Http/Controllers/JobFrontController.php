<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Application_form;
use App\Http\Requests\Auth\LoginRequest;
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
 
 public function apply(LoginRequest $request, $id){


  if (!Auth::check() || !$request->user()->hasRole('candidate')) {
    return redirect()->route('user-login');
} else {

  Application_form::create([
    'user_id' => auth()->user()->id,
    'job_id' => $id,
]);

      
    return redirect()->route('frontjoblist');
}




  
 }
}
