<footer class="main-footer footer-modern">
    <div class="ftw-widgets">
        <div class="auto-container">
            <div class="ftw-grid">

                <div class="ftw-col ftw-about">
                    <a href="{{route('index')}}" class="ftw-logo"><img src="{{asset('assets/images/logo/logo-200x70.png')}}" alt="Srijoner Hut"></a>
                    <p class="ftw-text">Srijoner Hut, the Bengali film festival of Dallas, fuses the spirit of Bengal with an award-winning selection of Bengali films from every walk of life — bringing together the Bengali community around films from Bengal (Bangladesh &amp; West Bengal), Europe, and North America.</p>
                    <ul class="ftw-social">
                        <li><a href="https://www.facebook.com/srijonerhut" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="ftw-col">
                    <h3 class="ftw-title">Useful Links</h3>
                    <ul class="ftw-links">
                        <li><a href="{{route('about')}}"><i class="fa fa-chevron-right"></i> About Us</a></li>
                        <li><a href="{{route('news.video')}}"><i class="fa fa-chevron-right"></i> Video</a></li>
                        <li><a href="{{route('news.gallery')}}"><i class="fa fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="{{route('contact')}}"><i class="fa fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <div class="ftw-col">
                    <h3 class="ftw-title">Contact Us</h3>
                    <ul class="ftw-contact">
                        <li>
                            <span class="ftw-icon"><i class="flaticon-clock"></i></span>
                            <div>31 July - 02 August | 2026<br>Starts 10:00 am to 08:00 pm</div>
                        </li>
                        <li>
                            <span class="ftw-icon"><i class="flaticon-phone"></i></span>
                            <div><a href="tel:+1-2147704273">+1-214-770-4273</a></div>
                        </li>
                        <li>
                            <span class="ftw-icon"><i class="flaticon-paper-plane"></i></span>
                            <div><a href="mailto:creativex@srijonerhut.com">creativex@srijonerhut.com</a></div>
                        </li>
                        <li>
                            <span class="ftw-icon"><i class="flaticon-worldwide"></i></span>
                            <div>Angelika Film Center,<br>5321 E Mockingbird Ln #230, Dallas, TX 75206</div>
                        </li>
                    </ul>
                </div>

                <div class="ftw-col">
                    <h3 class="ftw-title">Media Partner</h3>
                    <div class="ftw-media">
                        <a href="{{asset('assets/images/media/01.png')}}" class="lightbox-image" title="Media Partner"><img src="{{asset('assets/images/media/01.png')}}" alt="Media Partner"></a>
                        <a href="{{asset('assets/images/media/02.png')}}" class="lightbox-image" title="Media Partner"><img src="{{asset('assets/images/media/02.png')}}" alt="Media Partner"></a>
                        <a href="{{asset('assets/images/media/03.png')}}" class="lightbox-image" title="Media Partner"><img src="{{asset('assets/images/media/03.png')}}" alt="Media Partner"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="ftw-bottom">
        <div class="auto-container">
            <p class="ftw-copy">© Copyright <span id="year"></span> All Rights Reserved by <a href="{{route('index')}}">Srijonerhut</a></p>
        </div>
    </div>
</footer>

<style>
    .footer-modern { background: #0b0405; }

    .ftw-widgets { padding: 70px 0 40px; }

    .ftw-grid {
        display: grid;
        grid-template-columns: 1.6fr 1fr 1.3fr 1fr;
        gap: 40px;
    }

    .ftw-logo { display: inline-block; margin-bottom: 18px; }
    .ftw-logo img { max-width: 160px; height: auto; }

    .ftw-text { font-size: 14px; line-height: 1.8; color: #b09499; margin: 0 0 22px; }

    .ftw-social { list-style: none; display: flex; gap: 10px; margin: 0; padding: 0; }
    .ftw-social a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        font-size: 14px;
        transition: background 0.25s ease, border-color 0.25s ease;
    }
    .ftw-social a:hover { background: #d8395a; border-color: #d8395a; color: #ffffff; }

    .ftw-title {
        font-size: 16px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 22px;
        padding-bottom: 14px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .ftw-links { list-style: none; margin: 0; padding: 0; }
    .ftw-links li { margin-bottom: 12px; }
    .ftw-links a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #b09499;
        text-decoration: none;
        transition: color 0.25s ease;
    }
    .ftw-links a i { font-size: 10px; color: #d8395a; }
    .ftw-links a:hover { color: #ffffff; }

    .ftw-contact { list-style: none; margin: 0; padding: 0; }
    .ftw-contact li { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 18px; }
    .ftw-contact li:last-child { margin-bottom: 0; }
    .ftw-icon {
        flex-shrink: 0;
        width: 34px;
        height: 34px;
        margin: 0;
        border-radius: 50%;
        background: rgba(245, 179, 1, 0.12);
        color: #f5b301;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        line-height: 1;
    }
    .ftw-contact div { font-size: 13px; line-height: 1.7; color: #b09499; }
    .ftw-contact a { color: #b09499; text-decoration: none; }
    .ftw-contact a:hover { color: #f5b301; }

    .ftw-media { display: flex; flex-wrap: wrap; gap: 12px; }
    .ftw-media a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 68px;
        height: 68px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 10px;
        transition: transform 0.25s ease, background 0.25s ease;
    }
    .ftw-media a:hover { transform: translateY(-4px); background: rgba(255, 255, 255, 0.1); }
    .ftw-media img { max-width: 100%; max-height: 100%; object-fit: contain; }

    .ftw-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        padding: 22px 0;
    }
    .ftw-copy { margin: 0; text-align: center; font-size: 13px; color: #8a7a7d; }
    .ftw-copy a { color: #f5b301; text-decoration: none; }
    .ftw-copy a:hover { color: #ffffff; }

    @media (max-width: 991px) {
        .ftw-grid { grid-template-columns: 1fr 1fr; gap: 36px 24px; }
    }
    @media (max-width: 575px) {
        .ftw-widgets { padding: 50px 0 30px; }
        .ftw-grid { grid-template-columns: 1fr; gap: 32px; }
    }
</style>

<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
