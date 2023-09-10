<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobFrontController extends Controller
{
 public function FrontJobList(){

    $jobs = DB::table('jobs')
    ->join('employees', 'jobs.user_id', '=', 'employees.user_id')
    ->join('organizations', 'jobs.user_id', '=', 'organizations.user_id')
    ->select('jobs.*', 'employees.*', 'organizations.*')
    ->get();

dd($jobs);
   return view('pages.Front.job.index', ['jobs' => $jobs]);
 }   
}
