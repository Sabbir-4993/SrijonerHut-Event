<section class="video-modern">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Video</span>
            <h2>Festival Highlights</h2>
        </div>

        <div class="vdm-grid">

            <div class="vdm-card wow fadeInUp">
                <figure class="vdm-media"><iframe src="https://www.youtube.com/embed/SKcDrp5Fa4g" title="Film Festival 2020" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                <div class="vdm-body">
                    <ul class="vdm-meta">
                        <li><i class="far fa-user"></i> Admin</li>
                        <li><i class="far fa-calendar"></i> Aug, 2020</li>
                    </ul>
                    <h4 class="vdm-title">Film Festival 2020</h4>
                </div>
            </div>

            <div class="vdm-card wow fadeInUp" data-wow-delay="150ms">
                <figure class="vdm-media"><iframe src="https://www.youtube.com/embed/SKcDrp5Fa4g" title="Film Festival 2019" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                <div class="vdm-body">
                    <ul class="vdm-meta">
                        <li><i class="far fa-user"></i> Admin</li>
                        <li><i class="far fa-calendar"></i> Aug, 2019</li>
                    </ul>
                    <h4 class="vdm-title">Film Festival 2019</h4>
                </div>
            </div>

            <div class="vdm-card wow fadeInUp">
                <figure class="vdm-media"><iframe src="https://www.youtube.com/embed/SKcDrp5Fa4g" title="Film Festival 2018" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                <div class="vdm-body">
                    <ul class="vdm-meta">
                        <li><i class="far fa-user"></i> Admin</li>
                        <li><i class="far fa-calendar"></i> Aug, 2018</li>
                    </ul>
                    <h4 class="vdm-title">Film Festival 2018</h4>
                </div>
            </div>

            <div class="vdm-card wow fadeInUp" data-wow-delay="150ms">
                <figure class="vdm-media"><iframe src="https://www.youtube.com/embed/SKcDrp5Fa4g" title="Film Festival 2017" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></figure>
                <div class="vdm-body">
                    <ul class="vdm-meta">
                        <li><i class="far fa-user"></i> Admin</li>
                        <li><i class="far fa-calendar"></i> Jul, 2017</li>
                    </ul>
                    <h4 class="vdm-title">Film Festival 2017</h4>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .video-modern { padding: 80px 0; background: #faf7fb; }

    .vdm-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 26px;
        margin-top: 50px;
    }

    .vdm-card {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(20, 5, 7, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .vdm-card:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(20, 5, 7, 0.14); }

    .vdm-media {
        margin: 0;
        position: relative;
        height: 0;
        padding-top: 56.25%;
        background: #221016;
    }
    .vdm-media iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .vdm-body { padding: 20px 22px 24px; }
    .vdm-meta { list-style: none; display: flex; gap: 18px; margin: 0 0 10px; padding: 0; }
    .vdm-meta li { font-size: 12px; font-weight: 600; color: #9a8a8d; display: flex; align-items: center; gap: 6px; }

    .vdm-title { font-size: 17px; font-weight: 700; color: #221016; margin: 0; }

    @media (max-width: 767px) {
        .vdm-grid { grid-template-columns: 1fr; gap: 20px; }
    }
    @media (max-width: 575px) {
        .video-modern { padding: 55px 0; }
        .vdm-body { padding: 16px 18px 20px; }
    }
</style>
