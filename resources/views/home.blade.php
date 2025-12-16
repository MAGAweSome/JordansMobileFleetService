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
    <!-- Image slideshow: 3-up with larger center and auto-rotate -->
    @php
    // Bypassing glob() because it fails on some hosting environments.
    // We manually list the image file names known to be in public/images/
    $imageFileNames = [
        'mobile_repair_loader_boom_truck.jpg',
        'heavy_duty_cat_engine_pallet.jpg',
        'field_service_excavator_repair.jpg',
        'truck_chassis_engine_swap.jpg',
        'engine_turbo_closeup.jpg',
        'truck_bay_engine_out.jpg',
        'tandem_truck_service_call.jpg',
        'excavator_on_site_service.jpg',
        'crane_lifting_truck_cab.jpg',
        'jordan_with_cat_diesel_power.jpg',
        'mobile_service_truck_shop_exterior.jpg',
        'in_shop_truck_engine_repair.jpg',
    ];

    // Ensure we have enough items for the carousel minimum (3) by looping the list
    while (count($imageFileNames) < 3) {
        $imageFileNames = array_merge($imageFileNames, $imageFileNames);
    }
    
    // Prepare the final JS-friendly array of objects with correct production URLs
    // The asset() helper guarantees the correct path is rendered.
    $jsImages = array_map(function($n) { 
        // We use a simple capitalized title for the alt text
        $altText = ucwords(str_replace(['_', '.jpg'], [' ', ''], $n));
        
        return [
            'src' => asset('images/'.$n), 
            'alt' => $altText
        ]; 
    }, $imageFileNames);

    // If, for some reason, the file names are bad, we still ensure the array isn't empty
    if (empty($jsImages)) {
        $jsImages[] = ['src' => asset('images/default_placeholder.jpg'), 'alt' => 'Default Image'];
    }
