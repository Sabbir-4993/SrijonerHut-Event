<section class="features-modern">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Features</span>
            <h2>Our Feature</h2>
        </div>

        <div class="ftm-grid">

            <div class="ftm-card wow fadeInUp" data-wow-delay="0ms">
                <div class="ftm-icon"><span class="icon flaticon-lecture"></span></div>
                <h4 class="ftm-title">Great film in one place</h4>
                <p class="ftm-text">BFFD showcases the best and brightest Bengali feature &amp; short films from around the globe — a hub to screen all the major films in the selection.</p>
            </div>

            <div class="ftm-card wow fadeInUp" data-wow-delay="150ms">
                <div class="ftm-icon"><span class="icon flaticon-search"></span></div>
                <h4 class="ftm-title">Networking</h4>
                <p class="ftm-text">Whatever your position in the film industry, or whatever your interest in filmmaking, a film festival is a terrific place to meet new people.</p>
            </div>

            <div class="ftm-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ftm-icon"><span class="icon flaticon-success"></span></div>
                <h4 class="ftm-title">Celebrate Diversity</h4>
                <p class="ftm-text">Films that have similar stories or average production values can undermine a festival's diversity and credibility.</p>
            </div>

            <div class="ftm-card wow fadeInUp" data-wow-delay="450ms">
                <div class="ftm-icon"><span class="icon flaticon-employee"></span></div>
                <h4 class="ftm-title">Community Engagement</h4>
                <p class="ftm-text">Festivals create a sense of community, where locals mingle with visiting filmmakers and share their experiences, and react to the work they have seen.</p>
            </div>

            <div class="ftm-card wow fadeInUp" data-wow-delay="600ms">
                <div class="ftm-icon"><span class="icon flaticon-diamond-1"></span></div>
                <h4 class="ftm-title">Q &amp; A's</h4>
                <p class="ftm-text">BFFD audiences find it a contributing element that makes attending film festivals experiential, and therefore more interesting than curling up on the couch with Netflix.</p>
            </div>

        </div>
    </div>
</section>

<style>
    .features-modern { padding: 80px 0; background: #ffffff; }

    .ftm-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 26px;
        margin-top: 50px;
    }

    .ftm-card {
        background: #faf7fb;
        border-radius: 16px;
        padding: 32px 26px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
    }
    .ftm-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 34px rgba(20, 5, 7, 0.12);
        background: #ffffff;
    }

    .ftm-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: #d8395a;
        color: #ffffff;
        font-size: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }
    .ftm-card:hover .ftm-icon { transform: scale(1.1); }

    .ftm-title { font-size: 18px; font-weight: 700; color: #221016; margin: 0 0 12px; }
    .ftm-text { font-size: 14px; color: #6b5a5d; line-height: 1.7; margin: 0; }

    @media (max-width: 575px) {
        .features-modern { padding: 60px 0; }
        .ftm-grid { grid-template-columns: 1fr; }
    }
</style>
