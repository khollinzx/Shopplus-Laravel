@extends('layout.master')

@section('content')
<section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-6 offset-md-3">
                <h2 class="section-heading text-uppercase">Sign Up</h2>
                @if (count($errors) > 0)
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                    <span class=""><i class="fas fa-warning"></i> {{ $error }}</span>
                    @endforeach
                </div>
                @endif
                <form action="{{ route('user.signup') }}" method="POST">
                    <div class="form-group">
                        <label for="fullname">Full Name </label>
                        <input type="text" class="form-control" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </section>
@endsection
password_confirmation
