<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use App\Models\Application_form;
use App\Models\Organization;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        

            // Retrieve all Application_form records where job_id is in the $jobIds array
            $applications = Application_form::join('candidates', 'application_form.user_id', '=', 'candidates.user_id')
            ->join('users', 'candidates.user_id', '=', 'users.id')
            ->where('application_form.job_id', $id)
            ->get();


        return view('pages.controlpanel.candidate.index', ['applications' => $applications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function view($id, $job_id)
    {
    
  
       $user = User::join('candidates', 'users.id','candidates.user_id')
       ->select('candidates.*','users.name', 'users.email')
       ->where('users.id', $id)->first();




       return view('pages.controlpanel.candidate.view',['user'=>$user, 'job_id'=>$job_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function select(Request $request, string $id)
    {
    
        Application_form::where('job_id', $id)
        ->where('user_id', $request->user_id)
        ->update([
            'status' => $request->status,
        ]);
          

        return redirect()->route('applier_candidates', ['id' => $id]);


    }


    public function destroy(string $id)
    {
        //
    }

}
