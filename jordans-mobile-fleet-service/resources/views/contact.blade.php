@extends('layouts.app')

@section('content')
    <section id="contact-hero" class="hero-section" style="background-image: url('{{ asset('images/contact_image.png') }}');">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>Ready to experience the convenience and reliability of on-site fleet service?</p>
        </div>
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

            <!-- <div class="contact-card">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-user-tie"></i> </div>
                <h3>Rick (Services Writer)</h3>
                <p class="contact-detail">
                    <a href="tel:+12268831969">(226) 883-1969</a>
                </p>
            </div> -->

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
                <strong>Service Area:</strong> Serving Norwich, Ontario, Canada, and surrounding areas.
            </p>
            <!-- <p>
                <strong>Business Hours:</strong><br>
                Monday - Friday: 7:00 AM - 6:00 PM<br>
                Saturday: 9:00 AM - 3:00 PM<br>
                Sunday: Emergency Services Only
            </p> -->
        </div>

        <div class="contact-form-container">
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name" placeholder="First Last" required>
                </div>
                <!-- <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="tel" id="telephone" name="telephone">
                </div> -->
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required>
                </div>
                <!-- <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location">
                </div> -->
                <div class="form-group">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" placeholder="Your message here..." required></textarea>
                </div>
                <button type="submit" class="button">Send Message</button>
            </form>
        </div>
    </section>
@endsection