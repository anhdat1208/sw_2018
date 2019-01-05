@extends('web.layouts.app')

@section('title', __('about_us.seo_title'))

@section('wrapper-class', 'wp-page page-min-height wide')

@section('agency_active', 'active')

@section('content')
    @include('web.layouts.header')
    <main class="page-content main my-auto">
        <div class="section-full-vh flex-column">
            <div class="container-fluid relative">
                <ul class="nav nav-button">
                   <li class="nav-item">
                        <a class="nav-link" href="{{ translate_route('about_us.index') }}">
                            {{ __('about_us.nav_item.about_us') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ translate_route('expertise.index') }}">
                            {{ __('about_us.nav_item.expertises') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            {{ __('methodology.title') }}
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.container-fluid -->
            <section class="section home_recent-work">
                <div class="container">
                    <div class="recent-work_content">
                        <ul class="timeline">
                            <li>
                                <div class="time-item">
                                    <div class="time-inner expands">
                                        <div class="time-detail">
                                            <div class="picture_holder" style="">
                                                <big>
                                                    1
                                                </big>
                                                <h4>
                                                    {{ __('methodology.strategy_consulting') }} <br> {{ __('methodology.identifying') }}
                                                    <br>
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    {{ __('methodology.strategy_consulting_content') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        {{ __('methodology.strategy_consulting') }}
                                        <br>
                                            {{ __('methodology.identifying') }}
                                        </br>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="time-item">
                                    <div class="time-inner">
                                        <div class="time-detail">
                                            <div class="picture_holder">
                                                <big>
                                                    2
                                                </big>
                                                <h4>
                                                    {{ __('methodology.connect_interact') }}
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    {{ __('methodology.connect_interact_content') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        {{ __('methodology.connect_interact') }}
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="time-item">
                                    <div class="time-inner">
                                        <div class="time-detail">
                                            <div class="picture_holder">
                                                <big>
                                                    3
                                                </big>
                                                <h4>
                                                    {{ __('methodology.product_development') }}: <br/>{{ __('methodology.marketing_oriented') }} !
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    {{ __('methodology.product_development_content') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        {{ __('methodology.product_development') }} <br> {{ __('methodology.marketing_oriented') }} !
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="time-item">
                                    <div class="time-inner">
                                        <div class="time-detail">
                                            <div class="picture_holder">
                                                <big>
                                                    4
                                                </big>
                                                <h4>
                                                   {!! __('methodology.analyzing_title') !!}
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    {!! __('methodology.analyzing_content') !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        {!! __('methodology.analyzing_title') !!}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.section-full-vh-->
    </main>
@endsection
