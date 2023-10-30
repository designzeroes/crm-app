@extends('layouts.controlpanel')

@section('content')
    <div class="container mt-4">
        <h2>Manage Permissions</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('user-permission') }}">
            @csrf

           <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="user_id">Select User:</label>
                        <select class="form-select" name="user_id" id="user_id">
                            <option disabled selected>-- select user --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->user_id }}">{{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="user_email">Input User Email:</label>
                        <input type='text' class="form-control" placeholder="Give Email to Set Permission" name="user_email" id="user_email">
                    </div>
                </div>    
           </div>
            <button type="submit" class="btn btn-primary">Select User</button>
        </form>

@endsection
