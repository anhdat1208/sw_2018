@extends('web.layouts.app')

@section('title', __('labels.company_name'))

@section('wrapper-class', 'wp-page page-index')

@section('agency_active', 'active')

@section('content')
    @include('web.home.header_home')
    @include('web.home.banner_home')
    <main class="main my-auto">
        @include('web.home.section_services')
        <!-- Content 02
        ====================================================== -->
        @include('web.home.section_expertises')

        @include('web.home.section_methodology')

        @include('web.home.section_clients')
    </main>
    @include('web.layouts.footer')
@endsection
