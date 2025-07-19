@extends('Frontend.master')

@section('title')
    2024 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2024 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2024</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Feature Film - Dabaru (2024).webp')}}" alt="Dabaru"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Feature Film - Dabaru (2024).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Short Film - Astha ().webp')}}" alt="Astha"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Short Film - Astha ().webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Feature Film - Akorik (2023).webp')}}" alt="Akorik"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Feature Film - Akorik (2023).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Short Film - The Songs Beneath (2020).webp')}}" alt="The Songs Beneath (2020)"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Short Film - The Songs Beneath (2020).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>


                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Feature Film - Shyama Kabya (2023).webp')}}" alt="Shyama Kabya"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Feature Film - Shyama Kabya (2023).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Short Film - Shishi Bottler Pass Fail (2017).webp')}}" alt="Shishi Bottler Pass Fail"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Short Film - Shishi Bottler Pass Fail (2017).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2024/film/Feature Film - Kajolrekha (2024).webp')}}" alt="Kajolrekha"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2024/film/Feature Film - Kajolrekha (2024).webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection