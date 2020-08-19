@extends('layout.master')

@section('content')
<section class="page-section bg-light m-y-auto">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-heading text-uppercase text-left">cart</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('product.checkouts')}}" class="btn btn-success"> Check Out</a>
                    </div>
                </div>

                            <div class="row">
                                <div class="col-md-6 offset-md-8">
                                    <h3>Total: {{ Session::has('cart') ? number_format($totalPrice, 2) : '' }}</h3>
                                </div>
                            </div>
                <div class="table-responsive mt-2">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Items</th>
                                <th scope="col-auto">Quantity</th>
                                <th scope="col-2">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Session::has('cart'))
                            @foreach ($products as $items)
                            <tr>
                                <td>{{ $items['item']['title'] }}</td>
                                <td>
                                    <span class="row col-auto max-sapce">
                                        <button class="btn btn-sm btn-primary mr-1 font-weight-bolder">-</button>
                                        <span class="badge badge-light"> {{$items['qty']}} </span>
                                        <button class="btn btn-sm btn-primary ml-1 font-weight-bolder">+</button>
                                    </span>
                                </td>
                                <td>{{$items['item']['price']}}</td>
                                <td>{{$items['price']}}</td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                <td> No Item Found</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
