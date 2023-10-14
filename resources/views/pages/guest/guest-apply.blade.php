@extends('layouts.guest')
@section('content')
<!-- Content -->

 <div class="container ">
        <!-- Register -->
        <div class="card mt-4 w-75 mx-auto ">
            <div class="card-body">
                <h4 class="mb-2">Register Here </h4>
                <p class="mb-4">Registering on the portal would  increase 70-80%  more chance to get hired quickly.  </p>
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
                        <button class="btn-theme btn-two d-grid w-100" type="submit">{{ __('Submit') }}</button>
                    </div>
                </form>

                <p class="text-center">
                    <span>Have account?</span>
                <a href="{{route('user-login')}}">
                    <span>Login Here</span>
                </a>
                <span> Or</span>
                <a href="{{route('user-register')}}">
                    <span>Create an account</span>
                </a>
                </p>
                
            </div>
        </div>
        <!-- /Register -->
</div>

<!-- / Content -->

@stop

