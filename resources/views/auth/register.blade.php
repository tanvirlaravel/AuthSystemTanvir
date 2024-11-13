

@extends('app')

@section('title', 'Register')

@section('content')
    <div class="container mt-5">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form action="{{ route('register') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" >

    <label for="email">Email</label>
    <input type="email" name="email" >

    <label for="password">Password</label>
    <input type="password" name="password" >

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" >

    <button type="submit">Register</button>
</form>

    </div>
@endsection
