@extends('Frontend.master')

@section('title')
    2026 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2026 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2026</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2026/film/Utshob.jpg')}}" alt="Feature Film - Utshob"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2026/film/Utshob.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2026/film/Unveiled 4 (1).jpg')}}" alt="Feature Film - অনাবৃত (Unveiled)"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2026/film/Unveiled 4 (1).jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2026/film/552636245_1384105549751118_7262224763491615097_n.jpg')}}" alt="Feature Film - স্বার্থপর (Sharthopor)"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2026/film/552636245_1384105549751118_7262224763491615097_n.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2026/film/WhatsApp Image 2026-07-12 at 6.24.01 PM.jpeg')}}" alt="Feature Film - কর্পূর (Korpur)"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2026/film/WhatsApp Image 2026-07-12 at 6.24.01 PM.jpeg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
