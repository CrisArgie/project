<aside class="sidebar open" data-slider>

@php
    $inSession = auth()->user()->user_type
@endphp

    <div class="admin-top-sidebar">
        <div class="sidebar-list">
            <button class="button-style-2" data-menu-icon-btn>
                <img class="sidebar-icon image-chevron">
            </button>
        </div>

        <hr class="hr-linebreak">

        <div class="sidebar-list">
            <div class="sidebar-list-item">
                <a href="/{{ $inSession }}/dashboard" class="sidebar-link {{ (request()->is( $inSession.'/dashboard')) ? 'active' : '' }}">
                {{-- <a href="#" class="sidebar-link active"> --}}
                    <img class="sidebar-icon" src="/icons/svg-files/archive.svg">
                    <div class="hidden-sidebar">Dashboard</div>
                </a>
            </div>
        </div>
    </div>
    <hr class="hr-linebreak">
    <div class="middle-sidebar">
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="/{{ $inSession }}/users" class="sidebar-link {{ (request()->is( $inSession.'/users')) ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/users.svg">
                    <div class="hidden-sidebar">Users</div>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="/{{ $inSession }}/requests" class="sidebar-link {{ (request()->is( $inSession.'/requests')) ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/add-files.svg">
                    <div class="hidden-sidebar">Requests</div>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="/{{ $inSession }}/abouts" class="sidebar-link {{ (request()->is( $inSession.'/abouts')) ? 'active' : '' }}">
                    <img class="sidebar-icon" src="/icons/svg-files/information.svg">
                    <div class="hidden-sidebar">About</div>
                </a>
            </li>
        </ul>
    </div>

    <hr class="hr-linebreak">

    <div class="bottom-sidebar">

        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/envelope.svg">
                </a>
            </li>
            <li class="sidebar-list-item">
                    <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/world.svg">
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="/icons/svg-files/facebook-oval.svg">
                </a>
            </li>
        </ul>
    </div>
</aside>
