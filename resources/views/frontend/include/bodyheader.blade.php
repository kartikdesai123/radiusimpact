@php
$currRoute = Route::current()->getName();
@endphp
<header>
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ url('public/frontend/assets/images/icons/R7.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
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
                                <li><a href="{{ route('cloud-backup') }}">Cloud Backup</a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item {{ ($currRoute == 'portfolio')  ? 'active' : '' }}">
                            <a class="nav-link abc" href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="nav-item {{ ($currRoute == 'contact')  ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}" style="border: none;">Contact</a>
                        </li>    
                    </ul>
                </div>  
            </nav>
        </div>
    </div>
</header>