@endphp

    @if(count($jsImages) > 0)
        {{-- Preload slideshow images so they render quickly --}}
        @foreach($jsImages as $img)
            <link rel="preload" as="image" href="{{ $img['src'] }}">
        @endforeach

        <section class="jmfs-gallery">
            <style>
                /* Scoped gallery styles (based on provided sample) */
                .jmfs-gallery { --primary-orange: #FF6600; }
                .jmfs-gallery .slideshow-container {
                    width: 90vw;
                    max-width: 1200px;
                    height: 60vh;
                    perspective: 1000px;
                    overflow: hidden;
                    position: relative;
                    margin: 28px auto 40px;
                }
                .jmfs-gallery .image-carousel {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    transform-style: preserve-3d;
                }
                .jmfs-gallery .slide-item {
                    position: absolute;
                    width: 300px;
                    height: 380px;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
                    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                    opacity: 0;
                    cursor: pointer;
                    border: 4px solid transparent;
                    will-change: transform, opacity;
                    backface-visibility: hidden;
                }
                .jmfs-gallery .slide-item.left {
                    transform: translateX(-350px) scale(0.8) rotateY(20deg);
                    z-index: 10;
                    opacity: 0.5;
                }
                .jmfs-gallery .slide-item.center {
                    transform: translateX(0) scale(1.1);
                    z-index: 20;
                    opacity: 1;
                    border-color: var(--primary-orange);
                    box-shadow: 0 15px 50px rgba(255, 102, 0, 0.4);
                }
                .jmfs-gallery .slide-item.right {
                    transform: translateX(350px) scale(0.8) rotateY(-20deg);
                    z-index: 10;
                    opacity: 0.5;
                }
                .jmfs-gallery .slide-item.start-left {
                    transform: translateX(-1000px) scale(0.5);
                    opacity: 0;
                    z-index: 5;
                }
                .jmfs-gallery .slide-item.start-right {
                    transform: translateX(1000px) scale(0.5);
                    opacity: 0;
                    z-index: 5;
                }
                .jmfs-gallery .slide-item img { width:100%; height:100%; object-fit:cover; display:block; }
                .jmfs-gallery .slideshow-controls { position:absolute; bottom:-60px; left:50%; transform:translateX(-50%); display:flex; gap:20px; }
                .jmfs-gallery .control-button { padding:10px 20px; background-color:var(--primary-orange); color:white; font-weight:bold; border-radius:8px; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,0.3); }
                .jmfs-gallery .control-button:hover { background-color:#e65c00; }
                @media (max-width:900px) { .jmfs-gallery .slide-item { width:250px; height:320px; } .jmfs-gallery .slide-item.left{ transform:translateX(-280px) scale(0.8) rotateY(20deg);} .jmfs-gallery .slide-item.right{ transform:translateX(280px) scale(0.8) rotateY(-20deg);} }
                @media (max-width:600px) { .jmfs-gallery .slideshow-container{ height:50vh; } .jmfs-gallery .slide-item{ width:200px; height:250px;} .jmfs-gallery .slide-item.left{ transform:translateX(-150px) scale(0.7) rotateY(25deg); opacity:0.3;} .jmfs-gallery .slide-item.right{ transform:translateX(150px) scale(0.7) rotateY(-25deg); opacity:0.3;} }
            </style>

            <div class="slideshow-container">
                <div id="carousel" class="image-carousel"></div>

                <div class="slideshow-controls">
                    <div id="prevBtn" class="control-button">Previous</div>
                    <div id="nextBtn" class="control-button">Next</div>
                </div>
            </div>
        </section>

        <script>
            // Images injected from server-side (URLs)
            const images = {!! json_encode($jsImages) !!};
            const carousel = document.getElementById('carousel');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            let currentIndex = 0;
            let intervalId;
            const slideDuration = 5000;
            const transitionDuration = 800; // matches CSS
            const slideElements = [];

            function initCarousel() {
                images.forEach((image, index) => {
                    const slideItem = document.createElement('div');
                    slideItem.className = 'slide-item start-right';
                    slideItem.setAttribute('data-index', index);

                    // Use CSS background-image with the server-generated asset URL
                    slideItem.style.backgroundImage = `url('${image.src}')`;
                    slideItem.style.backgroundSize = 'cover';
                    slideItem.style.backgroundPosition = 'center center';
                    slideItem.setAttribute('aria-label', image.alt || 'Gallery image');

                    carousel.appendChild(slideItem);
                    slideElements.push(slideItem);
                });
                updateCarouselDisplay();
            }

            function updateCarouselDisplay(){
                slideElements.forEach((item, index) => {
                    let offset = index - currentIndex;
                    if (offset > images.length / 2) offset -= images.length;
                    else if (offset < -images.length / 2) offset += images.length;

                    item.className = 'slide-item';
                    if (offset === 0) item.classList.add('center');
                    else if (offset === -1) item.classList.add('left');
                    else if (offset === 1) item.classList.add('right');
                    else if (offset < -1) item.classList.add('start-left');
                    else if (offset > 1) item.classList.add('start-right');
                });
            }

            function moveCarousel(direction){
                resetInterval();
                carousel.style.pointerEvents = 'none';
                if (direction === 'next') currentIndex = (currentIndex + 1) % images.length;
                else currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateCarouselDisplay();
                setTimeout(()=>{ carousel.style.pointerEvents = 'auto'; startInterval(); }, transitionDuration);
            }

            function startInterval(){ if (intervalId) return; intervalId = setInterval(()=>moveCarousel('next'), slideDuration); }
            function resetInterval(){ clearInterval(intervalId); intervalId = null; }

            nextBtn.addEventListener('click', ()=> moveCarousel('next'));
            prevBtn.addEventListener('click', ()=> moveCarousel('prev'));

            carousel.addEventListener('click', (e)=>{
                const item = e.target.closest('.slide-item');
                if (!item || carousel.style.pointerEvents === 'none') return;
                if (item.classList.contains('right')) moveCarousel('next');
                else if (item.classList.contains('left')) moveCarousel('prev');
            });

            window.addEventListener('load', ()=>{ initCarousel(); startInterval(); });
        </script>
    @endif
@endsection