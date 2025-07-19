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

    <!-- Event Logo Section -->
    <section class="event-section">
        <div class="event-outer">
            <div class="auto-container">
                <div class="sec-title  text-center">
                    <span class="title">Exhibition</span>
                    <h2>Nakshikanther Chhobi</h2>
                </div>

                <div class="row">
                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/Sadakalo/Sadakalo_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/RongReginee/RongReginee_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/Kay Kraft/Kay Kraft_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/DESHAL/DESHAL_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/BIBIANA/BIBIANA_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/RHEE/RHEE_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/BANGLA SELAYI/BANGLA SELAYI_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/Signet/Signet_Logo.png')}}" alt=""></a></figure>
                    </div>

                    <div class="event-block col-lg-3 col-md-6 col-sm-12">
                        <figure class="image-logo-box"><a href="{{route('event')}}"><img src="{{asset('assets/images/event/DASHOBHUJA/DASHOBHUJA_Logo.png')}}" alt=""></a></figure>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

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

