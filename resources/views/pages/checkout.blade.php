@extends('layout.master')

@section('content')

    <section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <h2 class="section-heading text-uppercase">Check Out</h2>
                    </div>
                    <div class="col-md-6 col-sm-4 py-3">
                        <h5 class="text-uppercase"> Total: <span>&#8358;</span>{{ number_format($totalPrice,2)}}</h5>
                    </div>
                </div>
                <div class="table-responsive mt-2 col-md-8 offset-md-2">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger text-center">
                        @foreach ($errors->all() as $error)
                        <span class=""><i class="fas fa-warning"></i> {{ $error }}</span>
                        @endforeach
                    </div>
                    @endif
                    <form method="POST" action="{{ route('pay') }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" name="name" value="{{ $profile[0]->fullname}}">
                            <input type="hidden" name="currency" value="NGN">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            <input type="hidden" name="quantity" value="1">
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">Mobile No.</label>
                            <input type="text" class="form-control" name="phone_no" value="{{ $profile[0]->mobile_no}}">
                            <input type="hidden" name="amount" value="{{ $totalPrice.'00' }}" >
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="metadata" value="{{ json_encode(['amount' => $totalPrice.'00','name' => $profile[0]->fullname, 'email' => Auth::user()->email]) }}" >
                            <label for="shipping_address">Shipping Address</label>
                            <textarea class="form-control" name="shipping_address" rows="3"></textarea>
                        </div>

                        {{ csrf_field() }}
                        <button type="submit" id="checkout-button" class="btn btn-primary">Make Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


