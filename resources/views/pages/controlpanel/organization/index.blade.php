@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">organizations /</span> Created organizations List</h4>
     <a href="{{route('organization.create')}}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>
    </div>
  
      <!-- Hoverable Table rows -->
      <div class="card">
        <h5 class="card-header">organizations list</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Organization Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Employees</th>
                <th>Jobs</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach( $organizations as $index=>$organization)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$organization->organization_name}}</strong></td>
                <td>{{$organization->email}}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    {{$organization->website}}
                  </ul>
                </td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    {{$counts[$index]}}
                  </ul>
                </td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    {{$jobcount[$index]}}
                  </ul>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('organization.show', ['organization' => $organization->user_id]) }}"
                        ><i class="bx bx-edit-alt me-1"></i> View</a
                      >
                      <form method="POST" action="{{ route('organization.destroy', ['organization' => $organization->user_id]) }}" class="delete-form">
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