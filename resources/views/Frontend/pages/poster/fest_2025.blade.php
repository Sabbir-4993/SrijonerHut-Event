@extends('Frontend.master')

@section('title')
    2025 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2025 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2025</h2>
            </div>

            <div class="row">

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Short Film - Re-Routing by Kankana Charaborty.webp')}}" alt="Short Film - Re-Routing by Kankana Charaborty"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Short Film - Re-Routing by Kankana Charaborty.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Feature Film - Nakshi Kanthar Jamin.webp')}}" alt="Feature Film - Nakshi Kanthar Jamin"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Feature Film - Nakshi Kanthar Jamin.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Short Film - The Ruin.webp')}}" alt="Short Film - The Ruin"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Short Film - The Ruin.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Feature Film - Bijoyar Pore.webp')}}" alt="Feature Film - Bijoyar Pore"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Feature Film - Bijoyar Pore.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Short Film - The Circle by Mahamudul Hasan Tipu.webp')}}" alt="Short Film - The Circle by Mahamudul Hasan Tipu"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Short Film - The Circle by Mahamudul Hasan Tipu.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Feature Film - Padatik.webp')}}" alt="Feature Film - Padatik"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Feature Film - Padatik.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Short Film - Manchitro_ The Homeland.webp')}}" alt="Short Film - Manchitro: The Homeland"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Short Film - Manchitro_ The Homeland.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item -->
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/poster/2025/flim/Feature Film - Parikrama.webp')}}" alt="Feature Film - Parikrama"></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/poster/2025/flim/Feature Film - Parikrama.webp')}}" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
