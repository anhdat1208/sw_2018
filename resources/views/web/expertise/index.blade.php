@extends('web.layouts.app')

@section('title', __('about_us.seo_title'))

@section('wrapper-class', 'wp-page page-min-height wide')

@section('content')
    @include('web.layouts.header')
    <main class="page-content main my-auto">
        <div class="section-full-vh">
            <div class="container-fluid container-full-center relative">
                <ul class="nav nav-button">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ translate_route('about_us.index') }}">
                            {{ __('about_us.nav_item.about_us') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ translate_route('expertise.index') }}">
                            {{ __('about_us.nav_item.expertises') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            {{ __('about_us.nav_item.methodology') }}
                        </a>
                    </li>
                </ul>
                <div class="wrapper-exp">
                    <div class="grid-unit wow fadeInLeft top-left">
                        <div class="sphere wow fadeInRight">
                        </div>
                        <span class="icon">
                            <img src="{{ asset('web/images/icons/expertise-digital-strategy.svg') }}"/>
                        </span>
                        <span class="label">
                            {{ __('expertises.digital_strategy') }}
                        </span>
                        <div class="swing-panel">
                            <div class="uix-list-style">
                                <p>
                                    {{ __('expertises.audit') }}
                                </p>
                                <p>
                                    {{ __('expertises.brand_strategy_positioning') }}
                                </p>
                                <p>
                                    {{ __('expertises.social_media_strategy') }}
                                </p>
                                <p>
                                    {{ __('expertises.launch_products_strategy') }}
                                </p>
                                <p>
                                    {{ __('expertises.content_strategy') }}
                                </p>
                                <p>
                                    {{ __('expertises.interactive_marketing') }}
                                </p>
                                <p>
                                    {{ __('expertises.lead_customer') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.grid-unit -->
                    <div class="grid-unit wow fadeInRight top-right">
                        <div class="sphere wow fadeInLeft">
                        </div>
                        <span class="icon">
                            <img src="{{ asset('web/images/icons/expertise-realization.svg') }}"/>
                        </span>
                        <span class="label">
                            {{ __('expertises.realization') }}
                        </span>
                        <div class="swing-panel">
                            <div class="uix-list-style">
                                <p>
                                    {{ __('expertises.tailored_website') }}
                                </p>
                                <p>
                                    {{ __('expertises.ecommerce_website') }}
                                </p>
                                <p>
                                    {{ __('expertises.responsive_website') }}
                                </p>
                                <p>
                                    {{ __('expertises.cms') }}
                                </p>
                                <p>
                                    {{ __('expertises.accessibility') }}
                                </p>
                                <p>
                                    {{ __('expertises.custom_web_development') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.grid-unit -->
                    <div class="grid-unit wow fadeInLeft bottom-left">
                        <div class="sphere wow fadeInRight">
                        </div>
                        <span class="icon">
                            <img src="{{ asset('web/images/icons/expertise-conception-technology.svg') }}"/>
                        </span>
                        <span class="label">
                            {{ __('expertises.conception_technology') }}
                        </span>
                        <div class="swing-panel">
                            <div class="uix-list-style">
                                <p>
                                    {{ __('expertises.ergonomics') }}
                                </p>
                                <p>
                                    {{ __('expertises.technical_functional') }}
                                </p>
                                <p>
                                    {{ __('expertises.web_design') }}
                                </p>
                                <p>
                                    {{ __('expertises.graphic_editorial') }}
                                </p>
                                <p>
                                    {{ __('expertises.html_css') }}
                                </p>
                                <p>
                                    {{ __('expertises.php_mysql') }}
                                </p>
                                <p>
                                    {{ __('expertises.javascript_ajax_jquery') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.grid-unit -->
                    <div class="grid-unit wow fadeInRight bottom-right">
                        <div class="sphere wow fadeInLeft">
                        </div>
                        <span class="icon">
                            <img src="{{ asset('web/images/icons/expertise-web-marketing-SEOspecialist.svg') }}"/>
                        </span>
                        <span class="label">
                            {{ __('expertises.web_marketing') }}
                        </span>
                        <div class="swing-panel">
                            <div class="uix-list-style">
                                <p>
                                    {{ __('expertises.seo') }}
                                </p>
                                <p>
                                    {{ __('expertises.sea') }}
                                </p>
                                <p>
                                    {{ __('expertises.web_analytics') }}
                                </p>
                                <p>
                                    {{ __('expertises.social_media_marketing') }}
                                </p>
                                <p>
                                    {{ __('expertises.affiliate_campaign') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.grid-unit -->
                </div>
                <!-- /. wrapper-exp -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.section-full-vh-->
    </main>
@endsection
