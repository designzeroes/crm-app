@extends('layouts.controlpanel')
@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{__('Account Settings')}} /</span> {{__('Profile')}}</h4>
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages-account-settings-notifications.html"
                    ><i class="bx bx-bell me-1"></i> Notifications</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages-account-settings-connections.html"
                    ><i class="bx bx-link-alt me-1"></i> Connections</a
                  >
                </li>
              </ul>

            <div class="card mb-4">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="card mb-4">
                 @include('profile.partials.update-password-form')
             </div>
            <div class="card md-4">
                 @include('profile.partials.delete-user-form')
            </div>
          </div>  
        </div>    
    </div>    
@stop
