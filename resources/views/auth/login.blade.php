

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


    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" >

        <label for="password">Password</label>
        <input type="password" name="password" >

        <button type="submit">Login</button>
    </form>

    </div>
@endsection
