@extends('web.layouts.app')

@section('title', __('services.title'))

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
                                    <p>By crossing your business issues with the habits of online consumer and new
                                        digital trends, we imagine concepts and tools that connect your brand with your
                                        target.</p>
                                </div>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-web">
                                <div class="tab-lead">
                                    <p>Our team will assist you in setting up your strategy, from design until the
                                        realization of your tools and supports.<br>
                                        The visual identity and graphic designs of a website are the first elements that
                                        visitors see when they browse your Website. The design should catch the eye to
                                        keep and retain visitors. This is the first big important step in developing a
                                        digital strategy.</p>
                                </div>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-pills-messages">
                                <div class="tab-lead">
                                    <p>We give life to your projects and we support you in the daily management and
                                        growth of your Website.<br>
                                        The website has become an essential part of company communication: it allows
                                        presenting their offers, services, products, or simply communicating on their
                                        brand or company.</p>
                                </div>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-custom-dev">
                                <div class="tab-lead">
                                    <p>If the solutions “ready to go” are suitable for certain customers, they do not
                                        natively handle the issues specific to your business and even less those
                                        involving specific features. This is why we offer a custom web development
                                        solution to expand the range of possibilities for you to implement almost all
                                        the features you could want or imagine.</p>
                                </div>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-search">
                                <p class="tab-lead">Silkwires considers systematically the “SEO” into the projects
                                    conducted for clients. The website tree and structure of HTML code are developed
                                    with a commitment to facilitating the work of indexing by search engines.</p>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
                                </div>
                            </div>
                            <div class="tab-pane  " id="v-team">
                                <p class="tab-lead">Notre métier est de concevoir et mettre en œuvre des solutions
                                    d’externalisation en développement web à taille humaine, établies sur mesure pour
                                    nos clients.</p>
                                <div class="text-right">
                                    <a href=""
                                       class="btn btn-sm btn-primary">Discover</a>
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
                               id="v-digital-tab" data-toggle="pill" href="#v-digital">DIGITAL STRATEGY</a>
                            <a data-easein="fadeInRight" data-wow-delay="200ms" class="nav-link wow fadeInRight"
                               id="v-web-tab" data-toggle="pill" href="#v-web">WEB & GRAPHIC DESIGN</a>
                            <a data-easein="fadeInRight" data-wow-delay="300ms" class="nav-link wow fadeInRight"
                               id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">DEVELOPMENT
                                WEBSITES</a>
                            <a data-easein="fadeInRight" data-wow-delay="400ms" class="nav-link wow fadeInRight"
                               id="v-custom-dev-tab" data-toggle="pill" href="#v-custom-dev">CUSTOM DEVELOPMENT -
                                SOFTWARE</a>
                            <a data-easein="fadeInRight" data-wow-delay="500ms" class="nav-link wow fadeInRight"
                               id="v-search-tab" data-toggle="pill" href="#v-search">SEARCH ENGINE OPTIMIZATION
                                (SEO)</a>
                            <a data-easein="fadeInRight" data-wow-delay="600ms" class="nav-link wow fadeInRight"
                               id="v-team-tab" data-toggle="pill" href="#v-team">DEDICATED TEAMS</a>
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
