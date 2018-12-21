@extends('web.layouts.app')

@section('title', __('services.seo_title'))

@section('wrapper-class', 'wp-page page-full-height wide')

@section('content')
    @include('web.layouts.header')
    <main class="page-content main my-auto">
        <div class="section-full-vh bg-service">
            <div class="d-flex ctn-services">
                <div class="col-sm-6">
                    <div class="box-tab-content">
                        <div class="tab-content wow fadeInRight" id="v-pills-tabContent">
                            <div class="tab-pane show active" id="v-digital">
                                <div class="tab-lead">
                                    <p>{!! __('services.tabs.digital_strategy') !!}</p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.digital_strategy')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-web">
                                <div class="tab-lead">
                                    <p>{!! __('services.tabs.web_graphic_design') !!}</p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.web_graphic_design')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages">
                                <div class="tab-lead">
                                    <p>{!! __('services.tabs.web_development') !!}</p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.web_development')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-custom-dev">
                                <div class="tab-lead">
                                    <p>{!! __('services.tabs.custom_development_software') !!}</p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.custom_development_software')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-search">
                                <p class="tab-lead">{!! __('services.tabs.seo') !!}</p>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.seo')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-team">
                                <p class="tab-lead">{!! __('services.tabs.dedicated_team') !!}</p>
                                <div class="text-right">
                                    <a href="{{ translate_route('service.detail', ['slug' => __('services.slugs.dedicated_team')]) }}"
                                       class="btn btn-sm btn-primary">{{ __('labels.discover') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-6 -->
                <div class="col-sm-6">
                    <div class="box-tab wow fadeInLeft">
                        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a data-easein="fadeInRight" data-wow-delay="100ms" class="nav-link wow fadeInRight active"
                               id="v-digital-tab" data-toggle="pill" href="#v-digital">{{ (__('digital_strategy.title_detail')) }}</a>
                            <a data-easein="fadeInRight" data-wow-delay="200ms" class="nav-link wow fadeInRight"
                               id="v-web-tab" data-toggle="pill" href="#v-web">{{ (__('web_graphic_design.title_detail')) }}</a>
                            <a data-easein="fadeInRight" data-wow-delay="300ms" class="nav-link wow fadeInRight"
                               id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">{{ (__('web_development.title_detail')) }}</a>
                            <a data-easein="fadeInRight" data-wow-delay="400ms" class="nav-link wow fadeInRight"
                               id="v-custom-dev-tab" data-toggle="pill" href="#v-custom-dev">{{ (__('custom_development_software.title_detail')) }}</a>
                            <a data-easein="fadeInRight" data-wow-delay="500ms" class="nav-link wow fadeInRight"
                               id="v-search-tab" data-toggle="pill" href="#v-search">{{ __('service_seo.title_detail') }}</a>
                            <a data-easein="fadeInRight" data-wow-delay="600ms" class="nav-link wow fadeInRight"
                               id="v-team-tab" data-toggle="pill" href="#v-team">{{ (__('dedicated_team.title_detail')) }}</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-6 -->
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
