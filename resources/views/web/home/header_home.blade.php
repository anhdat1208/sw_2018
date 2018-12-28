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
                <ul class="navbar-nav">
                    <li class="nav-item p-0">
                        <a class="nav-link" href="#">{{ __('menus.agency') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" href="{{ translate_route('services.index') }}">{{ __('menus.services') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" href="">{{ __('menus.clients') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link" href="{{ translate_route('contact.index') }}">{{ __('menus.contact_us') }}</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          <i class="fa fa-cogs d-lg-none d-xl-none"></i> {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ $currentUrlInEnglish }}" class="dropdown-item @if(app()->getLocale() == 'en') d-none @endif">
                                <i class="tim-icons icon-paper"></i> EN
                            </a>
                            <a href="{{ $currentUrlInVietnamese }}" class="dropdown-item @if(app()->getLocale() == 'vi') d-none @endif">
                                <i class="tim-icons icon-bullet-list-67"></i> VI
                            </a>
                            <a href="{{ $currentUrlInFrench }}" class="dropdown-item @if(app()->getLocale() == 'fr') d-none @endif">
                                <i class="tim-icons icon-bullet-list-67"></i> FR
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
