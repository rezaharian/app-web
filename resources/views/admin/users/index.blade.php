<!-- resources/views/user/index.blade.php -->
@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>User List</h1>

        <!-- Tombol "Tambah" untuk mengarahkan ke halaman create -->
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Tambah</a>

        <!-- Tabel untuk menampilkan daftar pengguna -->
        <table class="table table-sm" style="font-size: 11pt;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <!-- Tombol "Show" untuk mengarahkan ke halaman show -->
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
