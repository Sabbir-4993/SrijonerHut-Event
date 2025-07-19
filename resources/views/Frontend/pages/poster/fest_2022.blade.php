@extends('Frontend.master')

@section('title')
    2022 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2022 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2022</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/Bishwoshundori.png')}}" alt="Bishwoshundori"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/Bishwoshundori.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/Soi.png')}}" alt="Soi"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/Soi.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/gor.png')}}" alt="gor"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/gor.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/ari mon shopno.png')}}" alt="ari mon shopno"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/ari mon shopno.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>


                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/abar kanchenjunga.png')}}" alt="abar kanchenjunga"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/abar kanchenjunga.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/moshari.png')}}" alt="moshari"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/moshari.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/mahananda.png')}}" alt="mahananda"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/mahananda.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/Miracle In Heaven.png')}}" alt="Miracle In Heaven"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/Miracle In Heaven.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2022/film/Ichchepuran.png')}}" alt="Ichchepuran"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2022/film/Ichchepuran.png')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
