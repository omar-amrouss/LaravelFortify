@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="/img/login.jpg" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="/img/logo.png" alt="logo" class="logo" style="width: 30%;height: 100%">                        </div>
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p class="login-card-description">You must verify your email address, please check your email for a verification link.</p>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Resend email">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
