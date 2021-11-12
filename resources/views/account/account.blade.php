@extends('layouts.layout')
@section('content')
    <div class="account-container">
        <div class="account-feed">
            <div class="account-details">
                <div class="account-title">
                    <h2>Account</h2>
                </div>
                <div class="account-box">
                    <p><b>First name:&nbsp;</b>{{ Auth::user()->first_name }}</p>
                    <p><b>Last name:&nbsp;</b> {{ Auth::user()->name }}</p>
                    <p><b>Email:&nbsp;</b> {{ Auth::user()->email }}</p>
                    <p><b>Password:&nbsp;</b>{{ Auth::user()->password }}</p>
                    <div class="password-box">
{{--                         TODO: render account password in asteriks--}}
{{--                        <p><b>Password:&nbsp;</b></p>--}}
{{--                        <div ><p>{{ Auth::user()->password }}</p></div>--}}
{{--                        <label class="hide-password"> Show/hide password--}}
{{--                            <input type="checkbox">--}}
{{--                            <span class="toggle"></span>--}}
{{--                        </label>--}}
                    </div>
                    <div class="account-btn-container">
                        <a href="{{ route('logout') }}">
                            <button class="logout-btn" type="submit" name="logout" value="Logout">
                                <i class="fas fa-sign-out-alt"></i>&nbsp;<b>Log out</b>
                            </button>
                        </a>
                        <a href={{ route('recipeBook') }}>
                            <button class="recipe-btn">
                                <i class="fas fa-eye"></i>&nbsp; <b>My recipes</b>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
