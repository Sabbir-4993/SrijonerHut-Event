<section class="about-modern">
    <div class="auto-container">
        <div class="abm-grid">

            <div class="abm-content wow fadeInUp">
                <span class="abm-eyebrow">About Festival</span>
                <h2 class="abm-title">Welcome to the 9th Bengali Film Festival of Dallas 2026</h2>
                <p class="abm-text">Srijonerhut warmly welcomes you to the 9th edition of the Bengali Film Festival of Dallas, taking place on July 31, August 1 &amp; 2, 2026. This vibrant three-day celebration honors the spirit of Bengali cinema, culture, and heritage while bringing together storytellers, artists, and audiences from around the world.</p>
                <p class="abm-text">We proudly invite filmmakers to submit their work and be part of a dynamic platform that showcases powerful narratives, fresh perspectives, and creative excellence. From independent voices to established directors, the festival embraces stories that inspire, challenge, and connect communities across borders.</p>
                <p class="abm-text">Set in the heart of Dallas, the festival promises unforgettable screenings, engaging conversations, and meaningful cultural exchange. It is more than a film festival—it is a gathering of passion, tradition, and innovation. Join us in celebrating the artistry and storytelling of Bengal. Mark your calendar and be part of this extraordinary cinematic journey.</p>

                <div class="abm-stats">
                    <div class="abm-stat">
                        <span class="abm-stat-num">3</span>
                        <span class="abm-stat-label">Days</span>
                    </div>
                    <div class="abm-stat">
                        <span class="abm-stat-num">8</span>
                        <span class="abm-stat-label">Films</span>
                    </div>
                    <div class="abm-stat">
                        <span class="abm-stat-num">9th</span>
                        <span class="abm-stat-label">Edition</span>
                    </div>
                </div>

                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" title="Festival of Dallas 2026" target="_blank" class="abm-cta">Buy Your Ticket</a>
            </div>

            <div class="abm-media wow fadeIn">
                <a href="https://filmfreeway.com/BengaliFilmFestivalofDallas/tickets" target="_blank" title="9th Bengali Film Festival Poster">
                    <img src="{{asset('../../assets/images/poster/2026/9th Bengali Film festival of Dallas.png')}}" alt="9th Bengali Film Festival of Dallas 2026 Poster">
                </a>
            </div>

        </div>
    </div>
</section>

<style>
    .about-modern { padding: 80px 0; background: #ffffff; }

    .abm-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        align-items: center;
    }

    .abm-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #d8395a;
        margin-bottom: 14px;
    }
    .abm-title {
        font-size: clamp(26px, 3vw, 38px);
        font-weight: 700;
        color: #221016;
        line-height: 1.3;
        margin: 0 0 22px;
    }
    .abm-text {
        font-size: 15px;
        line-height: 1.8;
        color: #6b5a5d;
        margin: 0 0 16px;
    }

    .abm-stats {
        display: flex;
        gap: 36px;
        margin: 28px 0 30px;
    }
    .abm-stat { text-align: left; }
    .abm-stat-num {
        display: block;
        font-size: 32px;
        font-weight: 800;
        color: #221016;
        line-height: 1;
    }
    .abm-stat-label {
        display: block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        color: #9a8a8d;
        margin-top: 6px;
    }

    .abm-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 999px;
        background: #d8395a;
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.3px;
        padding: 14px 34px;
        text-decoration: none;
        box-shadow: 0 10px 26px rgba(216, 57, 90, 0.3);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .abm-cta:hover {
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 14px 32px rgba(216, 57, 90, 0.45);
    }

    .abm-media {
        display: block;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(20, 5, 7, 0.15);
    }
    .abm-media img {
        width: 100%;
        display: block;
        transition: transform 0.5s ease;
    }
    .abm-media:hover img { transform: scale(1.03); }

    @media (max-width: 991px) {
        .abm-grid { grid-template-columns: 1fr; gap: 40px; }
        .abm-media { order: -1; max-width: 420px; margin: 0 auto; }
    }
    @media (max-width: 575px) {
        .about-modern { padding: 55px 0; }
        .abm-stats { gap: 24px; }
        .abm-stat-num { font-size: 26px; }
    }
</style>
