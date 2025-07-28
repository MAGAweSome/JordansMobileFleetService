@extends('layouts.app')

@section('content')
    <section id="home" class="hero-section">
        <div class="video-slideshow">
            <video autoplay muted playsinline class="hero-video active" data-video-index="0">
                <source src="{{ asset('videos/calipers.mp4') }}" type="video/mp4">
            </video>
            <video muted playsinline class="hero-video" data-video-index="1">
                <source src="{{ asset('videos/tire_change.mp4') }}" type="video/mp4">
            </video>
            <video muted playsinline class="hero-video" data-video-index="2">
                <source src="{{ asset('videos/tools_closeup.mp4') }}" type="video/mp4">
            </video>
            <video muted playsinline class="hero-video" data-video-index="3">
                <source src="{{ asset('videos/truck_hood.mp4') }}" type="video/mp4">
            </video>
            <video muted playsinline class="hero-video" data-video-index="4">
                <source src="{{ asset('videos/welding.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Jordans Mobile Fleet Service!</h1>
            <p>Your reliable partner for on-site trucking solutions.</p>
            <a href="#contact" class="button hero-button">Get a Free Quote!</a>
        </div>
    </section>

    <section id="about-us" class="section">
        <h2>About Us</h2>
        <div class="about-container">
            <div class="about-intro">
                <p>
                    Welcome to <strong>Jordans Mobile Fleet Service</strong>, your trusted partner for convenient,
                    expert truck and trailer repair right here in Southern Ontario. As a new, local, and
                    owner-operated business, I'm Jordan, and I bring the full-service mechanic shop experience
                    directly to your location. My mission is simple: to minimize your fleet's downtime
                    and keep your operations running smoothly with reliable, on-site solutions.
                </p>
            </div>

            <div class="about-cards">
                <div class="about-card">
                    <h3>Our Vision</h3>
                    <p>
                        To be the leading mobile fleet service in the region, recognized for our speed,
                        expertise, and unwavering commitment to customer satisfaction. We aim to build
                        long-term relationships based on trust and exceptional service.
                    </p>
                </div>
                <div class="about-card">
                    <h3>Our Values</h3>
                    <ul>
                        <li><strong>Reliability:</strong> We show up on time and get the job done right.</li>
                        <li><strong>Expertise:</strong> Certified skills for all types of fleet vehicles.</li>
                        <li><strong>Efficiency:</strong> Get back on the road faster with on-site repairs.</li>
                        <li><strong>Transparency:</strong> Clear communication and fair pricing always.</li>
                        <li><strong>Local Focus:</strong> Dedicated to supporting businesses in our community.</li>
                    </ul>
                </div>
                <div class="about-card">
                    <h3>The Jordan's Advantage</h3>
                    <p>
                        As a solo, local mechanic, I offer personalized service you won't find anywhere else.
                        You'll always deal directly with me, ensuring clear communication and consistent quality.
                        My mobile setup means less hassle and more savings for your business – no towing,
                        no lengthy shop waits, just expert service delivered right to you.
                    </p>
                </div>
            </div>

            <div class="about-cta">
                <p>
                    Experience the difference a dedicated, mobile mechanic can make for your fleet.
                </p>
                <a href="#contact" class="button">Contact Jordan Today!</a>
            </div>
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

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <p class="contact-intro">
            Ready to experience the convenience and reliability of on-site fleet service?
            Contact Jordans Mobile Fleet Service today!
        </p>

        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-user-circle"></i> </div>
                <h3>Jordan (Owner)</h3>
                <p class="contact-detail">
                    <a href="tel:+12269793659">(226) 979-3659</a>
                </p>
            </div>

            <div class="contact-card">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-user-tie"></i> </div>
                <h3>Rick (Services Writer)</h3>
                <p class="contact-detail">
                    <a href="tel:+12268831969">(226) 883-1969</a>
                </p>
            </div>

            <div class="contact-card contact-email-card">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-envelope"></i> </div>
                <h3>Email Us</h3>
                <p class="contact-detail">
                    <a href="mailto:Admin@jordansmobilefleetservice.com">Admin@jordansmobilefleetservice.com</a>
                </p>
            </div>
        </div>

        <div class="service-details-block">
            <p>
                <strong>Service Area:</strong> Serving Woodstock, Ontario, Canada, and surrounding areas.
            </p>
            <p>
                <strong>Business Hours:</strong><br>
                Monday - Friday: 7:00 AM - 6:00 PM<br>
                Saturday: 9:00 AM - 3:00 PM<br>
                Sunday: Emergency Services Only
            </p>
        </div>

        <div class="contact-form-placeholder">
            <p>We will add a contact form here soon!</p>
        </div>
    </section>
@endsection