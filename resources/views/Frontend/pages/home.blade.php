@extends('Frontend.master')

@section('title')
    Srijoner Hut - Bengali Film Festival
@endsection


@section('content')

    <!-- Banner Section -->
    @include('Frontend.component.banner')
    <!--End Banner Section -->

    <!-- Coming Soon -->
    @include('Frontend.component.coming_soon')
    <!-- End Coming Soon -->

    <!-- About Section -->
    @include('Frontend.component.about')
    <!--End About Section -->

    <!-- Festival Lineup (date-wise) Section -->
    @include('Frontend.component.lineup')
    <!--End Festival Lineup Section -->

    <!-- schedule Section -->
    @include('Frontend.component.schedule')
    <!--End schedule Section -->

    <!-- Features Section Two -->
    @include('Frontend.component.our_feature')
    <!--End Features Section -->

    <!-- Speakers Section -->
    @include('Frontend.component.performers')
    <!-- End Speakers Section -->

    <!-- Fun Fact Section -->
    @include('Frontend.component.counter')
    <!--End Fun Fact Section -->


    <!-- history  Section -->
    @include('Frontend.component.history')
    <!--history  Section -->

    <section class="gallery-modern">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2026</h2>
            </div>

            <div class="gm-grid">

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Short Film - Nilin (FUSED).jpg')}}" alt="Short Film - নিলীন (FUSED)">
                    <div class="gm-overlay">
                        <span class="gm-badge short">Short Film</span>
                        <h5 class="gm-name">নিলীন (FUSED)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Short Film - Nilin (FUSED).jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Utshob.jpg')}}" alt="Feature Film - Utshob">
                    <div class="gm-overlay">
                        <span class="gm-badge feature">Feature Film</span>
                        <h5 class="gm-name">Utshob</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Utshob.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Short Film - Monihara.jpg')}}" alt="Short Film - মণিহারা (Monihara)">
                    <div class="gm-overlay">
                        <span class="gm-badge short">Short Film</span>
                        <h5 class="gm-name">মণিহারা (Monihara)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Short Film - Monihara.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Unveiled 4 (1).jpg')}}" alt="Feature Film - অনাবৃত (Unveiled)">
                    <div class="gm-overlay">
                        <span class="gm-badge feature">Feature Film</span>
                        <h5 class="gm-name">অনাবৃত (Unveiled)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Unveiled 4 (1).jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Short Film - My Comrade.jpg')}}" alt="Short Film - আমার Comrade (My Comrade)">
                    <div class="gm-overlay">
                        <span class="gm-badge short">Short Film</span>
                        <h5 class="gm-name">আমার Comrade (My Comrade)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Short Film - My Comrade.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/552636245_1384105549751118_7262224763491615097_n.jpg')}}" alt="Feature Film - স্বার্থপর (Sharthopor)">
                    <div class="gm-overlay">
                        <span class="gm-badge feature">Feature Film</span>
                        <h5 class="gm-name">স্বার্থপর (Sharthopor)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/552636245_1384105549751118_7262224763491615097_n.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/Short Film - The Sweetness of Air.jpg')}}" alt="Short Film - হাওয়াই মিঠাই (The Sweetness of Air)">
                    <div class="gm-overlay">
                        <span class="gm-badge short">Short Film</span>
                        <h5 class="gm-name">হাওয়াই মিঠাই (The Sweetness of Air)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/Short Film - The Sweetness of Air.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2026/film/WhatsApp Image 2026-07-12 at 6.24.01 PM.jpeg')}}" alt="Feature Film - কর্পূর (Korpur)">
                    <div class="gm-overlay">
                        <span class="gm-badge feature">Feature Film</span>
                        <h5 class="gm-name">কর্পূর (Korpur)</h5>
                        <a href="{{asset('assets/images/poster/2026/film/WhatsApp Image 2026-07-12 at 6.24.01 PM.jpeg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .gallery-modern { padding: 80px 0; background: #faf7fb; }

        .gm-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            margin-top: 50px;
        }

        .gm-item {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            aspect-ratio: 3 / 4;
            box-shadow: 0 8px 24px rgba(20, 5, 7, 0.1);
        }
        .gm-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        .gm-item:hover img { transform: scale(1.08); }

        .gm-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 18px;
            background: linear-gradient(180deg, rgba(11,4,5,0) 40%, rgba(11,4,5,0.92) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gm-item:hover .gm-overlay { opacity: 1; }

        .gm-badge {
            align-self: flex-start;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            padding: 4px 11px;
            border-radius: 999px;
            color: #ffffff;
            margin-bottom: 8px;
        }
        .gm-badge.short { background: #ff5a6e; }
        .gm-badge.feature { background: #f5b301; color: #3a2500; }

        .gm-name { color: #ffffff; font-size: 15px; font-weight: 700; margin: 0; line-height: 1.3; }

        .gm-expand {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            text-decoration: none;
        }
        .gm-expand:hover { background: rgba(255, 255, 255, 0.32); color: #ffffff; }

        @media (max-width: 991px) {
            .gm-grid { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 767px) {
            .gm-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
        }
        @media (max-width: 480px) {
            .gm-grid { grid-template-columns: 1fr; }
        }
    </style>

    <!-- Pricing Section -->

    <!--End Pricing Section -->


    <!-- Video Section -->
{{--    @include('Frontend.component.video')--}}
    <!--End Video Section -->

    <!-- Why Choose Us -->

    <!-- End Why Choose Us -->

    <!--Clients Section-->
    @include('Frontend.component.clients')
    <!--End Clients Section-->



    <!-- Register Section -->

    <!--End Register Section -->


{{--        @include('Frontend.component.gallery_slide')--}}
    <!-- News Section -->
{{--        @include('Frontend.component.blog')--}}

    <!--End News Section -->

@endsection

