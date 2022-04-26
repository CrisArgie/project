<aside class="sidebar-menu" id="accordionSidebar">
    {{-- top sidebar --}}
    <div class="sidebar-menu-items my-1">
        {{-- button --}}
        <button class="button-style-2">
            <img class="sidebar-icon" src="../icons/svg-files/chevron-left.svg" >
        </button>
    </div>
    <div class="sidebar-menu-items my-1">
        <a>
            <img class="sidebar-icon" src="../icons/svg-files/archive.svg" >
            Dashboard
        </a>
    </div>
    {{-- middle sidebar --}}
    <ul class="list-unstyled flex-grow-1 g-2">
        <li>
            <a href="">
                <img class="sidebar-icon" src="../icons/svg-files/users.svg" style=" width:34px; height:34px;">
                Users
            </a>
        </li>
        <li>
            <a href="">
                <img class="sidebar-icon" src="../icons/svg-files/add-files.svg" >
                Requests
            </a>
        </li>
    </ul>
    {{-- bottom sidebar --}}
    <ul class="list-unstyled g-2">
        <li>
            <a href="">
                <img class="sidebar-icon" src="../icons/svg-files/information.svg" >
                About
            </a>
        </li>
        <li>
            <a href="">
                <img class="sidebar-icon" src="../icons/svg-files/cog.svg" >
                Settings
            </a>
        </li>
        <li>
            <form   method="POST" 
                    action="/logout"
                    class=""
            >
                @csrf
                
                <button type="submit" 
                        class="button-style-3"
                >
                    <img class="sidebar-icon" src="../icons/svg-files/exit.svg" >        
                    Log out
                </button>
            </form>
        </li>
        <li>
            <a class="sidebar-menu-items" href="">
                <img class="sidebar-icon" src="../icons/svg-files/envelope.svg" alt="" >
            </a>
        </li>
        <li>
            <a class="sidebar-menu-items" href="">
                <img class="sidebar-icon" src="../icons/svg-files/world.svg" alt="" >
            </a>
        </li>
        <li>
            <a class="sidebar-menu-items" href="">
                <img class="sidebar-icon" src="../icons/svg-files/facebook-oval.svg" alt="" >
            </a>
        </li>
    </ul>
</aside>