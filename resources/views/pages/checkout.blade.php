@extends('layout.master')

@section('content')

    <section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-heading text-uppercase text-left">Check Out</h2>
                    </div>
                    <div class="col-md-6 text-right py-3">
                        <h4 class="text-uppercase"> Total Price: <span>&#8358;</span> 10,000</h4>
                    </div>
                </div>
                <div class="table-responsive mt-2 col-md-8 offset-2">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">Mobile No.</label>
                            <input type="text" class="form-control" id="mobile_no" name="">
                        </div>
                        <div class="form-group">
                            <label for="mobile_no">Card.</label>
                            <input type="text" class="form-control" id="mobile_no" name="">
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="day">Expire Date</label>
                                <input type="number" class="form-control" id="day" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="day">Expire Year</label>
                                <input type="number" class="form-control" id="year" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="ccv">CCV</label>
                                <input type="number" class="form-control" id="ccv" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Make Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
