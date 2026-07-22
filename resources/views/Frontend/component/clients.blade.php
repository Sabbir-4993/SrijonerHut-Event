<section class="clients-section sponsors-modern">
    <div class="anim-icons">
        <span class="icon icon-dots-3 wow zoomIn"></span>
        <span class="icon icon-circle-blue wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Partners</span>
            <h2>Official Sponsors</h2>
        </div>

        <div class="spm-group">
            <h3 class="spm-heading">Co-Organiser</h3>
            <div class="spm-grid">
                <div class="spm-card wow fadeIn">
                    <img src="{{asset('../../assets/images/clients/Community/Bipam.jpg')}}" alt="Co-Organiser">
                </div>
            </div>
        </div>

        <div class="spm-group">
            <h3 class="spm-heading">Sponsors</h3>
            <div class="spm-grid">
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/Baylor.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/01.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/02.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/03.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/04.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/06.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/05.png')}}" alt="Sponsor"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Sponsors/07.png')}}" alt="Sponsor"></div>
            </div>
        </div>

        <div class="spm-group">
            <h3 class="spm-heading">Community Partner</h3>
            <div class="spm-grid">
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/01.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/02.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/03.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/05.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/06.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/04.jpg')}}" alt="Community Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Community/antorik.jpg')}}" alt="Community Partner"></div>
            </div>
        </div>

        <div class="spm-group">
            <h3 class="spm-heading">Media Partner</h3>
            <div class="spm-grid">
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Media/01.jpg')}}" alt="Media Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Media/02.jpg')}}" alt="Media Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Media/03.jpg')}}" alt="Media Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Media/04.jpg')}}" alt="Media Partner"></div>
                <div class="spm-card wow fadeIn"><img src="{{asset('../../assets/images/clients/Media/06.jpg')}}" alt="Media Partner"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .sponsors-modern { background: #faf7fb; }
    .spm-group { margin-bottom: 46px; }
    .spm-group:last-child { margin-bottom: 0; }

    .spm-heading {
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #d8395a;
        margin: 0 0 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #efe6e8;
    }

    .spm-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 18px;
    }

    .spm-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #efe6e8;
        aspect-ratio: 4 / 3;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 18px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .spm-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(20, 5, 7, 0.12);
    }
    .spm-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        filter: grayscale(35%);
        opacity: 0.85;
        transition: all 0.3s ease;
    }
    .spm-card:hover img { filter: grayscale(0%); opacity: 1; }

    @media (max-width: 575px) {
        .spm-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
        .spm-card { padding: 14px; }
    }
</style>
