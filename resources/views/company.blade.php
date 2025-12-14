@extends('layouts.app')

@section('content')
    <section id="company-hero" class="hero-section hero-video-section">
        <div class="video-slideshow">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="{{ asset('videos/tools_closeup.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>About Jordans Mobile Fleet Service</h1>
            <p>Your trusted partner for convenient, expert truck and trailer repair.</p>
        </div>
    </section>

    <section id="about-us" class="section">
        <div class="container narrow-wrapper text-center">
            <h2>About Us</h2>
            <div class="about-intro" style="max-width:900px; margin:0 auto 18px;">
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

            <div class="about-cta" style="text-align:center; margin-top:10px;">
                <p>
                    Experience the difference a dedicated, mobile mechanic can make for your fleet.
                </p>
                <div style="text-align:center; margin-top:10px;">
                    <a href="{{ route('contact') }}" class="button">Contact Jordan Today!</a>
                </div>
            </div>
        </div>
    </section>
@endsection