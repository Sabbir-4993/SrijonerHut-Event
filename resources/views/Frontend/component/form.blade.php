@if(session('success'))
    <div class="cpm-alert success">{{ session('success') }}</div>
@endif

<section class="contact-modern">
    <div class="auto-container">
        <div class="cpm-grid">

            <div class="cpm-info wow fadeInLeft">
                <h2 class="cpm-info-title">Contact Info</h2>
                <p class="cpm-info-sub">Reach out for tickets, press, sponsorship or volunteering.</p>

                <ul class="cpm-info-list">
                    <li>
                        <span class="cpm-info-icon"><i class="fa fa-map-marker-alt"></i></span>
                        <div>
                            <strong>Angelika Film Center</strong>
                            <p>5321 E Mockingbird Ln #230, Dallas, TX 75206, United States</p>
                        </div>
                    </li>
                    <li>
                        <span class="cpm-info-icon"><i class="fa fa-phone-volume"></i></span>
                        <div>
                            <strong>Call Us</strong>
                            <p><a href="tel:+12147704273">+1-214-770-4273</a></p>
                        </div>
                    </li>
                    <li>
                        <span class="cpm-info-icon"><i class="fa fa-envelope"></i></span>
                        <div>
                            <strong>Mail Us</strong>
                            <p><a href="mailto:creativex@srijonerhut.com">creativex@srijonerhut.com</a></p>
                        </div>
                    </li>
                    <li>
                        <span class="cpm-info-icon"><i class="fa fa-clock"></i></span>
                        <div>
                            <strong>Opening Time</strong>
                            <p>Mon - Sat: 10:00 am to 08:00 pm</p>
                        </div>
                    </li>
                </ul>

                <ul class="cpm-social">
                    <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>

            <div class="cpm-form-card wow fadeInRight">
                <h2 class="cpm-form-title">Get in Touch</h2>
                <p class="cpm-form-sub">Send us a message and we'll get back to you soon.</p>

                <form method="post" action="{{ route('contact.send') }}" id="contact-form" class="cpm-form">
                    @csrf
                    <div class="cpm-row">
                        <div class="cpm-field">
                            <input type="text" name="username" id="cpm-name" placeholder=" " required>
                            <label for="cpm-name">Name</label>
                        </div>
                        <div class="cpm-field">
                            <input type="text" name="phone" id="cpm-phone" placeholder=" " required>
                            <label for="cpm-phone">Phone</label>
                        </div>
                    </div>
                    <div class="cpm-row">
                        <div class="cpm-field">
                            <input type="email" name="email" id="cpm-email" placeholder=" " required>
                            <label for="cpm-email">Email</label>
                        </div>
                        <div class="cpm-field">
                            <input type="text" name="subject" id="cpm-subject" placeholder=" " required>
                            <label for="cpm-subject">Subject</label>
                        </div>
                    </div>
                    <div class="cpm-field cpm-field-full">
                        <textarea name="message" id="cpm-message" placeholder=" " rows="5"></textarea>
                        <label for="cpm-message">Message</label>
                    </div>
                    <button class="cpm-submit" type="submit" name="submit-form">Submit Now</button>
                </form>
            </div>

        </div>
    </div>
</section>

<style>
    .contact-modern { padding: 80px 0; background: #faf7fb; }

    .cpm-alert {
        max-width: 1200px;
        margin: 0 auto 24px;
        padding: 14px 20px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
    }
    .cpm-alert.success { background: #e7f8ec; color: #1e7a3d; border: 1px solid #b9e8c6; }

    .cpm-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.4fr;
        gap: 26px;
        align-items: stretch;
    }

    .cpm-info {
        background: linear-gradient(160deg, #1c0910 0%, #100507 100%);
        border-radius: 18px;
        padding: 40px 32px;
        color: #ffffff;
    }
    .cpm-info-title { font-size: 24px; font-weight: 700; margin: 0 0 8px; color: #ffffff; }
    .cpm-info-sub { font-size: 14px; color: #d8b7bb; margin: 0 0 28px; line-height: 1.6; }

    .cpm-info-list { list-style: none; margin: 0; padding: 0; }
    .cpm-info-list li {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 22px;
    }
    .cpm-info-list li:last-child { margin-bottom: 0; }
    .cpm-info-icon {
        flex-shrink: 0;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(245, 179, 1, 0.14);
        color: #f5b301;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }
    .cpm-info-list strong { display: block; font-size: 14px; color: #ffffff; margin-bottom: 3px; }
    .cpm-info-list p { font-size: 13px; color: #d8b7bb; margin: 0; line-height: 1.6; }
    .cpm-info-list a { color: #d8b7bb; text-decoration: none; }
    .cpm-info-list a:hover { color: #f5b301; }

    .cpm-social { list-style: none; display: flex; gap: 10px; margin: 32px 0 0; padding: 0; }
    .cpm-social a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
        font-size: 14px;
        transition: background 0.25s ease;
    }
    .cpm-social a:hover { background: #d8395a; }

    .cpm-form-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 40px 36px;
        box-shadow: 0 10px 30px rgba(20, 5, 7, 0.08);
    }
    .cpm-form-title { font-size: 24px; font-weight: 700; margin: 0 0 8px; color: #221016; }
    .cpm-form-sub { font-size: 14px; color: #6b5a5d; margin: 0 0 28px; }

    .cpm-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 18px; }

    .cpm-field { position: relative; }
    .cpm-field-full { margin-bottom: 24px; }
    .cpm-field input,
    .cpm-field textarea {
        width: 100%;
        border: 1px solid #e6dde0;
        border-radius: 10px;
        padding: 16px 14px 8px;
        font-size: 14px;
        color: #221016;
        background: #faf7fb;
        outline: none;
        transition: border-color 0.25s ease;
        resize: vertical;
    }
    .cpm-field textarea { padding-top: 20px; min-height: 120px; }
    .cpm-field input:focus,
    .cpm-field textarea:focus { border-color: #d8395a; }

    .cpm-field label {
        position: absolute;
        left: 14px;
        top: 16px;
        font-size: 14px;
        color: #9a8a8d;
        pointer-events: none;
        transition: all 0.2s ease;
        background: transparent;
    }
    .cpm-field input:focus + label,
    .cpm-field input:not(:placeholder-shown) + label,
    .cpm-field textarea:focus + label,
    .cpm-field textarea:not(:placeholder-shown) + label {
        top: 4px;
        font-size: 11px;
        font-weight: 700;
        color: #d8395a;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .cpm-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 999px;
        background: #d8395a;
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.3px;
        padding: 14px 34px;
        cursor: pointer;
        transition: background 0.25s ease;
    }
    .cpm-submit:hover { background: #b62a48; }

    @media (max-width: 991px) {
        .cpm-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 575px) {
        .contact-modern { padding: 60px 0; }
        .cpm-info, .cpm-form-card { padding: 28px 22px; }
        .cpm-row { grid-template-columns: 1fr; gap: 0; margin-bottom: 0; }
        .cpm-row .cpm-field { margin-bottom: 18px; }
    }
</style>
