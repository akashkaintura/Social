@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <div class="card-body">
                        <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                            Login with Facebook
                         </a>

                        <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                            Login with Twitter
                        </a>

                        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                            Login with Google
                        </a>


                         <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                                 Login with Github
                        </a>

                        {{-- <a href="{{ route('views.__register') }}" class=" btn btn-primary btn-block">
                        Register with Email
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
