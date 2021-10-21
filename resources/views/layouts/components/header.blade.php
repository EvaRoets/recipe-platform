{{--TODO add action_page.php--}}
{{--TODO add #home--}}

<header>
    <div class="navbar">
        {{--    logo starts here--}}
        <div class="logo-container">
            <a href="#home">
                <img class="logo" src={{ asset('images/logo/flavorly-full-crop.png') }} alt=""/>
            </a>
        </div>

        {{--    search bar starts here--}}
        <div class="search-container">
{{--            <form action="">--}}
                    <input type="text" placeholder="Search..." name="search">
                    <button class="search-button" type="submit" value="submit">
                        <i class="fa fa-search"></i>
                    </button>
{{--            </form>--}}
        </div>
        {{--    profile collapse starts here--}}
        <div class="profile-container">
            <button type="button" class="collapsible">
                <img class="profile" src={{ asset('images/account.png') }} alt=""/>
            </button>
            <div class="content">
                <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>
</header>
