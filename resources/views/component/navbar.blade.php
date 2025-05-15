<!-- Navbar & Hero Start -->
<div class="container-fluid header-top">
            <div class="nav-shaps-2"></div>
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="{{ url('/') }}" class="navbar-brand" style="height: 125px;">
                        @if(config('app.logo'))
                            <img src="{{ asset(config('app.logo')) }}" alt="{{ config('app.name') }}" style="height:80px; max-width:170px; object-fit:contain;">
                        @endif
                        
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="pe-4">
                                        <a href="mailto:{{ config('app.email') }}" class="text-muted small">
                                            <i class="fas fa-envelope text-primary me-2"></i>{{ config('app.email') }}
                                        </a>
                                    </div>
                                    <div class="pe-0">
                                        <span class="text-muted small">
                                            <i class="fa fa-clock text-primary me-2"></i>{{ config('app.business_hours') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex align-items-center small">
                                        @guest
                                            <a
                                             href="{{ route('login') }}" 
                                             class="login-btn text-body me-3 pe-3">
                                                <span>Login</span>
                                            </a>
                                            <a href="{{ url('/') }}" class="text-body me-3">Register</a>
                                        @else
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle text-body" type="button" id="userDropdown" data-bs-toggle="dropdown">
                                                    {{ Auth::user()->name }}
                                                </button>
                                            </div>
                                        @endguest
                                    </div>
                                    <div class="d-flex pe-3">
                                        @foreach(config('social.links') as $platform => $link)
                                            <a class="btn p-0 text-primary me-3" href="{{ $link }}" target="_blank">
                                                <i class="fab fa-{{ $platform }}"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-start">
                            <a href="{{ route('home') }}" class="navbar-brand-2">
                                <h1 class="text-primary mb-0"><i class="fas fa-hand-rock me-2"></i> Fitness</h1>
                            </a> 
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto justify-content-start">
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('features.*', 'team.*', 'testimonials.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                                            Who Are We
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('features') }}" class="dropdown-item {{ request()->routeIs('features') ? 'active' : '' }}">About YMP</a>
                                            <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Contact</a>
                                            <a href="{{ route('home') }}" class="dropdown-item {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                        </div>
                                    </div>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('features.*', 'team.*', 'testimonials.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                                            What We Do
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('features') }}" class="dropdown-item {{ request()->routeIs('features') ? 'active' : '' }}">Program</a>
                                            <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Campaign</a>
                                        </div>
                                    </div>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('features.*', 'team.*', 'testimonials.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                                            Moving Together
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('features') }}" class="dropdown-item {{ request()->routeIs('features') ? 'active' : '' }}">Volunteers</a>
                                            <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Donation In Nature </a>
                                        </div>
                                    </div>   
                                    <a href="{{ route('midtrans') }}" class="btn ms-lg-3" style="border-radius: 30px; padding: 8px 28px; font-size: 1rem; font-weight: bold; background:rgb(94, 151, 238); color: #fff; border: none;">
                                        Donate Now
                                    </a>
                                </div>
                                
                            </div>
                            <div class="nav-shaps-1"></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->