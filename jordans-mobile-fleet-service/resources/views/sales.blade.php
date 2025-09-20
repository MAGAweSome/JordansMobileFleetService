@extends('layouts.app')

@section('content')
    <section id="sales-hero" class="hero-section hero-video-section">
        <div class="video-slideshow">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="{{ asset('videos/calipers.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Our Services</h1>
            <p>Comprehensive services to keep your fleet operational.</p>
        </div>
    </section>

    <section id="services" class="section">
        <h2>Our Services</h2>
        <p>We offer the following comprehensive services to keep your fleet operational:</p>
        <div class="services-columns">
            <ul>
                <li>Brakes</li>
                <li>Drive Trains</li>
                <li>Engine Diagnostics & Repair</li>
                <li>Preventative Maintenance</li>
                <li>Suspensions</li>
                <li>Trailer Services</li>
            </ul>
            <ul>
                <li>Cooling Systems</li>
                <li>Hydraulics</li>
                <li>Oil Changes</li>
                <li>Steering</li>
                <li>Tires</li>
                <li>Transmissions</li>
            </ul>
        </div>
        <p class="text-center">... and more</p>
        <p class="text-center">Contact us regarding all your service needs!</p>
    </section>
@endsection