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
        <div class="container narrow-wrapper">
            <h2 style="text-align:center;">Contact Us</h2>

            <p class="section-intro" style="text-align:center;">Ready to experience the convenience and reliability of on-site fleet service? Use the contact details below or send a message using the form.</p>

            <div class="contact-grid" style="margin-top:18px;">
                <div class="contact-card">
                    <div class="contact-icon-wrapper">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Jordan (Owner)</h3>
                    <p class="contact-detail">
                        <a href="tel:+12269793659">(226) 979-3659</a>
                    </p>
                </div>

                <div class="contact-card contact-email-card">
                    <div class="contact-icon-wrapper">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p class="contact-detail">
                        <a href="mailto:Admin@jordansmobilefleetservice.com">Admin@jordansmobilefleetservice.com</a>
                    </p>
                </div>
            </div>

            <!-- removed repetitive service line from here; added improved, centered wording below the map -->

            <div style="display:flex; justify-content:center;">
                <div style="width:100%; max-width:720px;">
                    <div style="text-align:center; margin-bottom:12px;">
                        <div style="font-size:1.25rem; font-weight:800; color:var(--primary);">(226) 979-3659</div>
                        <div style="color:#d0d0d0;">Click to call or use the form below</div>
                    </div>

                    <div class="contact-form-container">
                        <div class="contact-form-card">
                            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Describe Your Service Request <span class="required">*</span></label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="button">Request Service Quote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top:22px; text-align:center;">
                <h4 style="color:var(--muted-text); margin-bottom:8px;">Our Location / Service Area</h4>
                <p style="color:#e0e0e0; margin-bottom:10px; max-width:900px; margin-left:auto; margin-right:auto;">
                    Service Area: Norwich, Ontario and surrounding communities — on-site fleet support across the region and in-shop repairs as needed.
                </p>
                <div style="width:100%; height:320px; border-radius:8px; overflow:hidden; box-shadow:0 8px 20px rgba(0,0,0,0.25);">
                    <iframe src="https://www.google.com/maps?q=Norwich%20Ontario&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection