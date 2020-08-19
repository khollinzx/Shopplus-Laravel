@extends('layout.master')


@section('content')
@include('partial.banner')

    <section class="page-section bg-light pg-top-reduce" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Products</h2>
            </div>
            @foreach ($products->chunk(6) as $chunk)
            <div class="row">
                @foreach ($chunk as $product)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="{{ route('product.getSingleitem', $product->id)}}">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid" src="{{ $product->photo }}" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $product->title }}</div>
                            <h4 class="portfolio-caption-subheading text-muted"><i>&#8358</i>{{ number_format($product->price,2) }}</h4>
                            <div class="row" data-id="{{$product->id}} ">
                                <button  class="btn btn-outline-primary btn-lg btn-block text-uppercase cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
        <nav class="py-3">
        <ul class="pagination justify-content-center">
            <li class="page-item">{{ $products->links() }}
            </li>
        </ul>
        </nav>
    </section>
    <section class="page-section bg-light pg-top-reduce" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">8K LOWer</h2>
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
<script src="{{asset('frontend/js/payments.js')}}"></script>
@endsection

