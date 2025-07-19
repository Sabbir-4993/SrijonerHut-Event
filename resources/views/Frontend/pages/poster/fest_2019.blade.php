@extends('Frontend.master')

@section('title')
    2019 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2019 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2019</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2019/film/4th-S-Posharini.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2019/film/4th-S-Posharini.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2019/film/4th-S-Voice-of-Parrot.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2019/film/4th-S-Voice-of-Parrot.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2019/film/fur.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/fur.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2018/film/poster birpurush.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2018/film/poster birpurush.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>
            

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2019/film/live_from_dhaka_1.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2019/film/live_from_dhaka_1.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2019/film/alpha.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2019/film/alpha.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
