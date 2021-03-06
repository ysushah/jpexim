<style>

.logo {
  width: auto;
  height: 40px;
  object-fit: cover;
}
</style>
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{ route('dashboard') }}">
                <div class="logo">
                 <img class="img-fluid logo" src="{{ asset('uploads/logo/'.$settings->logo) }}" alt="Theme-Logo">
                {{-- <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Theme-Logo"> --}}
                </div>
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">

                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">

                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('images/avatar-4.jpg') }}" class="img-radius"
                                alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">

                            <li>
                                <a href="user-profile.htm">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <i class="feather icon-log-out"></i>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>

                            </li>




                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
