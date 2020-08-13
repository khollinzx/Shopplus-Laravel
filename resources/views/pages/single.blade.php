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
                        <a href="checkout.html" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                    <div class="">
                        <div class="card mb-3" style="max-width: 800px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="https://www.mydesignation.com/wp-content/uploads/2019/03/shammi-tshirt-image-unisex-mydesignation-.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>

                                <h6 class="card-title">10,000</h6>
                                <p class="card-text">Fugiat tempora voluptatibus nemo est. Possimus corporis laboriosam consectetur commodi laudantium iure. Dolor voluptatem a numquam laborum esse dignissimos. Et fugit id facilis et voluptates sapiente ut.</p>
                                <p class="card-text mt-auto"><button class="btn btn-primary">Add to Cart</button></p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
