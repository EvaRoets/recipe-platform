{{--TODO add action_page.php--}}
{{--TODO add #home--}}

<header>
    <div class="navbar">
{{--    logo starts here--}}
        <div class="logo">
            <img class="" src="" alt=""/>
            <a class="active" href="#home">Home</a>
        </div>

{{--    search bar starts here--}}
        <div class="searchbar">
                <form action="/action_page.php">
                    <label>
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
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
