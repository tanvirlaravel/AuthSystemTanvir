

@extends('app')

@section('title', 'Register')

@section('content')
    <div class="container mt-5">


<form action="{{ route('register') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

    </div>
@endsection
