@extends('web.layouts.app')

@section('title', __('about_us.seo_title'))

@section('wrapper-class', 'wp-page page-min-height wide')

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
                            {{ __('about_us.nav_item.methodology') }}
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
                                                    Strategy Consulting
                                                    <br>
                                                        Identifying the needs
                                                    </br>
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    Each brand or product needs a strategy to attract consumers in their market. Infiltrating the tribes of your audience, we learn to speak their language and behave as they do. Here we learn how your customers interact with your products and your competitors' products. With this, we have a unique insight into their culture. Then, we develop a workable plan that is grounded in reality.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        Strategy Consulting
                                        <br>
                                            Identifying the needs
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
                                                    Connect & Interact
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    We develop global platforms, campaigns and ecosystems that include open channels of conversation between brands and their communities. This contributes to helping brands to communicate more effectively with their audience, attract more and more people in their community and become, at the same time, a friendly and interesting part of their daily lives.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        Connect & Interact
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
                                                    Product development: marketing oriented !
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    A product is no longer something you lay on the web just like that! It plays a key role in the ecosystem, through the communication channels and communities. We believe that product development and marketing should be integrated. The great interest of brands is an opportunity to gather feedback and information on the behavior of the community. This allows real people to become involved in your future development, and discovering new sources of revenue as well.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        Product development
                                        <br>
                                            marketing oriented !
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
                                                    4
                                                </big>
                                                <h4>
                                                    Analyzing, Outlook, Evolution, Opportunities, Optimization
                                                </h4>
                                            </div>
                                            <div class="details_content">
                                                <p>
                                                    To ensure efficiency across multiple touch points of the brand, we test, measure and follow the work through performance analysis tools. By analyzing human behavior, conversations, comments and further analysis of cross media and organic traffic, we will be able to give you an expert guidance on the development of your future campaign can better meet targeted needs of your community.
                                                    <br>
                                                        Amplify the positive and correct the negative.
                                                    </br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="time-name">
                                        Analyzing, Outlook,
                                        <br>
                                            Evolution, Opportunities, Optimization
                                        </br>
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
