@extends('Frontend.master')

@section('title')
    2016 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2016 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2016</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/AN Unknown Guest.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/AN Unknown Guest.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/110744pic_28.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/110744pic_28.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/maya mridaga .raja sen.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/maya mridaga .raja sen.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/meghmallar.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/meghmallar.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/ayna by  touqir islam.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/ayna by  touqir islam.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2016/film/The Last Tram  Short Film  Chiranjeet Chakraborty.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2016/film/The Last Tram  Short Film  Chiranjeet Chakraborty.jpg')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
