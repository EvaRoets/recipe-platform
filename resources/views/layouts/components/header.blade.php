{{--TODO add action_page.php--}}
{{--TODO add #home--}}

<header>
    <div class="navbar">
        {{--    logo starts here--}}
        <div class="logo-container">
            <a href="#home">
                <img class="logo" src={{ asset('images/logo/flavorly-icon.png') }} alt=""/></a>
        </div>

        {{--    search bar starts here--}}
        <div class="searchbar">
            <form action="">
                <label>
                    <input type="text" placeholder="Search..." name="search">
                    <button class="search-button" type="submit" value="submit">
                        <i class="fa fa-search"></i>
                    </button>


                </label>
            </form>
        </div>

        {{--    profile collapse starts here--}}
        <div class="profile">
            <button type="button" class="collapsible">Profile</button>
            <div class="content">
                <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>
</header>
