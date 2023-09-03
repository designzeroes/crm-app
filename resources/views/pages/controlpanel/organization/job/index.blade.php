@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Jobs /</span> Created Jobs List</h4>
     <a href="{{route('job.create')}}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>
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
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach( $jobs as $job)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$job->job_title}}</strong></td>
                <td>${{$job->budget}}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    {{$job->bid_close}}
                  </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">{{$job->status}}</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('job.edit', ['job' => $job->id]) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form method="POST" action="{{ route('job.destroy', ['job' => $job->id]) }}" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item">
                            <i class="bx bx-trash me-1"></i> Delete
                        </button>
                      </form>
                    
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