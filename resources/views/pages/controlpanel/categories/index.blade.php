@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Category /</span> Categories List</h4>
     <a href="{{route('categories.create')}}"> <button type="button" class="btn rounded-pill btn-primary">Create</button></a>
    </div>
  
      <!-- Hoverable Table rows -->
      <div class="card">
        <h5 class="card-header">employees list</h5>
        <div class="table-responsive text-nowrap">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach( $cats as $cat)
              <tr>
                <td><strong>{{$cat->cat_name}}</strong></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('categories.edit', ['category' => $cat->id]) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form method="POST" action="{{ route('categories.destroy', ['category' => $cat->id]) }}" >
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