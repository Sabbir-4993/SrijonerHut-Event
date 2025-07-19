<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->

                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="#"><img src="{{asset('assets/images/logo/logo-200x70.png')}}" alt="" /></a>
                                </div>
                                <div class="text">
                                    <p>Srijoner Hut, the Bengali film festival of Dallas, will be fusing the spirit of Bengal and combining it with an award-winning selection of Bengali films from every walk of life. The celebration of Bengali film would bring together the Bengali community, focusing solely on Bengali films from Bengal (Bangladesh & West Bengal), Europe, and North America, A Brand New movement in the USA.</p>
                                </div>
                                <ul class="social-icon-one social-icon-colored">
                                    <li><a href="https://www.facebook.com/srijonerhut" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget useful-links">
                                <h2 class="widget-title">Useful Links</h2>
                                <ul class="user-links">
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('news.video')}}">Video</a></li>
                                    <li><a href="{{route('news.gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon flaticon-clock"></span>
                                            <div class="text">04-06 AUGUST | 2023 <br>
                                                Starts 10:00 am to 08:00 pm</div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-phone"></span>
                                            <div class="text"><a href="tel:+1-2147704273">+1-2147704273</a></div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-paper-plane"></span>
                                            <div class="text"><a href="mailto:creativex@srijonerhut.com">creativex@srijonerhut.com</a></div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-worldwide"></span>
                                            <div class="text">Angelika Film Center, <br>
                                                Angelika Dallas, 5321 E Mockingbird Ln #230, Dallas, TX 75206, United States</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget instagram-widget">
                                <h2 class="widget-title">Media Partner</h2>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="{{asset('assets/images/media/01.png')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/media/01.png')}}" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="{{asset('assets/images/media/02.png')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/media/02.png')}}" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="{{asset('assets/images/media/03.png')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/media/03.png')}}" alt=""></a>
                                        </figure>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="copyright-text">
                    <p>© Copyright <span id="year"></span> All Rights Reserved by <a href="{{route('index')}}">Srijonerhut</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
