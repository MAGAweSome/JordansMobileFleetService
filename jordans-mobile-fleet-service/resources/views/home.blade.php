@extends('layouts.app')

@section('content')
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Jordans Mobile Fleet Service!</h1>
            <p>Your reliable partner for on-site trucking solutions.</p>
            <a href="{{ route('contact') }}" class="button hero-button">Get a Free Quote!</a>
        </div>
    </section>
@endsection