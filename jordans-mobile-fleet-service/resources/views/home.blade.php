@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#home">
                <img src="{{ asset('images/logo.png') }}" alt="Jordans Mobile Fleet Service Logo" class="logo">
            </a>
        </div>
        <ul>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home" class="section">
        <h1>Welcome to Jordans Mobile Fleet Service!</h1>
        <p>Your reliable partner for all your trucking needs.</p>
    </section>

    <section id="about-us" class="section">
        <h2>About Us</h2>
        <p>This is where you'll put information about your company, its mission, and values.</p>
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
        <p>
            Ready to experience the convenience and reliability of on-site fleet service?
            Contact Jordans Mobile Fleet Service today!
        </p>
        <div class="contact-info-block">
            <p>
                <span class="contact-person"><strong>JORDAN</strong> Owner</span><br>
                <a href="tel:+12269793659">(226) 979-3659</a>
            </p>
            <p>
                <span class="contact-person"><strong>RICK</strong> Services Writer</span><br>
                <a href="tel:+12268831969">(226) 883-1969</a>
            </p>
            <p>
                <span class="contact-icon">&#9993;</span>
                <a href="mailto:Admin@jordansmobilefleetservice.com">Admin@jordansmobilefleetservice.com</a>
            </p>
        </div>
        <p>
            <strong>Service Area:</strong> Serving Woodstock, Ontario, Canada, and surrounding areas.
        </p>
        <p>
            **Business Hours:**<br>
            Monday - Friday: 7:00 AM - 6:00 PM<br>
            Saturday: 9:00 AM - 3:00 PM<br>
            Sunday: Emergency Services Only
        </p>
        <div class="contact-form-placeholder">
            <p>We will add a contact form here soon!</p>
        </div>
    </section>
@endsection