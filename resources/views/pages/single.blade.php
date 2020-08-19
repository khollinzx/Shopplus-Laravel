@extends('layout.master')

@section('content')
<section class="page-section bg-light m-y-auto">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-heading text-uppercase text-left">View Product</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('product.index')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                    <div class="">
                        @if ($product)
                            <div class="card mb-3" style="max-width: ;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="{{$product->photo}}" class="card-img" alt="{{$product->id}}">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-titl">{{$product->title}}</h3>

                                    <h6 class="card-title"><i>&#8358</i> {{ number_format($product->price, 2)}}</h6>
                                    <h5 class="card-text text-bolder">Description</h5>
                                    <p class="card-text"> {{$product->description}}</p>
                                    <div class="row text-right offset-md-8" data-id="{{$product->id}} ">
                                        <button  class="btn btn-outline-primary btn-lgt text-uppercase cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        @endif

                    </div>
            </div>
        </div>
    </section>
@endsection
