
    {{-- <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container uk-navbar-blue" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="">
                                <img src="{{ $logo_image }}" alt="{{ $site_title }}" width="100" height="30">
                                <img src="{{ $logo_image }}" alt="{{ $site_title }}" width="146" height="39" data-uk-img>

                            </a>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="{{ route('home') }}" >Home</a></li>
                                <li><a href="{{ route('about') }}" >About</a></li>
                                <li><a href="#">Invest<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="{{ route('about') }}">Guides To</a></li>
                                            <li><a href="{{ route('contact') }}">How To</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="blog/page-1.html">Blog</a></li>
                                            <li><a href="careers.html">Careers</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="{{ route('login') }}" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            <a href="#" class="uk-button uk-button-primary uk-border-rounded">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header> --}}



    <header class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://www.hisa.co/img/logo.png" alt="logo" width="110" height="40" class="d-inline-block">
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-between d-none d-xl-block" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/"   aria-expanded="false">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="markets.html">Markets</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownCompany" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{route('about')}}">About</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="careers.html">Careers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.html">Education</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownResources" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Documentation<i class="fas fa-square-arrow-up-right fa-sm"></i></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="help-center.html">Help Center</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="customers.html">Customers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="roadmap.html">Roadmap</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="optional-link d-flex align-items-center ms-4 d-none d-xl-block">
                    {{-- <a href="{{ route('login') }}" class="btn btn-link link-secondary text-decoration-none">Sign in</a> --}}
                    <a href="{{ route('login') }}" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </header>
{{-- <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="d-flex justify-content-center align-items-center me-2 bs-icon">
                <img src="{{ $logo_image }}" alt="{{ $site_title }}" width="35" height="30">
            </span>
            <span>| {{ $site_title }}</span>
        </a>

        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}"
                        href="{{ route('show-categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/random-post">Random Article</a>
                </li>
            </ul>
            <a class="btn btn-primary ms-md-2" role="button" href="{{ route('login') }}"
                style="margin-right: 10px;">Log In</a>
            <a class="btn btn-primary ms-md-2" role="button" href="{{ route('register') }}"
                style="background: rgb(255,255,255);color: rgb(0,0,0);">Sign Up</a>
        </div>

    </div>
</nav> --}}
