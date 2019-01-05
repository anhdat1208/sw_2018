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
<header class="header header-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-underpage fixed-top" color-on-scroll="120">
        <div class="container-fluid">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ translate_route('home') }}">
                    <img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt="Silkwires" width="245">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
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
                    <li class="dropdown dropdown-nav nav-item p-0 @yield('agency_active')">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">{{ __('menus.agency') }}</a>
                        <div class="dropdown-menu"> 
                            <a href="{{ translate_route('about_us.index') }}" class="dropdown-item" title="{{ __('about_us.nav_item.about_us') }}">{{ __('about_us.nav_item.about_us') }}</a>
                            <a href="{{ translate_route('expertise.index') }}" class="dropdown-item" title="{{ __('expertises.title') }}">{{ __('expertises.title') }}</a>
                            <a href="{{ translate_route('methodology.index') }}" class="dropdown-item" title="{{ __('methodology.title') }}">{{ __('methodology.title') }}</a>
                        </div>
                    </li>

                    <li class="dropdown dropdown-nav nav-item p-0 @yield('services_active')">
                        <a class="dropdown-toggle nav-link" href="{{ translate_route('services.index') }}" data-toggle="dropdown">{{ __('menus.services') }}</a>
                        <div class="dropdown-menu"> 
                            <a href="{{ translate_route('services.index') }}#v-digital" class="dropdown-item" title="{{ (__('digital_strategy.title_detail')) }}">{{ (__('digital_strategy.title_detail')) }}</a>
                            <a href="{{ translate_route('services.index') }}#v-web" class="dropdown-item" title="{{ (__('web_graphic_design.title_detail')) }}">{{ (__('web_graphic_design.title_detail')) }}</a>
                            <a href="{{ translate_route('services.index') }}#v-pills-messages" class="dropdown-item" title="{{ (__('web_development.title_detail')) }}">{{ (__('web_development.title_detail')) }}</a>
                            <a href="{{ translate_route('services.index') }}#v-custom-dev" class="dropdown-item" title="{{ (__('custom_development_software.title_detail')) }}">{{ (__('custom_development_software.title_detail')) }}</a>
                            <a href="{{ translate_route('services.index') }}#v-search" class="dropdown-item" title="{{ __('service_seo.title_detail') }}">{{ __('service_seo.title_detail') }}</a>
                            <a href="{{ translate_route('services.index') }}#v-team" class="dropdown-item" title="{{ (__('dedicated_team.title_detail')) }}">{{ (__('dedicated_team.title_detail')) }}</a>
                        </div>
                    </li>

                    <li class="nav-item p-0 @yield('clients_active')">
                        <a class="nav-link" href="{{ translate_route('clients.index') }}">{{ __('menus.clients') }}</a>
                    </li>

                    <li class="nav-item p-0 @yield('contact_active')">
                        <a class="nav-link" href="{{ translate_route('contact.index') }}">{{ __('menus.contact_us') }}</a>
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
