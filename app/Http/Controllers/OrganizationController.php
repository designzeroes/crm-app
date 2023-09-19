<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Job;
use App\Models\User;
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
