@extends('Frontend.master')

@section('title')
    2016 | Festivals Gallery
@endsection

@section('bg') {{asset('assets/images/background/banner.jpg')}} @endsection

@section('page_name') 2016 Festivals Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')


    <section class="gallery-modern">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Festivals Gallery</span>
                <h2>2016</h2>
            </div>

            <div class="gm-grid">
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/AN Unknown Guest.jpg')}}" alt="AN Unknown Guest">
                    <div class="gm-overlay">
                        <span class="gm-name">AN Unknown Guest</span>
                        <a href="{{asset('assets/images/poster/2016/film/AN Unknown Guest.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/110744pic_28.jpg')}}" alt="110744pic_28">
                    <div class="gm-overlay">
                        <span class="gm-name">110744pic_28</span>
                        <a href="{{asset('assets/images/poster/2016/film/110744pic_28.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/maya mridaga .raja sen.jpg')}}" alt="maya mridaga .raja sen">
                    <div class="gm-overlay">
                        <span class="gm-name">maya mridaga .raja sen</span>
                        <a href="{{asset('assets/images/poster/2016/film/maya mridaga .raja sen.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/meghmallar.jpg')}}" alt="meghmallar">
                    <div class="gm-overlay">
                        <span class="gm-name">meghmallar</span>
                        <a href="{{asset('assets/images/poster/2016/film/meghmallar.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/ayna by  touqir islam.jpg')}}" alt="ayna by  touqir islam">
                    <div class="gm-overlay">
                        <span class="gm-name">ayna by  touqir islam</span>
                        <a href="{{asset('assets/images/poster/2016/film/ayna by  touqir islam.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
                    </div>
                </div>
                <div class="gm-item wow fadeIn">
                    <img src="{{asset('assets/images/poster/2016/film/The Last Tram  Short Film  Chiranjeet Chakraborty.jpg')}}" alt="The Last Tram  Short Film  Chiranjeet Chakraborty">
                    <div class="gm-overlay">
                        <span class="gm-name">The Last Tram  Short Film  Chiranjeet Chakraborty</span>
                        <a href="{{asset('assets/images/poster/2016/film/The Last Tram  Short Film  Chiranjeet Chakraborty.jpg')}}" class="gm-expand lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a>
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

        .gm-empty {
            text-align: center;
            padding: 60px 20px;
            color: #6b5a5d;
            font-size: 18px;
            font-weight: 600;
        }

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


@endsection
