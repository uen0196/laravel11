@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Login Admin</h3>
        <form method="POST" action="{{ route('admin-login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Admin</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Masuk</button>
            </div>
        </form>
    </div>
</div>
@endsection
