@extends('layouts.controlpanel')

@section('content')
    <div class="container mt-4">
        <h2>Manage Permissions</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('role-permission') }}">
            @csrf
            
            <div class="form-group col-5">
                <label for="role_id">Select Role:</label>
                <select class="form-select" name="role_id" id="role_id">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">check Permissions</button>
        </form>


{{-- 
        <h3 class="mt-4">Users and Permissions:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Removed Permissions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach ($user->permissions as $permission)
                                {{ $permission->name }}
                                <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
@endsection
