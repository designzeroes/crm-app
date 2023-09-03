@extends('layouts.controlpanel')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Employee/</span> Create Employee</h4>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Create Form</h5>
            <small class="text-muted float-end">Fill all the fields</small>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('employee.store')}}">
              @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="this is test" name="name" id="basic-default-name" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Gender</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="Male" name="gender" id="basic-default-name" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="email" id="basic-default-name" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Address</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="address"
                    class="form-control"
                    id="basic-default-company"
                    value="this is test"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Zip Code</label>
                <div class="col-sm-4">
                  <input
                    type="number"
                    value="98766"
                    name="zipcode"
                    class="form-control"
                    id="basic-default-company"
                  />
                </div>

                <label class="col-sm-2 col-form-label" for="basic-default-company">- Date of Birth</label>
                <div class="col-sm-4">
                  <input
                    type="date"
                    class="form-control"
                    name="birth_date"
                    id="basic-default-company"
                    value="05-08-23"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Last Degree</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    name="latest_degree"
                    id="basic-default-company"
                    value="this is test"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Phone Number</label>
                <div class="col-sm-10">
                  <input
                    type="number"
                    class="form-control"
                    name="phone_number"
                    id="basic-default-company"
                    value="09873887637"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Last University</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    name="latest_university"
                    id="basic-default-company"
                    value="this is test"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Current Organization</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    name="current_organization"
                    id="basic-default-company"
                    value="design zeros"
                  />
                </div>
              </div>
                <!-- Current Department -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="current-department">Current Department</label>
                  <div class="col-sm-10">
                      <input
                          type="text"
                          name="current_department"
                          class="form-control"
                          id="current-department"
                          value="web devloper"
                      />
                  </div>
                </div>

                <!-- Current Position -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="current-position">Current Position</label>
                  <div class="col-sm-10">
                      <input
                          type="text"
                          name="current_position"
                          class="form-control"
                          id="current-position"
                          value="junier devloper"
                      />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="password">Password</label>
                  <div class="col-sm-10">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      required autocomplete="new-password" />
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="password_confirmation">{{__('Confirm Password')}}</label>
                  <div class="col-sm-10">
                    <input
                      type="password"
                      id="password_confirmation"
                      class="form-control"
                      name="password_confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      required autocomplete="new-password" />
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                  <div class="col-sm-10">
                    <textarea
                      id="basic-default-message"
                      class="form-control"
                      name="description"
                      placeholder="Tell us about the project!"
                      aria-label="Tell us about the project!"
                      aria-describedby="basic-icon-default-message2"
                    >This is test</textarea>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->

@stop