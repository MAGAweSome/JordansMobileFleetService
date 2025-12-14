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
            <h1>Jordan's Mobile Fleet Service: Your Trusted Partner for On-Site Repair.</h1>
            <p>Mobile truck & trailer repair — fast, professional, and on-location to minimize your downtime.</p>
            <a href="{{ route('contact') }}" class="button hero-button">Request Service Quote</a>
        </div>
    </section>
@endsection