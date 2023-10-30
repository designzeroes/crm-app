@extends('layouts.controlpanel')

@section('content')
    <div class="container mt-4">
        <h2>Manage Permissions</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
 

        <div>
            <h3 class="mt-4">Roles and Permissions:</h3>
            <form method="POST" action="{{ route('role-permission-set', ['id' => $role->id]) }}">
                @csrf
                @method('PUT') {{-- Change 'your.update.route' to your actual update route --}}
        
                <table class="table">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Permissions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($allpermission as $permission)
                                    <label>
                                        <input type="checkbox" name="role_permissions[]" value="{{ $permission->id }}" {{ in_array($permission->id, $permissions->pluck('id')->toArray()) ? 'checked' : '' }}>
                                        {{ $permission->name }}
                                    </label>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
        
                <button type="submit" class="btn btn-primary">Update Permissions</button>
            </form>
        </div>
        
@endsection
