{{--TODO add action_page.php--}}

<header>
    <div class="navbar">
        {{--    logo starts here--}}
        <div class="logo-container">
            <a href={{ route('home') }}>
                <img class="logo" src={{ asset('images/logo/flavorly-full-crop.png') }} alt=""/>
            </a>
        </div>

        {{--    search bar starts here--}}
        <div class="search-container">
{{--            <form action="">--}}
                    <input type="text" placeholder="Search..." name="search">
                    <button class="search" type="submit" value="submit">
                        <i class="fa fa-search"></i>
                    </button>
{{--            </form>--}}
        </div>
        {{--    profile collapse starts here--}}
        <div class="profile-container">
            @if(Auth::check())
                <a href={{ route('account') }}>
                    <img class="profile" src={{ asset('images/account.png') }} alt=""/></br>
                    Welcome, {{ Auth::user()->first_name }}              
                </a><br>
                <a href={{ route('logout') }}>Logout</a>
            @else
                <button type="button" class="collapsible"> 
                    <a href={{ route('login') }}><img class="profile" src={{ asset('images/account.png') }} alt=""/></a>
                </button>
                <div class="content">
                    <p>Lorem ipsum...</p>
                </div>
            @endif
            
        </div>
    </div>
</header>
