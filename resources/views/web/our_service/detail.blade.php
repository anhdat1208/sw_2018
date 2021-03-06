@extends('web.layouts.app')

@section('title', "Agence de communication digitale Silkwires - " . __('services.digital_strategy_heading'))

@section('wrapper-class', 'wp-page page-full-height wide')

@section('services_active', 'active')

@section('content')
    @include('web.layouts.header')
    <main class="page-content main my-auto">
        <div class="section-full-vh bg-service-detail">
            <div class="container-fluid">
                <div class="detail-ctn">
                    <h2 class="title-detail">{{ __($view . '.title_detail') }}</h2>
                    <div class="detail-card">
                        <a class="btn-back" href="{{ translate_route('services.index') }}"><i class="lnr lnr-cross"></i></a>
                        <h3 class="text-heading">{{ __($view . '.heading') }}</h3>
                        <div class="text-lead">
                            <p>{{ __($view . '.text_lead') }}</p>
                        </div>
                        <div class="text-body">
                            <p>{!! __($view . '.content') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.ctn-services -->
        </div>
        <!-- /.section-full-vh -->
    </main>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            var b = "fadeInLeft";
            var c;
            var a;
            d($("#v-pills-tab a"), $("#v-pills-tabContent"));

            function d(e, f, g) {
                e.click(function (i) {
                    i.preventDefault();
                    $(this).tab("show");
                    var h = $(this).data("easein");
                    if (c) {
                        c.removeClass(a);
                    }
                    if (h) {
                        f.find("div.active").addClass("animated " + h);
                        a = h;
                    } else {
                        if (g) {
                            f.find("div.active").addClass("animated " + g);
                            a = g;
                        } else {
                            f.find("div.active").addClass("animated " + b);
                            a = b;
                        }
                    }
                    c = f.find("div.active");
                });
            }
        });
    </script>
@endpush
