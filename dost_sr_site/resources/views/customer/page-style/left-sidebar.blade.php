<aside class="sidebar open noPrint" data-slider>
    <div class="admin-top-sidebar">
        <div class="sidebar-list">
            <button class="button-style-2" data-menu-icon-btn>
                <img class="sidebar-icon image-chevron">
            </button>
        </div>

        <hr class="hr-linebreak">

        <div class="sidebar-list">
            <div class="sidebar-list-item">
                <a href="/home" class="sidebar-link {{ request()->is('home') ? 'active' : '' }}">
                    {{-- <a href="#" class="sidebar-link active"> --}}
                    <img class="sidebar-icon" src="/icons/svg-files/home.svg">
                    <div class="hidden-sidebar text-capitalize">home</div>
                </a>
            </div>
        </div>
    </div>
    <hr class="hr-linebreak">
    <div class="middle-sidebar">
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="/customer/request"
                    class="sidebar-link {{ request()->is('customer/request') ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/add-files.svg">
                    <div class="hidden-sidebar text-capitalize">Request</div>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="/view/requests" class="sidebar-link {{ request()->is('view/requests') ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/agenda.svg">
                    <div class="hidden-sidebar">View Requests</div>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="/abouts" class="sidebar-link {{ request()->is('abouts') ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/information.svg">
                    <div class="hidden-sidebar">About</div>
                </a>
            </li>
            {{-- <li class="sidebar-list-item">
                <a href="" class="sidebar-link {{ (request()->is('')) ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/user.svg">
                    <div class="hidden-sidebar">Profile</div>
                </a>
            </li> --}}
        </ul>
    </div>

    <hr class="hr-linebreak">

    <div class="bottom-sidebar">

        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="dost13@caraga.dost.gov.ph" onclick="copyURI(event)" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/envelope.svg">
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="https://caraga.dost.gov.ph/" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/world.svg">
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="https://www.facebook.com/DOST.Caraga" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/facebook-oval.svg">
                </a>
            </li>
        </ul>
    </div>

    <script>
        function copyURI(evt) {
            evt.preventDefault();
            navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                alert('Link copied.');
            }, () => {
                alert('Failed to copy link.');
            });
        }
    </script>
</aside>
