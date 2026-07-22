<section class="banner-section banner-modern">
    <div class="banner-carousel owl-carousel owl-theme">

        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url('{{asset("../../assets/images/main-slider/3_2024.webp")}}');">
            <div class="bnm-veil"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="title bnm-badge"><i class="fa fa-calendar-alt"></i> July 31, 2026</span>
                    <h2>9th Bengali Film <br> Festival of Dallas 2026</h2>
                    <ul class="info-list">
                        <li><a style="text-decoration: none; color: #ffffff" href="https://goo.gl/maps/3mBhqyrJbPvRX9kW9" target="_blank" title="Angelika Film Center & Café - Dallas"><span class="icon fa fa-map-marker-alt"></span>Angelika Film Center & Café - Dallas </a></li>
                    </ul>
                    <div class="btn-box">
                        <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="theme-btn btn-style-two bnm-cta"><span class="btn-title">Buy Your Ticket</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url('{{asset("../../assets/images/main-slider/2024/Rituparna_01.gif")}}');">
            <div class="bnm-veil"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="title bnm-badge"><i class="fa fa-calendar-alt"></i> August 1, 2026</span>
                    <h2>A Grand Celebration of Bengali Cinema, Fashion &amp; Heritage</h2>
                    <ul class="info-list">
                        <li><a style="text-decoration: none; color: #ffffff" href="https://goo.gl/maps/3mBhqyrJbPvRX9kW9" target="_blank" title="Angelika Film Center & Café - Dallas"><span class="icon fa fa-map-marker-alt"></span>Angelika Film Center & Café - Dallas </a></li>
                    </ul>
                    <div class="btn-box">
                        <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="theme-btn btn-style-two bnm-cta"><span class="btn-title">Buy Your Ticket</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item" style="background-image: url('{{asset("../../assets/images/main-slider/1_2024.webp")}}');">
            <div class="bnm-veil"></div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="title bnm-badge"><i class="fa fa-calendar-alt"></i> August 2, 2026</span>
                    <h2>পর্দায় বাংলা — Bengal on the Big Screen, <br> Under the Dallas Sky</h2>
                    <ul class="info-list">
                        <li><a style="text-decoration: none; color: #ffffff" href="https://goo.gl/maps/3mBhqyrJbPvRX9kW9" target="_blank" title="Angelika Film Center & Café - Dallas"><span class="icon fa fa-map-marker-alt"></span>Angelika Film Center & Café - Dallas </a></li>
                    </ul>
                    <div class="btn-box">
                        <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="theme-btn btn-style-two bnm-cta"><span class="btn-title">Buy Your Ticket</span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    /* Modern polish layered on top of the existing Owl Carousel + reveal-animation markup.
       Structural classes (title/h2/info-list/btn-box/active) are untouched so the
       theme's built-in slide-in timing and carousel JS keep working as-is. */

    .banner-modern .slide-item {
        min-height: 92vh;
        display: flex;
        align-items: center;
        padding: 160px 0;
    }
    /* the theme's own :before overlay is 70% black; our gradient veil already
       handles legibility, so dial that base overlay back to avoid double-darkening */
    .banner-modern .slide-item:before { opacity: 0.25; }

    .bnm-veil {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(180deg, rgba(11,4,5,0.55) 0%, rgba(11,4,5,0.35) 45%, rgba(11,4,5,0.85) 100%);
    }

    .banner-modern .content-box { z-index: 2; }

    .bnm-badge {
        display: inline-flex !important;
        align-items: center;
        gap: 8px;
        background: rgba(245, 179, 1, 0.14);
        border: 1px solid rgba(245, 179, 1, 0.4);
        border-radius: 999px;
        padding: 8px 20px;
        font-size: 14px !important;
        font-weight: 700;
        color: #f5b301 !important;
    }

    .banner-modern .content-box h2 {
        font-size: clamp(30px, 4.2vw, 74px);
        text-shadow: 0 4px 24px rgba(0,0,0,0.4);
    }

    .banner-modern .content-box .info-list li {
        font-size: clamp(13px, 1.4vw, 18px);
    }

    .bnm-cta {
        border-radius: 999px !important;
        box-shadow: 0 10px 30px rgba(216, 57, 90, 0.35);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .bnm-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 36px rgba(216, 57, 90, 0.5);
    }

    /* Owl nav arrows */
    .banner-modern .owl-nav {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        padding: 0 26px;
        z-index: 3;
        pointer-events: none;
    }
    .banner-modern .owl-nav > div {
        pointer-events: all;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.25);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        margin: 0;
        transition: background 0.25s ease, transform 0.25s ease;
    }
    .banner-modern .owl-nav > div:hover {
        background: #d8395a;
        border-color: #d8395a;
        transform: scale(1.08);
    }

    /* Owl dots */
    .banner-modern .owl-dots {
        position: absolute;
        bottom: 26px;
        left: 0;
        right: 0;
        z-index: 3;
        display: flex;
        justify-content: center;
        gap: 8px;
    }
    .banner-modern .owl-dots .owl-dot span {
        display: block;
        width: 10px;
        height: 10px;
        margin: 0;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.4);
        transition: all 0.25s ease;
    }
    .banner-modern .owl-dots .owl-dot.active span {
        width: 26px;
        background: #f5b301;
    }

    @media (max-width: 991px) {
        .banner-modern .slide-item { min-height: 80vh; padding: 120px 0; }
        .banner-modern .owl-nav > div { width: 40px; height: 40px; font-size: 14px; }
    }
    @media (max-width: 575px) {
        .banner-modern .slide-item { min-height: 70vh; padding: 90px 0; }
        .bnm-badge { font-size: 12px !important; padding: 6px 14px; }
        .banner-modern .owl-nav { display: none; }
        .banner-modern .owl-dots { bottom: 16px; }
    }
</style>
