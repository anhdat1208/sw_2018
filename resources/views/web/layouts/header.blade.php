<div class="loader">
    <img src="{{ asset('web/images/LogoSilkWires.svg') }}" alt=" ">
</div>
<header class="header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-underpage fixed-top" color-on-scroll="120">
        <div class="container-fluid">
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
                        <a class="nav-link @yield('agency_active')" href="#">{{ __('menus.agency') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link @yield('services_active')" href="{{ translate_route('services.index') }}">{{ __('menus.services') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link @yield('clients_active')" href="#">{{ __('menus.clients') }}</a>
                    </li>
                    <li class="nav-item p-0">
                        <a class="nav-link @yield('contact_active')" href="{{ translate_route('contact.index') }}">{{ __('menus.contact_us') }}</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-cogs d-lg-none d-xl-none"></i> {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ route('language.handle', ['lang' => 'en']) }}" class="dropdown-item @if(app()->getLocale() == 'en') d-none @endif">
                                <i class="tim-icons icon-paper"></i> EN
                            </a>
                            <a href="{{ route('language.handle', ['lang' => 'vi']) }}" class="dropdown-item @if(app()->getLocale() == 'vi') d-none @endif">
                                <i class="tim-icons icon-bullet-list-67"></i> VI
                            </a>
                            <a href="{{ route('language.handle', ['lang' => 'fr']) }}" class="dropdown-item @if(app()->getLocale() == 'fr') d-none @endif">
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
