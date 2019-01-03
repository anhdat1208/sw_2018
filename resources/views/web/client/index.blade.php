@extends('web.layouts.app')

@section('title', __('about_us.seo_title'))

@section('wrapper-class', 'wp-page page-min-height wide')

@section('content')
    @include('web.layouts.header')
    <main class="main page-content my-auto">
        <div class="container-fluid">
            <span class="page-title">
                {{ __('menus.clients') }}
            </span>
        </div>
        <div class="wp-clients">
            <div id="tags-cloud">
                <div class="tag-1 tag wow zoomIn" data-wow-delay="100ms">
                    <a class="tag-inner" href="https://ila.edu.vn/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/ila.png') }}"/>
                    </a>
                </div>
                <div class="tag-2 tag wow zoomIn" data-wow-delay="200ms">
                    <a class="tag-inner" href="http://www.eduniversal-deans-vote.com/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/ees.png') }}"/>
                    </a>
                </div>
                <div class="tag-3 tag wow zoomIn" data-wow-delay="300ms">
                    <a class="tag-inner" href="http://digitalmarketingsoftware.net/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/dms.png') }}"/>
                    </a>
                </div>
                <div class="tag-4 tag wow zoomIn" data-wow-delay="400ms">
                    <a class="tag-inner" href="http://first-viec-lam.com/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/first-viet-lam.png') }}"/>
                    </a>
                </div>
                <div class="tag-5 tag wow zoomIn" data-wow-delay="500ms">
                    <a class="tag-inner" href="http://cometgiadung.vn/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/comet.png') }}"/>
                    </a>
                </div>
                <div class="tag-6 tag wow zoomIn" data-wow-delay="600ms">
                    <a class="tag-inner" href="http://www.eduniversal-ranking.com/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/ranking.png') }}"/>
                    </a>
                </div>
                <div class="tag-7 tag wow zoomIn" data-wow-delay="700ms">
                    <a class="tag-inner" href="http://porscheclub.org.sg/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/porsche-club.png') }}"/>
                    </a>
                </div>
                <div class="tag-8 tag wow zoomIn" data-wow-delay="800ms">
                    <a class="tag-inner" href="https://www.mua-ban-xe.com/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/muabanxe.png') }}"/>
                    </a>
                </div>
                <div class="tag-9 tag wow zoomIn" data-wow-delay="900ms">
                    <a class="tag-inner" href="http://www.apres-bac-s.com/" target="_blank">
                        <img alt="" src="{{ asset('web/images/clients/guidformation.png') }}"/>
                    </a>
                </div>
                <a class="why-not-you wow zoomIn" data-wow-delay="1100ms" href="{{ translate_route('contact.index') }}">
                    <span>
                        {!! __('labels.why_not_you') !!}
                    </span>
                    <i class="lnr lnr-arrow-right">
                    </i>
                </a>
            </div>
        </div>
    </main>
@endsection
