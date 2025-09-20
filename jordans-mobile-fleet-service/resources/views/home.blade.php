@extends('layouts.app')

@section('content')
    <section id="home" class="hero-section hero-video-section">
        <div class="video-slideshow">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="{{ asset('videos/truck_hood.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Jordans Mobile Fleet Service!</h1>
            <p>Your reliable partner for on-site trucking solutions.</p>
            <a href="{{ route('contact') }}" class="button hero-button">Get a Free Quote!</a>
        </div>
    </section>
@endsection