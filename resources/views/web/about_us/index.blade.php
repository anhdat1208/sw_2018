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
                        <a class="nav-link active" href="about-us.php">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="expertises.php">
                            EXPERTISES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="methodology.php">
                            METHODOLOGY
                        </a>
                    </li>
                </ul>
                <div class="row wrapper-about">
                    <div class="col-lg-7">
                        <div class="about-ctn">
                            <div class="about-card">
                                <h2 class="about-heading">
                                    SILKWIRES AT THE HEART OF DIGITAL STRATEGIES
                                </h2>
                                <div class="about-lead">
                                    <p>
                                        Our ambition? Combine creative design & new technologies to create innovative digital support of communication and marketing.
                                        <br>
                                            8 years and more than 100 websites later, the experience has not altered their passion & a team of 15 thirsty fanatics of digital strategy was born.
                                        </br>
                                    </p>
                                </div>
                                <div class="about-body">
                                    <p>
                                        Silkwires is a 360° agency that works with brands in defining & implementing their strategies for digital communication and marketing. Strategy consulting, online applications, graphic design, website, SEO ... We build functional cross campaigns.
                                        <br>
                                            <br>
                                                Silkwires benefits from the experience of his founder, Florian BERTA (French), a specialist in digital strategies and SEO since 2004. Silkwires offers solutions perfectly suited to the customer needs. Indeed, our agency is organized around three compounds: Web marketing (strategy), Web development (technical) and Web design, which functions as a collaborative project.
                                                <br>
                                                    <br>
                                                        Established in Vietnam for 8 years, we have convinced many customers who come from the 4 corners of the world (France, United Kingdom, Vietnam, Singapore, Dubai, United States, etc ...). The majority of our clients entrust us with their digital strategy visibility, in the aim of acquiring a new audience and attract new customers.
                                                    </br>
                                                </br>
                                            </br>
                                        </br>
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
                                        <p>
                                            8 years
                                        </p>
                                        <h4>
                                            Experience
                                        </h4>
                                    </li>
                                    <li>
                                        <p>
                                            +100
                                        </p>
                                        <h4>
                                            Projects
                                        </h4>
                                    </li>
                                    <li>
                                        <p>
                                            15 Passionate
                                        </p>
                                        <h4>
                                            Experts in their fields
                                        </h4>
                                    </li>
                                </ul>
                                <div class="inner">
                                    <img alt="Silkwires" src="images/LogoSilkWires.svg" width="">
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
