@php
    $englishParams = !empty($englishParams) ? $englishParams : [];
    $frenchParams = !empty($frenchParams) ? $frenchParams : [];
    $vietnameseParams = !empty($englishParams) ? $vietnameseParams : [];
    $currentUrlInEnglish = translate_route(\Route::currentRouteName(), $englishParams, 'en');
    $currentUrlInFrench = translate_route(\Route::currentRouteName(), $frenchParams, 'fr');
    $currentUrlInVietnamese = translate_route(\Route::currentRouteName(), $vietnameseParams, 'vi');
@endphp
<div class="loader">
    <img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt="">
</div>
<header class="header header-home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent fixed-top" color-on-scroll="120">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ translate_route('home') }}">
                    <img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt="Silkwires" width="245">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.php">
                                <img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt="Silkwires" width="145">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover">
                    <li class="dropdown dropdown-nav nav-item p-0">
                        <a class="dropdown-toggle nav-link @yield('agency_active')" href="#" data-toggle="dropdown">{{ __('menus.agency') }}</a>
                        <div class="dropdown-menu"> 
                            <a href="{{ translate_route('about_us.index') }}" class="dropdown-item" title="About us">About us</a>
                            <a href="{{ translate_route('expertise.index') }}" class="dropdown-item" title="Expertises">Expertises</a>
                            <a href="{{ translate_route('methodology.index') }}" class="dropdown-item" title="Methodology">Methodology</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-nav nav-item p-0">
                        <a class="dropdown-toggle nav-link @yield('services_active')" href="{{ translate_route('services.index') }}" data-toggle="dropdown">{{ __('menus.services') }}</a>
                        <div class="dropdown-menu"> 
                            <a href="" class="dropdown-item" title="Digital Strategy">Digital Strategy</a>
                            <a href="" class="dropdown-item" title="Web &amp; Graphic Design">Web &amp; Graphic Design</a>
                            <a href="" class="dropdown-item" title="Web Development">Web Development</a>
                            <a href="" class="dropdown-item" title="Custom Development - Software">Custom Development - Software</a>
                            <a href="" class="dropdown-item" title="Search Engine Optimization - SEO">Search Engine Optimization - SEO</a>
                        </div>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link @yield('clients_active')" href="{{ translate_route('clients.index') }}">{{ __('menus.clients') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link @yield('contact_active')" href="{{ translate_route('contact.index') }}">{{ __('menus.contact_us') }}</a>
                    </li>

                    <li class="dropdown dropdown-lang nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ asset('web/images/flags/flag-' . app()->getLocale() . '.svg') }}" alt=""> {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ $currentUrlInEnglish }}" class="dropdown-item @if(app()->getLocale() == 'en') d-none @endif">
                                <img src="{{ asset('web/images/flags/flag-en.svg') }}" alt=""> EN
                            </a>
                            <a href="{{ $currentUrlInVietnamese }}" class="dropdown-item @if(app()->getLocale() == 'vi') d-none @endif">
                                <img src="{{ asset('web/images/flags/flag-vi.svg') }}" alt=""> VI
                            </a>
                            <a href="{{ $currentUrlInFrench }}" class="dropdown-item @if(app()->getLocale() == 'fr') d-none @endif">
                                <img src="{{ asset('web/images/flags/flag-fr.svg') }}" alt=""> FR
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /#navigation -->
        </div>
    </nav>
    <!-- End Navbar -->
</header>
