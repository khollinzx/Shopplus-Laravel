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
                        <a href="checkout.html" class="btn btn-success"> Check Out</a>
                    </div>
                </div>
                <div class="table-responsive mt-2">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Items</th>
                                <th scope="col-auto">Quantity</th>
                                <th scope="col-2">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>
                                    <span class="row col-auto max-sapce">
                                        <button class="btn btn-sm btn-primary mr-1 font-weight-bolder">-</button>
                                        <span class="badge badge-light"> 10 </span>
                                        <button class="btn btn-sm btn-primary ml-1 font-weight-bolder">+</button>
                                    </span>
                                </td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
