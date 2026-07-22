<section class="history-modern">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">History</span>
            <h2>Past Events</h2>
        </div>

        <div class="hsm-grid">

            <a href="{{route('festival.fest_2026')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2026/9th Bengali Film festival of Dallas.png')}}" alt="2026 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2026</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2025')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2025/2025_02_03_Film Festival Poster.png')}}" alt="2025 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2025</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2024')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2024/7th Bengali Film Festival of Dallas.webp')}}" alt="2024 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2024</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2023')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2023/2023_Poster.jpg')}}" alt="2023 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2023</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2022')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2022/2022_Poster.jpg')}}" alt="2022 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2022</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2019')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2019/4th poster.jpg')}}" alt="2019 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2019</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2018')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2018/3rd poster.png')}}" alt="2018 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2018</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2017')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2017/2nd part_new.jpg')}}" alt="2017 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2017</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

            <a href="{{route('festival.fest_2016')}}" class="hsm-card wow fadeIn">
                <img src="{{asset('assets/images/poster/2016/2016.jpg')}}" alt="2016 poster">
                <div class="hsm-overlay">
                    <span class="hsm-year">2016</span>
                    <span class="hsm-view">View Gallery <i class="fa fa-arrow-right"></i></span>
                </div>
            </a>

        </div>
    </div>
</section>

<style>
    .history-modern { padding: 80px 0; background: #ffffff; }

    .hsm-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin-top: 50px;
    }

    .hsm-card {
        position: relative;
        display: block;
        border-radius: 14px;
        overflow: hidden;
        aspect-ratio: 3 / 4;
        box-shadow: 0 8px 22px rgba(20, 5, 7, 0.1);
        text-decoration: none;
    }
    .hsm-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }
    .hsm-card:hover img { transform: scale(1.08); }

    .hsm-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 16px;
        background: linear-gradient(180deg, rgba(11,4,5,0) 45%, rgba(11,4,5,0.9) 100%);
    }

    .hsm-year {
        font-size: 22px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        margin-bottom: 8px;
    }

    .hsm-view {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.3px;
        color: #f5b301;
        opacity: 0;
        transform: translateY(6px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .hsm-view i { margin-left: 4px; font-size: 11px; }
    .hsm-card:hover .hsm-view { opacity: 1; transform: translateY(0); }

    @media (max-width: 991px) {
        .hsm-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 575px) {
        .hsm-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    }
</style>
