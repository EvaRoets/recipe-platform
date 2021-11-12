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
                <div class="td">
                    <input type="search" placeholder="It can just be pizza..." name="search">
                </div>
                <div class="td" id="s-cover">
                    <button class="search-btn-s-cover" type="submit" value="submit">
                        <div id="s-circle"></div>
                        <span></span>
                    </button>
                </div>
            </div>
        </form>


        {{--    profile collapse starts here--}}
        <div class="profile-container">
            @if(Auth::check())
                <button type="button" class="collapsible">
                    <div class="profile">
                        <img class="profile-account" src={{ asset('images/account.png') }} alt="profile"/>
                        <img class="profile-account-hover" src={{ asset('images/account-hover.png') }} alt="profile-hover"/>
                    </div>
                    <div class="welcome"><b>Welcome, {{ Auth::user()->first_name }}</b></div>
                </button>
            @endif
            <div class="content">
                <a href={{ route('account') }}>
                    <div type="button" class="content-account">
                        <i class="fas fa-user-circle"></i>&nbsp; <b>My account</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{ route('recipeBook') }}>
                    <div class="content-recipes">
                        <i class="fas fa-bookmark"></i>&nbsp;<b>My recipes</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{ route('settings') }}>
                    <div class="content-settings">
                        <i class="fas fa-cogs"></i>&nbsp; <b>Settings</b> </br>
                    </div>
                </a>
                <hr>
                <a href={{ route('confirmLogout') }}>
                    <div class="content-logout">
                        <i class="fas fa-sign-out-alt"></i>&nbsp;<b>Log out</b> </br>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>




