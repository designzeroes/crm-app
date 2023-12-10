<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Application_form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jobs\PdfLabeler;
use App\Models\Candidate;

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

 public function apply(Request $request,$id){

     $job = Job::where('id', $id)->first();

         // Check if the user is not logged in or is not a candidate
    if (!Auth::check() || !auth()->user()->hasRole('candidate')) {
      $existing = Application_form::where('user_ip', $request->ip())->first();

      if (!empty($existing->user_ip)) {
        return view('pages.guest.job_detail', ['cv' => $existing->cv, 'job' => $job]);
    }
       return view('pages.guest.job_detail', ['job' => $job]);
  }else{

    $existing = Candidate::where('user_id',Auth()->user()->id)->first();
    return view('pages.guest.job_detail', ['cv' => $existing->cv,'job' => $job]);
  }
 }

 public function user_apply(Request $request, $id){

  $request->validate([
    'description' => 'required|max:1000',
    'cv' => $request->input('use_old_cv') ? [] : 'required|mimes:pdf|max:1024',
]);

  // Check if the user has already applied for the job
  $existingApplication = Application_form::where('user_id', auth()->user()->id)
      ->where('job_id', $id)
      ->first();

  if ($existingApplication) {
      // User has already applied, you can return an error message or redirect as needed
      return redirect()->back()->with('error', 'You have already applied for this job.');
  } else {

    if (!$request->input('use_old_cv')) {


      $cvFile = $request->file('cv');
      $destinationPath = public_path('cv');
      $destinationFileName = time() . '_' . $cvFile->getClientOriginalName();
      $cvFile->move($destinationPath, $destinationFileName);
      $pathname = $destinationPath.'\\'.$destinationFileName;
      
      PdfLabeler::dispatch($pathname, Auth()->user());
      Candidate::where('user_id', Auth()->user()->id)
      ->update([
          'cv' => $pathname,
      ]);


    }else{
      $pathname = $request->input('use_old_cv');
    }
      // User has not applied, create a new application
      Application_form::create([
          'user_id' => auth()->user()->id,
          'job_id' => $id,
          'description'=> $request->description,
          'is_registered' => 1,
          'cv' => $pathname,
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
        'description' => 'required|max:1000',
        'cv' => $request->input('use_old_cv') ? [] : 'required|mimes:pdf',
    ]);
 
       // Check if the same email and job_id combination already exists
       $existingApplication = Application_form::where('job_id', $id)
       ->where('email', $request->input('email'))
       ->first();

   if ($existingApplication) {

       return redirect()->back()->with('error', 'You have already applied for this job with the same email.');
   }
   
    if (!$request->input('use_old_cv')) {


      $cvFile = $request->file('cv');
      $destinationPath = public_path('cv');
      $destinationFileName = time() . '_' . $cvFile->getClientOriginalName();
      $cvFile->move($destinationPath, $destinationFileName);
      $pathname = $destinationPath.'\\'.$destinationFileName;
      
      PdfLabeler::dispatch($pathname);
      Candidate::create([
        'user_id' => Auth()->user()->id,
        'cv' => $pathname,
        'profession' => $request->profession,
    ]);

    }else{
      $pathname = $request->input('use_old_cv');
    }
  
    Application_form::create([
        'job_id' => $id,
        'name' => $request->input('name'),
        'position' => $request->input('position'),
        'email' => $request->input('email'),
        'description' => $request->input('description'),
        'status' => 'In Process',
        'is_registered' => 0,
        'cv' => $pathname,
        'user_ip' => $request->ip(),
       ]);

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
