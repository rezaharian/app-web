<!-- resources/views/user/show.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <!-- Tampilkan detail pengguna -->
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role }}</p>
        <!-- Tampilkan password sesuai kebijakan keamanan yang diterapkan -->
        <p>Password: [Hidden for security reasons]</p>

        <!-- Tombol untuk mengarahkan ke halaman edit -->
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>

        <!-- Form untuk menghapus pengguna -->
        <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
        </form>
    </div>
@endsection
