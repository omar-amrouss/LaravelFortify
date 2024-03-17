@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        @if(! auth()->user()->two_factor_secret)
                            You have not enabled 2fa
                            <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    Enable
                                </button>
                            </form>
                        @else
                            You have 2fa enabled.
                            <form method="POST" action="{{ url('user/two-factor-authentication') }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">
                                    Disable
                                </button>
                            </form>
                            <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    Regenerate
                                </button>
                            </form>
                        @endif

                        @if(session('status') == 'two-factor-authentication-enabled')
                            <p>You have now enabled 2fa, please scan the following QR code
                            into your phones authenticator application.
                            {!! auth()->user()->twoFactorQrCodeSvg() !!}

                            <p>Please store theses recovery codes in a secure location.
                            @foreach(json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                                {{ trim($code) }} <br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
