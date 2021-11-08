@extends('layouts.layout')
@section('content')
    <div class="account-container">
        <div class="account-feed">
            <div class="account-details">
                <div class="account-title">
                    <h2>Account</h2>
                </div>
                <div class="account-first-name">
                    {{--                    <p>First name: {{ Auth::user()->first_name }}</p>--}}
                    <p>First name: Eva</p>
                </div>
                <div class="account-last-name">
                    {{--                    <p>Last name: {{ Auth::user()->name }}</p>--}}
                    <p>Last name: Roets</p>
                </div>
                <div class="account-email">
                    {{--                    <p>Email: {{ Auth::user()->email }}</p>--}}
                    <p>Email: eva_roets@hotmail.com</p>
                </div>
                <div class="btn-container">
                    <a href={{ route('recipebook') }}>
                        <button class="recipe-btn">
                            <i class="fas fa-eye"></i>&nbsp; See my recipes
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
