@extends('layouts.app')

@section('content')
    <h1>User Registration/Login</h1>


    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Register</button>
    </form>


    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="login_email">Email:</label>
        <input type="email" id="login_email" name="email" required>

        <label for="login_password">Password:</label>
        <input type="password" id="login_password" name="password" required>

        <button type="submit">Login</button>
    </form>
@endsection
