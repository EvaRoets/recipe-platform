<header>
    <div class="navbar">
        {{--    logo starts here--}}
        <div class="logo-container">
            <a href={{ route('home') }}>
                <img class="logo" src={{ asset('images/logo/flavorly-full-crop.png') }} alt="Flavorly-logo"/>
            </a>
        </div>

        {{--    search bar starts here--}}
        <form method="get" action={{ route('search') }}>
            <div class="search-container">
                <input type="search" placeholder="Search your recipe..." name="search">
                <button class="search-btn" type="submit" value="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>

        {{--    profile collapse starts here--}}
        <div class="profile-container">
{{--            @if(Auth::check())--}}
{{--                <a href={{ route('account') }}>--}}
{{--                    <img class="profile" src={{ asset('images/account.png') }} alt="profile"/>--}}
{{--                    Welcome, {{ Auth::user()->first_name }}--}}
{{--                </a><br>--}}
{{--                <a href={{ route('logout') }}>Logout</a>--}}
{{--            @else--}}
            <button type="button" class="collapsible">
                <img class="profile"
                     src={{ asset('images/account.png') }} alt="profile"/>
            </button>
            {{--            @endif--}}
            <div class="content">
                <a href={{ url ('/account') }}>
                    <div type="button" class="content-account">
                        <i class="fas fa-user-circle"></i>&nbsp; <b>My account</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{ url ('/recipeBook') }}>
                    <div class="content-recipes">
                        <i class="fas fa-bookmark"></i>&nbsp;<b>My recipes</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{url('/settings')}}>
                    <div class="content-settings">
                        <i class="fas fa-cogs"></i>&nbsp; <b>Settings</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{url('/logout')}}>
                    <div class="content-logout">
                        <i class="fas fa-sign-out-alt"></i>&nbsp;<b>Log out</b> </br>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>




