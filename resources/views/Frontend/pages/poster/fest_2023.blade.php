@extends('Frontend.master')

@section('title')
    2023 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2023 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2023</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/Noyon Moni.png')}}" alt="Noyon Moni 1976"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/Noyon Moni.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/Prohelika.png')}}" alt="Prohelika 2023"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/Prohelika.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/Kaberi Antardhan.png')}}" alt="Kaberi Antardhan"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/Kaberi Antardhan.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/Shesh Pata.png')}}" alt="Shesh Pata"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/Shesh Pata.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>


                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/MON (The Secret Self).png')}}" alt="MON (The Secret Self)"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/MON (The Secret Self).png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/The Soul.png')}}" alt="The Soul"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/The Soul.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2023/film/Homecoming.png')}}" alt="Homecoming"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2023/film/Homecoming.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
