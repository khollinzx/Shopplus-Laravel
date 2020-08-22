@extends('layout.master')


@section('content')
@include('partial.banner')
<section class="page-section bg-light pg-top-redu" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Products</h2>
            </div>
            <div class="text-left">
                <h5 class="section-heading text-uppercase">Cloths</h5>
            </div>
            @foreach ($cloths->chunk(6) as $chunk)
            <div class="row autoplay">
                @foreach ($chunk as $cloth)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="{{ route('product.getSingleitem', $cloth->id)}}">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ $cloth->photo }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $cloth->title }}</div>
                            <h4 class="portfolio-caption-subheading text-muted"><i>&#8358</i>{{ number_format($cloth->price,2) }}</h4>
                            {{--  <span class="badge badge-pill badge-dark mb-3"> {{ $cloth->category->name }} </span>  --}}
                            <div class="row" data-id="{{$cloth->id}} ">
                                <button  class="btn btn-outline-primary btn-lg btn-block text-uppercase cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            
        </div>
        <div class="pagination justify-content-center">
            <a href="{{ route('product.particularProduct', $cloth->category_id)}}"  class="btn btn-outline-dark btn-lgt ml-5 text-uppercase cart">View More</a>
        </div>
    </section>

    <section class="page-section bg-light pg-top-reduce" id="portfolio">
        <div class="container">
            <div class="text-left">
                <h5 class="section-heading text-uppercase">Shoes</h5>
            </div>
            @foreach ($shoes->chunk(6) as $chunk)
            <div class="row autoplay-reverse">
                @foreach ($chunk as $shoe)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="{{ route('product.getSingleitem', $shoe->id)}}">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ $shoe->photo }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $shoe->title }}</div>
                            <h4 class="portfolio-caption-subheading text-muted"><i>&#8358</i>{{ number_format($shoe->price,2) }}</h4>
                            <div class="row" data-id="{{$shoe->id}} ">
                                <button  class="btn btn-outline-primary btn-lg btn-block text-uppercase cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        
        <div class="pagination justify-content-center">
            <a href="{{ route('product.particularProduct', $shoe->category_id)}}"  class="btn btn-outline-dark btn-lgt ml-5 text-uppercase cart">View More</a>
        </div>
        
    </section>
    <section class="page-section bg-light pg-top-reduce" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">5K LOWer</h2>
            </div>
            <div class="row autoplay">
                @foreach ($lowpriceProduct as $lowPrice)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="{{ route('product.getSingleitem', $lowPrice->id)}}">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ $lowPrice->photo }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$lowPrice->title}}</div>
                            <div class="portfolio-caption-subheading text-muted"><i>&#8358;</i>{{ number_format($lowPrice->price,2)}}</div>
                            <div class="row" data-id="{{$lowPrice->id}} ">
                                <button  class="btn btn-outline-primary btn-lg btn-block text-uppercase cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
{{--  <script src="{{asset('frontend/js/payments.js')}}"></script>  --}}
@endsection

