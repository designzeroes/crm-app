<section>
  <h5 class="card-header">Profile Details</h5>
<div class="card-body">
    <div class="d-flex align-items-start align-items-sm-center gap-4">
      <img
        src="../assets/img/avatars/1.png"
        alt="user-avatar"
        class="d-block rounded"
        height="100"
        width="100"
        id="uploadedAvatar"
      />
      <div class="button-wrapper">
        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
          <span class="d-none d-sm-block">Upload new photo</span>
          <i class="bx bx-upload d-block d-sm-none"></i>
          <input
            type="file"
            id="upload"
            class="account-file-input"
            hidden
            accept="image/png, image/jpeg"
          />
        </label>
        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
          <i class="bx bx-reset d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Reset</span>
        </button>

        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
      </div>
    </div>
  <hr class="my-0" />
  <div class="card-body">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
      <div class="row">
          <div class="mb-3 col-md-6">
              <x-input-label for="name" :value="__('User Name')" />
              <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
              <x-input-error class="mt-2" :messages="$errors->get('name')" />
          </div>
          <div class="mb-3 col-md-6">
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
              <x-input-error class="mt-2" :messages="$errors->get('email')" />
          </div>
          @role('organization')
          <div class="mb-3 col-md-6">
            <x-input-label for="organization_name" :value="__('Organization Name')" />
            <x-text-input id="organization_name" name="organization_name" type="text" class="form-control" :value="old('organization_name', $profile->organization_name)" required autocomplete="organization_name" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="website" :value="__('Website')" />
            <x-text-input id="website" name="website" type="text" class="form-control" :value="old('website', $profile->website)" required autocomplete="website" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="form-control" :value="old('address', $profile->address)" required autocomplete="address" />
        </div>
        <div class="mb-3 col-md-12">
          <x-input-label for="description" :value="__('Description')" />
          
            <textarea
              id="description"
              class="form-control"
              name="description"
              placeholder="Tell us about the project!"
              aria-label="Tell us about the project!"
              aria-describedby="basic-icon-default-message2"
            >{{old('current_position', $profile->description)}}</textarea>
          
        </div>
          @endrole
          @role('candidate')
          <div class="mb-3 col-md-6">
            <x-input-label for="skill" :value="__('Skill')" />
            <x-text-input id="skill" name="skill" type="text" class="form-control" :value="old('skill', $profile->skill)" required autocomplete="skill" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="experience" :value="__('Experience in Years')" />
            <x-text-input id="experience" name="experience" type="text" class="form-control" :value="old('experience', $profile->experience)" required autocomplete="experience" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="profession" :value="__('Profession')" />
            <x-text-input id="profession" name="profession" type="text" class="form-control" :value="old('profession', $profile->profession)" required autocomplete="profession" />
          </div>
          @endrole
          @role(['employee','candidate'])
            <div class="mb-3 col-md-6">
              <x-input-label for="Phone" :value="__('Phone Number')" />
              <x-text-input id="Phone" name="phone_number" type="number" class="form-control" :value="old('phone_number', $profile->phone_number)" required autocomplete="phone_number" />
          </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="form-control" :value="old('address', $profile->address)" required autocomplete="address" />
        </div>
          <div class="mb-3 col-md-6">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="form-control" required autocomplete="gender">
                <option value="" disabled selected>Select Gender</option>
                <option value="male" @if(old('gender', $profile->gender) === 'male') selected @endif>Male</option>
                <option value="female" @if(old('gender', $profile->gender) === 'female') selected @endif>Female</option>
                <option value="other" @if(old('gender', $profile->gender) === 'other') selected @endif>Other</option>
            </select>
          </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="birth_date" :value="__('Birth Date')" />
              <x-text-input id="birth_date" name="birth_date" type="date" class="form-control" :value="old('birth_date', $profile->birth_date)" required autocomplete="birth_date" />
          </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="zipcode" :value="__('Zipcode')" />
              <x-text-input id="zipcode" name="zipcode" type="text" class="form-control" :value="old('zipcode', $profile->zipcode)" required autocomplete="zipcode" />
          </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="degree_id" :value="__('Latest Degree')" />
              <select name="degree_id" id="degree_id" class="form-select">
                <option value="{{ $degree->id}}">{{ $degree->degree_title }}</option>
                @foreach($degrees as $degree)
                    <option value="{{$degree->id }}">{{ $degree->degree_title }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="latest_university" :value="__('Latest University')" />
              <x-text-input id="latest_university" name="latest_university" type="text" class="form-control" :value="old('latest_university', $profile->latest_university)" autocomplete="latest_university" />
            </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="current_organization" :value="__('Current Organization')" />
              <x-text-input id="current_organization" name="current_organization" type="text" class="form-control" :value="old('current_organization', $profile->current_organization)" autocomplete="current_organization" />            </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="current_department" :value="__('Current Department')" />
              <x-text-input id="current_department" name="current_department" type="text" class="form-control" :value="old('current_department', $profile->current_department)" autocomplete="current_department" />
            </div>
            <div class="mb-3 col-md-6">
              <x-input-label for="current_position" :value="__('Current Position')" />
              <x-text-input id="current_position" name="current_position" type="text" class="form-control" :value="old('current_position', $profile->current_position)" autocomplete="current_position" />
            </div>
            <div class="mb-3 col-md-12">
              <x-input-label for="description" :value="__('Description')" />
              
                <textarea
                  id="description"
                  class="form-control"
                  name="description"
                  placeholder="Tell us about the project!"
                  aria-label="Tell us about the project!"
                  aria-describedby="basic-icon-default-message2"
                >{{old('current_position', $profile->description)}}</textarea>
              
            </div>
            @endrole

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        

        <div class="mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
      </div>
    </form>
  </div>
</div>
</section>
