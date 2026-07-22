<section class="newsletter-section newsletter-modern">
    <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
    </div>
    <div class="auto-container">
        <div class="nlm-card wow fadeInUp" data-wow-delay="200ms">
            <div class="nlm-icon"><span class="fa fa-envelope-open-text"></span></div>
            <h2 class="nlm-title">Subscribe to our newsletter</h2>
            <p class="nlm-subtitle">Get the latest festival news, schedules and ticket alerts straight to your inbox.</p>

            <form method="post" action="{{ route('subscribe') }}" id="newsletter-form" class="nlm-form" novalidate>
                @csrf
                <div class="nlm-field">
                    <span class="nlm-field-icon fa fa-envelope" aria-hidden="true"></span>
                    <input type="email" name="email" id="newsletter-email" placeholder="Enter your email address" required>
                    <button type="submit" class="nlm-submit">
                        <span class="nlm-submit-text">Subscribe</span>
                        <span class="nlm-spinner" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="nlm-feedback" id="newsletter-feedback" role="status" aria-live="polite"></div>
            </form>
        </div>
    </div>
</section>

<style>
    .newsletter-modern { padding: 70px 0; background: #0b0405; }
    .nlm-card {
        max-width: 640px;
        margin: 0 auto;
        text-align: center;
        background: linear-gradient(160deg, #1c0910 0%, #100507 100%);
        border: 1px solid rgba(245, 179, 1, 0.2);
        border-radius: 20px;
        padding: 48px 36px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.45);
    }
    .nlm-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 18px;
        border-radius: 50%;
        background: rgba(245, 179, 1, 0.12);
        color: #f5b301;
        font-size: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .nlm-title { color: #ffffff; font-size: 26px; font-weight: 700; margin: 0 0 10px; }
    .nlm-subtitle { color: #d8b7bb; font-size: 15px; margin: 0 0 28px; line-height: 1.6; }

    .nlm-field {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 999px;
        padding: 6px 6px 6px 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
    }
    .nlm-field-icon { color: #9a9a9a; font-size: 15px; margin-right: 10px; }
    .nlm-field input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 15px;
        padding: 12px 0;
        background: transparent;
        color: #221016;
        min-width: 0;
    }
    .nlm-field input::placeholder { color: #9a9a9a; }

    .nlm-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border: none;
        border-radius: 999px;
        background: #d8395a;
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.3px;
        padding: 12px 26px;
        cursor: pointer;
        transition: background 0.25s ease;
        white-space: nowrap;
    }
    .nlm-submit:hover { background: #b62a48; }
    .nlm-submit:disabled { opacity: 0.7; cursor: not-allowed; }

    .nlm-spinner {
        display: none;
        width: 14px;
        height: 14px;
        border: 2px solid rgba(255, 255, 255, 0.4);
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: nlm-spin 0.7s linear infinite;
    }
    .nlm-form.is-loading .nlm-spinner { display: inline-block; }
    .nlm-form.is-loading .nlm-submit-text { display: none; }
    @keyframes nlm-spin { to { transform: rotate(360deg); } }

    .nlm-feedback {
        margin-top: 16px;
        font-size: 14px;
        font-weight: 600;
        min-height: 20px;
    }
    .nlm-feedback.success { color: #6fd18a; }
    .nlm-feedback.error { color: #ff6b6b; }

    @media (max-width: 575px) {
        .nlm-card { padding: 36px 22px; }
        .nlm-field { flex-wrap: wrap; border-radius: 20px; padding: 14px; }
        .nlm-field input { flex-basis: 100%; padding: 8px 0 14px; }
        .nlm-submit { width: 100%; }
    }
</style>

<script>
    (function () {
        var form = document.getElementById('newsletter-form');
        if (!form) return;
        var feedback = document.getElementById('newsletter-feedback');
        var submitBtn = form.querySelector('.nlm-submit');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var email = document.getElementById('newsletter-email').value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            feedback.textContent = '';
            feedback.className = 'nlm-feedback';

            if (!emailPattern.test(email)) {
                feedback.textContent = 'Please enter a valid email address.';
                feedback.classList.add('error');
                return;
            }

            form.classList.add('is-loading');
            submitBtn.disabled = true;

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: new FormData(form)
            })
                .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, data: data }; }); })
                .then(function (result) {
                    form.classList.remove('is-loading');
                    submitBtn.disabled = false;
                    if (result.ok) {
                        feedback.textContent = result.data.message || 'Thank you for subscribing!';
                        feedback.classList.add('success');
                        form.reset();
                    } else {
                        var msg = 'Something went wrong. Please try again.';
                        if (result.data.errors && result.data.errors.email) {
                            msg = result.data.errors.email[0];
                        }
                        feedback.textContent = msg;
                        feedback.classList.add('error');
                    }
                })
                .catch(function () {
                    form.classList.remove('is-loading');
                    submitBtn.disabled = false;
                    feedback.textContent = 'Something went wrong. Please try again.';
                    feedback.classList.add('error');
                });
        });
    })();
</script>
