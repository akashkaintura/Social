@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $plan->name }}</div>
                <div class="card-body">

                    <form action="{{ route('subscription.create') }}" method="post" id="payment-form">
                        @csrf

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
