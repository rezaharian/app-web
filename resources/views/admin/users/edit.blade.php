<!-- resources/views/user/edit.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        <!-- Form untuk mengedit pengguna -->
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>

            <!-- Tambahkan input atau field lainnya sesuai kebutuhan -->
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>

            <!-- Tambahkan input untuk password -->
            <label for="password">Password:</label>
            <input type="password" name="password">

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation">

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
