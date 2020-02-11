@php
$currRoute = Route::current()->getName();
@endphp
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-brand navbar-expand-lg navbar-dark fixed-top" style="background-color: #000000">
                <a class="logo_light" href="{{ route('dashboard') }}"><img  src="{{ url('public/frontend/assets/images/icons/R7.png') }}"></a>
                <a class="logo_dark" href="{{ route('dashboard') }}"><img style="padding:12px 0px 0px 50px;" src="{{ url('public/frontend/assets/images/icons/R8.png') }}"></a>
                <button class="navbar-toggler" style="float: right;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ ($currRoute == 'dashboard')  ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown {{ $currRoute == 'technical-support' || $currRoute == 'services' || $currRoute == 'cloud-backup' || $currRoute == 'web-development' ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
                            <ul class="dropdown-menu" style:>
                                <li><a href="{{ route('web-development') }}">Web Development</a>
                                </li>
                                <li><a href="{{ route('technical-support') }}">Technical Support</a>
                                </li>
                                <!--<li><a href="{{ route('cloud-backup') }}">Cloud Backup</a>-->
                                </li>
                            </ul>
                        </li> 
<!--                        <li class="nav-item {{ ($currRoute == 'portfolio')  ? 'active' : '' }}">
                            <a class="nav-link abc" href="{{ route('portfolio') }}">Portfolio</a>
                        </li>-->
                        <li class="nav-item {{ ($currRoute == 'contact')  ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}" style="border: none;">Contact</a>
                        </li>    
                    </ul>
                </div>  
            </nav>
        </div>
    </div>
</header>