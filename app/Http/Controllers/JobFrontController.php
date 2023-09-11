<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Organization;
use Illuminate\Http\Request;

class JobFrontController extends Controller
{
 public function FrontJobList(){


  $jobs = Job::join('organizations', 'jobs.organization_id', '=', 'organizations.user_id')
  ->select('jobs.*','organizations.*')
  ->whereRaw('jobs.organization_id = organizations.user_id')
  ->get();

  
  
   return view('pages.front.job.index', ['jobs' => $jobs]);
 }   
}
