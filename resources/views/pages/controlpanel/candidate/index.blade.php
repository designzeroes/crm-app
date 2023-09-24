@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Candidates /</span> Candidate List</h4>
    
  
      <!-- Hoverable Table rows -->
      <div class="card">
        <h5 class="card-header">Candidate list</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach( $applications as $application)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$application->name}}</strong></td>
                <td>{{$application->email}}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <span class="badge {{ $application->status === 'Selected' ? 'bg-label-success' : ($application->status === 'Rejected' ? 'bg-label-danger' : 'bg-label-info') }}">
                      {{ $application->status }}
                  </span>
                    
                  </ul>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                       <a class="dropdown-item" href="{{ route('view_candidates', [ 'form_id' => $application->id]) }}"
                        ><i class="bx bx-edit-alt me-1"></i> View</a> 
                       
                      <form method="POST" action="" class="delete-form">
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