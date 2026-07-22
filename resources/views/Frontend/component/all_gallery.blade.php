<section class="gallery-modern">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Gallery</span>
            <h2>Event Gallery</h2>
        </div>

        <div class="gm-grid" id="galleryRow">
            <!-- Gallery items will be dynamically generated here using JavaScript -->
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
        align-items: center;
        justify-content: center;
        background: rgba(11,4,5,0);
        opacity: 0;
        transition: opacity 0.3s ease, background 0.3s ease;
    }
    .gm-item:hover .gm-overlay {
        opacity: 1;
        background: rgba(11,4,5,0.45);
    }

    .gm-expand {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        text-decoration: none;
        transform: scale(0.8);
        transition: transform 0.25s ease, background 0.25s ease;
    }
    .gm-item:hover .gm-expand { transform: scale(1); }
    .gm-expand:hover { background: #d8395a; color: #ffffff; }

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
