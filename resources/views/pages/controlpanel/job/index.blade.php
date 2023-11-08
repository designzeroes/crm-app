@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <x-page-title menu='Job' page='Index'/>

    @can('job-create') <a href="{{route('job.create')}}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>@endcan
    </div>
  
      <!-- Hoverable Table rows -->
      <div class="card">
        <h5 class="card-header">jobs list</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Project Title</th>
                <th>Budget</th>
                <th>Bid Closing</th>
                <th>Candidates</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach( $jobs as $job)
              <tr >
                <td> <strong>{{$job->job_title}}</strong></td>
                <td>${{$job->budget}}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    {{$job->bid_close}}
                  </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">{{$job->application_form_count}}</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      @can('job-view')
                      <a class="dropdown-item"  href="{{ route('job.show', ['job' => $job->id]) }}"
                        ><i class="fa-regular fa-file-lines me-2"></i> View</a
                      >
                      @endcan
                      <a class="dropdown-item"  href="{{ route('applier_candidates', ['id' => $job->id]) }}"
                        ><i class="bx bx-user me-1"></i> Candidates</a
                      >
                      @can('job-edit')
                      <a class="dropdown-item" href="{{ route('job.edit', ['job' => $job->id]) }}">
                          <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      @endcan
                      @can('job-delete')
                          <form method="POST" action="{{ route('job.destroy', ['job' => $job->id]) }}" class="delete-form">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item">
                                  <i class="bx bx-trash me-1"></i> Delete
                              </button>
                          </form>
                      @endcan
                    </div>
                  </div>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Hoverable Table rows -->
    </div>
  </div>
  <!-- / Content -->

@stop