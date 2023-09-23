@extends('layouts.guest')
@section('content')
<!-- Content -->

 <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
        <div class="card-body">
            <h4 class="mb-2">Non-user Form </h4>
            <p class="mb-4">Please sign-up to see your applied jobs history</p>
                   <!-- Session Status -->
                   @if(session('error'))
                   <div class="alert alert-danger">
                      {{session('error') }}
                   </div>
                   @endif
               <form method="POST" action="{{ route('guest_apply',['job_id'=> $id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name')}}</label>
                    <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    required 
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email')}}</label>
                    <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your Email"
                    required 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            <div class="mb-3">
                <label for="position" class="form-label">{{ __('Position')}}</label>
                <input
                type="text"
                class="form-control"
                id="position"
                name="position"
                placeholder="Enter your Position"
                required 
                />
                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">{{ __('CV')}}</label>
                <input
                    type="file"
                    class="form-control"
                    id="cv"
                    name="cv"
                    accept=".pdf"
                    required
                />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Submit') }}</button>
            </div>
            </form>

            <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{route('register')}}">
                <span>Create an account</span>
            </a>
            </p>
        </div>
        </div>
        <!-- /Register -->
    </div>
    </div>
</div>

<!-- / Content -->

@stop

