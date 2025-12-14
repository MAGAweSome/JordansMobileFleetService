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
            <p>Comprehensive services to keep your fleet operational. We provide professional mobile and shop services tailored for heavy-duty fleet vehicles. Choose a category to explore related services.</p>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container narrow-wrapper">
            <!-- heading intentionally removed to avoid repetition with hero overlay -->

            <div class="services-columns">
                <div>
                    <h4 style="color:var(--muted-text); margin-bottom:8px;">Field Service</h4>
                    <div>
                        <span class="service-pill">Brake Repairs & Adjustments</span>
                        <span class="service-pill">On-site Diagnostics</span>
                        <span class="service-pill">Roadside Emergency Repair</span>
                        <span class="service-pill">Hydraulic & PTO Service</span>
                    </div>
                </div>

                <div>
                    <h4 style="color:var(--muted-text); margin-bottom:8px;">In-Shop & Heavy Repair</h4>
                    <div>
                        <span class="service-pill">Engine Overhaul & Diagnostics</span>
                        <span class="service-pill">Transmission Service</span>
                        <span class="service-pill">Cooling System Flushes & Repair</span>
                        <span class="service-pill">Suspension & Steering Repair</span>
                    </div>
                </div>

                <div>
                    <h4 style="color:var(--muted-text); margin-bottom:8px;">Maintenance</h4>
                    <div>
                        <span class="service-pill">Preventative Maintenance</span>
                        <span class="service-pill">Oil & Filter Changes</span>
                        <span class="service-pill">Tire Service & Balancing</span>
                        <span class="service-pill">Fleet Inspection Programs</span>
                    </div>
                </div>
            </div>

            <div style="text-align:center; margin-top:18px;">
                <a href="{{ route('contact') }}" class="button">Request Service Quote</a>
            </div>
        </div>
    </section>
@endsection