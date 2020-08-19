@extends('layout.master')

@section('content')
<section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
            </div>
            <div class="col-md-6 offset-md-3">
                <h2 class="section-heading text-uppercase">Login</h2>
                @if (session('message'))
                <div class="alert alert-danger text-center">
                    <span>{{ session('message') }}</span>
                </div>
                @endif
                <form action="{{ route('user.login') }}" method="POST">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </section>
@endsection
