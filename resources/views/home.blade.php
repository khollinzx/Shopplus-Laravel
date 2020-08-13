@extends('layout.master')

@section('content')
<header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Shopping Wolrd!</div>
            <div class="masthead-heading text-uppercase">Shopplus+</div>
            <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#services">Sign Up</a>
        </div>
    </header>
<section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Recently Added</h2>
            </div>
            <div class="row autoplay">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/01-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/01-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/02-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/03-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Finish</div>
                            <div class="portfolio-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-light pg-top-reduce">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/01-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/02-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/03-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Finish</div>
                            <div class="portfolio-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/04-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lines</div>
                            <div class="portfolio-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/05-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Southwest</div>
                            <div class="portfolio-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/portfolio/06-thumbnail.jpg') }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div class="portfolio-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
