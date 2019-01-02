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
                        <a class="nav-link active" href="">
                            {{ __('about_us.nav_item.about_us') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ translate_route('expertise.index') }}">
                            {{ __('expertises.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ translate_route('methodology.index') }}">
                            {{ __('about_us.nav_item.methodology') }}
                        </a>
                    </li>
                </ul>
                <div class="row wrapper-about">
                    <div class="col-lg-7">
                        <div class="about-ctn">
                            <div class="about-card">
                                <h2 class="about-heading">
                                    {!! __('about_us.about_heading') !!}
                                </h2>
                                <div class="about-lead">
                                    <p>
                                        {!! __('about_us.about_lead') !!}
                                    </p>
                                </div>
                                <div class="about-body">
                                    <p>
                                        {!! __('about_us.about_body') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 relative">
                        <div class="circle-info">
                            <div class="circle-big">
                                <ul class="list-about">
                                    <li>
                                        {!! __('about_us.list_about.li_1') !!}
                                    </li>
                                    <li>
                                        {!! __('about_us.list_about.li_2') !!}
                                    </li>
                                    <li>
                                        {!! __('about_us.list_about.li_3') !!}
                                    </li>
                                </ul>
                                <div class="inner">
                                    <img alt="Silkwires" src="{{ asset('web/images/LogoSilkWires.svg') }}" width="">
                                    </img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. wrapper-about -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.section-full-vh-->
    </main>
@endsection
