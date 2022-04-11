


        <!-- CTA Section -->
        <section class="cta-section">
            <div class="auto-container">
                <div class="inner-container"
                    style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-11.png)">
                    <div class="row clearfix">

                        <!-- Title Column -->
                        <div class="title-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h3>Sign up for our newsletter</h3>
                                <div class="text">Stay up to update with our latest news and products.</div>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="newsletter-form">
                                    <form method="post" action="https://html.themexriver.com/nextbit/contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Your Email Address"
                                                required="">
                                            <button type="submit" class="theme-btn btn-style-five"><span
                                                    class="txt">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA Section -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="pattern-layer-one"
                style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-12.png)"></div>
            <div class="pattern-layer-two"
                style="background-image: url({{ asset('frontend/assets') }}/images/background/pattern-13.png)"></div>
            <div class="auto-container">
                <div class="widgets-section">
                    <div class="logo">
                        <a href="index-2.html"><img width="150px" src="{{ asset('backend/assets/images/company' . '/' . $company_info->logo ) }}"
                                alt="" /></a>
                    </div>
                    <ul class="contact-info-list">
                        <li>
                            <span class="icon"><img
                                    src="{{ asset('frontend/assets') }}/images/icons/icon-1.png" alt="" /></span>
                            <a>{{ $company_info->phone }}</a><br>
                            {{-- <a href="tel:+2390-875-223">+2390-875-223</a> --}}
                        </li>
                        <li>
                            <span class="icon"><img
                                    src="{{ asset('frontend/assets') }}/images/icons/icon-2.png" alt="" /></span>
                            <a>{{ $company_info->email }}</a><br>
                            <a href="{{ $company_info->web_address }}">{{ $company_info->web_address }}</a>
                        </li>
                        <li>
                            <span class="icon"><img
                                    src="{{ asset('frontend/assets') }}/images/icons/icon-3.png" alt="" /></span>
                            {{ $company_info->address }}
                        </li>
                    </ul>

                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="{{ $company_info->fb_page_link }}" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://skype.com/" class="fa fa-skype"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                    </ul>

                </div>

            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">&copy; 2022 Lotus Cable. All Rights Reserved By <a href="#">Lotus
                            Company</a></div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="https://html.themexriver.com/nextbit/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('frontend/assets') }}/js/jquery.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/appear.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/parallax.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/tilt.jquery.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.paroller.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/owl.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/wow.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/nav-tool.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/script.js"></script>


</body>

</html>
