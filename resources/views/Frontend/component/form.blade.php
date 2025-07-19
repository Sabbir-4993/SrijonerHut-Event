@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Contact Info</h2>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-map-marker-alt"></span>
                            <p><strong>Angelika Film Center,</strong></p>
                            <p>Angelika Dallas, 5321 E Mockingbird Ln #230, Dallas, TX 75206, United States</p>
                        </li>

                        <li>
                            <span class="icon fa fa-phone-volume"></span>
                            <p><strong>Call Us</strong></p>
                            <p>+1-2147704273</p>
                        </li>

                        <li>
                            <span class="icon fa fa-envelope"></span>
                            <p><strong>Mail Us</strong></p>
                            <p><a href="mailto:creativex@srijonerhut.com">creativex@srijonerhut.com</a></p>
                        </li>

                        <li>
                            <span class="icon fa fa-clock"></span>
                            <p><strong>Opening Time</strong></p>
                            <p>Mon - Sat: 10:00 am to 08:00 pm</p>
                        </li>
                    </ul>

                    <ul class="social-icon-two social-icon-colored">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="contact-form">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <form method="post" action="{{ route('contact.send') }}" id="contact-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
