@extends('layouts.layout')
@section('content')
    <div class="register-container">
        Check for errors
        @if ($message = Session::get('error'))
            <strong>{{ $message }}</strong>
        @endif
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="register-feed">
            <form method="post" action={{ route('registration') }} >
                @csrf
                <div class="register-details">
                    <div class="register-title">
                        <h2>Register</h2>
                    </div>
                    <div class="register-box">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name" required>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        <label for="password_confirmation">Password confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                        <div class="register-btn-container">
                            <a href="">
                                <button class="register-btn" type="submit"><i class="fas fa-sign-in-alt"></i>&nbsp;Register
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
