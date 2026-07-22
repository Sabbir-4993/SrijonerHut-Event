<section class="counter-modern">
    <div class="auto-container">
        <div class="cnm-grid">

            <div class="cnm-card count-box wow fadeInUp" data-wow-delay="0ms">
                <span class="cnm-icon icon_headphones"></span>
                <div class="cnm-number"><span class="count-text" data-speed="3000" data-stop="5">0</span></div>
                <h4 class="cnm-label">Festival</h4>
            </div>

            <div class="cnm-card count-box wow fadeInUp" data-wow-delay="150ms">
                <span class="cnm-icon icon_ribbon_alt"></span>
                <div class="cnm-number"><span class="count-text" data-speed="3000" data-stop="40">0</span></div>
                <h4 class="cnm-label">Films Published</h4>
            </div>

            <div class="cnm-card count-box wow fadeInUp" data-wow-delay="300ms">
                <span class="cnm-icon icon_like"></span>
                <div class="cnm-number"><span class="count-text" data-speed="3000" data-stop="189">0</span></div>
                <h4 class="cnm-label">Volunteers</h4>
            </div>

            <div class="cnm-card count-box wow fadeInUp" data-wow-delay="450ms">
                <span class="cnm-icon icon_book_alt"></span>
                <div class="cnm-number"><span class="count-text" data-speed="3000" data-stop="7342">0</span></div>
                <h4 class="cnm-label">Audience Attend</h4>
            </div>

        </div>
    </div>
</section>

<style>
    .counter-modern { padding: 70px 0; background: #1c0910; }

    .cnm-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
    }

    .cnm-card {
        text-align: center;
        padding: 34px 20px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        transition: transform 0.3s ease, background 0.3s ease;
    }
    .cnm-card:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.07);
    }

    .cnm-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(245, 179, 1, 0.14);
        color: #f5b301;
        font-size: 24px;
        margin-bottom: 16px;
    }

    .cnm-number {
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        margin-bottom: 10px;
    }
    .cnm-number .count-text { color: #ffffff; }

    .cnm-label {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        color: #d8b7bb;
        margin: 0;
    }

    @media (max-width: 767px) {
        .cnm-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
        .cnm-number { font-size: 32px; }
    }
    @media (max-width: 420px) {
        .counter-modern { padding: 50px 0; }
        .cnm-card { padding: 24px 14px; }
        .cnm-icon { width: 46px; height: 46px; font-size: 20px; margin-bottom: 12px; }
        .cnm-number { font-size: 26px; }
        .cnm-label { font-size: 11px; }
    }
</style>
