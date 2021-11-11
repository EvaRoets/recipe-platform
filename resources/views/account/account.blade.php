@extends('layouts.layout')
@section('content')
    <div class="account-container">
        <div class="account-feed">
            <div class="account-details">
                <div class="account-title">
                    <h2>Account</h2>
                </div>
                <div class="account-box">
                    {{--                    <p>First name: {{ Auth::user()->first_name }}</p>--}}
                    <p>First name: Eva</p>
                    {{--                    <p>Last name: {{ Auth::user()->name }}</p>--}}
                    <p>Last name: Roets</p>
                    {{--                    <p>Email: {{ Auth::user()->email }}</p>--}}
                    <p>Email: eva_roets@hotmail.com</p>
                    {{--                    TODO: display password with asterisk--}}
                    {{--                    <p>Password: {{ Auth::user()->password }}</p>--}}
                    <p>Password: ******************</p>
                    {{--                    </div>--}}
                    <div class="account-btn-container">
                        <a href={{ route('recipeBook') }}>
                            <button class="recipe-btn">
                                <i class="fas fa-eye"></i>&nbsp; See my recipes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
