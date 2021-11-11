@extends('layouts.layout')
@section('content')
    <div class="logout-container">
        <div class="logout-feed">
                <div class="logout-details">
                    <div class="logout-title">
                        <h2>Logout</h2>
                    </div>
                    <div class="logout-box">
                        <h4>Are you sure you want to log out?</h4>
                        <div class="logout-btn-container">
                            <a href="{{ route('home') }}">
                                <button class="home-btn" type="submit" name="home" value="home">
                                    <i class="fas fa-home"></i>&nbsp;<b>Home</b> </br>
                                </button>
                            </a>
                            <a href="{{ route('login') }}">
                                <button class="logout-btn" type="submit" name="logout" value="Logout">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;<b>Log out</b> </br>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logout-no-account">
                    <p>Didn't mean to log out? Log back in <a href={{ route('login') }}>here</a>!</p>
                </div>
        </div>
    </div>
@endsection
