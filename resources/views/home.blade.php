@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="container hero-content">
            <div>
                <p class="eyebrow">Ramen shop point of sale</p>
                <h1>Warm bowls, welcoming service, organized records.</h1>
                <p class="lead">Raimen is a simple POS foundation for a neighborhood ramen shop. It keeps customer and staff records easy to review.</p>
                <div class="button-row">
                    <a class="button button-primary" href="{{ route('customers.index') }}">Customer accounts</a>
                    <a class="button button-secondary" href="{{ route('users.index') }}">Staff accounts</a>
                </div>
            </div>
        </div>
    </section>

@endsection
