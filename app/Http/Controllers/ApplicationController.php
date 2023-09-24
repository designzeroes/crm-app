<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
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

        
        $applications1 = Application_form::join('candidates', 'application_form.user_id', '=', 'candidates.user_id')
        ->join('users', 'candidates.user_id', '=', 'users.id')
        ->where('application_form.job_id', $id)
        ->select('application_form.*', 'users.name', 'users.email')
        ->get();
    

$applications2 = Application_form::where('user_id', NULL)->get();

// Merge the two collections into a single array
$mergedApplications = $applications1->concat($applications2);
//dd($mergedApplications);

return view('pages.controlpanel.candidate.index', ['applications' => $mergedApplications]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function view($form_id)
    {

         // Run the first query when user_id is not NULL
         $user = Application_form::join('candidates', 'application_form.user_id', '=', 'candidates.user_id')
         ->join('users', 'candidates.user_id', '=', 'users.id')
         ->where('application_form.id', $form_id)
         ->select('application_form.*', 
         'candidates.resume',
         'candidates.phone_number',
         'candidates.gender',
         'candidates.birth_date',
         'candidates.address',
         'candidates.zipcode',
         'candidates.latest_degree',
         'candidates.latest_university',
         'candidates.current_organization',
         'candidates.current_department',
         'candidates.current_position',
         'candidates.description',
         'candidates.skill',
         'users.name',
         'users.email',
         )->first();

        if (is_null($user)) {
            $user = Application_form::where('application_form.id', $form_id)
                ->first();
        }
        
    
       return view('pages.controlpanel.candidate.view',['user'=>$user]);
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
             $job_id = $request->job_id;
        Application_form::where('id', $id)
        ->update([
            'status' => $request->status,
        ]);
          

        return redirect()->route('applier_candidates', ['id' => $job_id]);


    }


    public function destroy(string $id)
    {
        //
    }

}
