<section class="newsletter-section">
    <div class="anim-icons full-width">
        <span class="icon icon-shape-3 wow fadeIn"></span>
        <span class="icon icon-line-1 wow fadeIn"></span>
    </div>
    <div class="auto-container">
        <!--Subscribe Form-->
        <div class="subscribe-form wow fadeInUp" data-wow-delay="500ms">
            <div class="envelope-image"></div>
            <div class="form-inner">
                <div class="upper-box">
                    <div class="sec-title text-center">
                        <div class="icon-box"><span class="fa fa-envelope"></span></div>
                        <h2>Subscribe to our newsletter</h2>
                        <div class="text">Get The Latest Updates</div>
                    </div>
                </div>
                <form method="post" action="{{ route('subscribe') }}"> <!-- Use the named route for the form action -->
                @csrf <!-- Add the CSRF token -->

                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Your email" required>
                        <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
