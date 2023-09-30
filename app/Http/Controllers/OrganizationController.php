<?php

namespace App\Http\Controllers;

use App\Models\Application_form;
use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orgsdata = User::join('organizations', 'users.id', 'organizations.user_id')
        ->get();

        foreach ($orgsdata as $org) {

            $empcount[] = Employee::where('creator_id', $org->user_id)->count();
            $jobcount[] = Job::where('organization_id', $org->user_id)->count();
        }


        return view('pages.controlpanel.organization.index', ['organizations'=>$orgsdata, 'counts'=>$empcount, 'jobcount'=>$jobcount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $org = User::join('organizations', 'users.id', '=', 'organizations.user_id')
        ->where('users.id', $id)
        ->select('users.email', 'organizations.*')
        ->first();

        return view('pages.controlpanel.organization.show', ['org'=>$org]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $org = User::join('organizations', 'users.id', '=', 'organizations.user_id')
        ->where('users.id', $id)
        ->select('users.email', 'organizations.*')
        ->first();

        return view('pages.controlpanel.organization.edit', ['org'=>$org]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'email' => 'required|email',
            'organization_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'website' => 'nullable|max:255',
        ]);
        
        User::where('id',$id)->update(['email'=> $request->email]);
        Organization::where('user_id',$id)->update([
            'organization_name'=> $request->organization_name,
            'address' =>$request->address,
            'description'=> $request->description,
            'website'=> $request->website,
        ]);

      return redirect()->route('organization.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $user = User::find($id);

    if (!$user) {
        return redirect()->route('your.error.route');
    }

    Organization::where('user_id', $id)->delete();
    Employee::where('creator_id', $id)->delete();
    $jobs = Job::where('organization_id', $id)->get();

    foreach ($jobs as $job) {
        Application_form::where('job_id', $job->id)->delete();
    }

    $jobs->each->delete();
    $user->delete();

    return redirect()->route('organization.index');
    
    }
}
