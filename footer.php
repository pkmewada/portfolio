<!-- ==================== Footer ==================== -->
                <footer class="footer-style1 pb-50px">
                    <div class="container">
                        <div class="row sm-marg">
                            <div class="col-lg-8">
                                <div class="fo-box-left v-align-between">
                                    <div>
                                        <div
                                            class="d-flex align-items-center justify-content-between fs-14 mb-20px pb-20px line-bottom border-color-transparent-white-light">
                                            <div>
                                                <h2>
                                                    <span class="opacity-7">Let’s</span> <br />
                                                    Start your project
                                                </h2>
                                            </div>
                                            <div>
                                                <a href="page-contact.html" class="butn-arrow butn-rounded">
                                                    <span class="text-uppercase fs-14 fw-500">Get In Touch</span>
                                                    <span class="arrow-icon">
                                                        <svg viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                            </path>
                                                        </svg>
                                                        <svg viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <div class="f-logo w-150px mb-30px">
                                                    <img src="assets/imgs/logo/logo.webp" alt="" />
                                                </div>
                                                <p class="fs-14 text-uppercase fw-200">
                                                    We hope to empower user and simplify
                                                    <br />
                                                    their everyday lives
                                                </p>
                                            </div>
                                            <div class="tags text-align-right">
                                                <a href="page-services.html">services</a>
                                                <a href="portfolio-gallery.html">portfolio</a>
                                                <br />
                                                <a href="page-about.html">about us</a>
                                                <a href="blog.html">blog</a>
                                                <a href="page-contact.html">contact</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fo-box-right d-flex v-align-between">
                                    <div>
                                        <h5>
                                            Explore the Socials <br />
                                            of Mqlus
                                        </h5>
                                        <div class="social-icon-circle mt-30px">
                                            <a href="#"> <i class="fab fa-x-twitter"></i> </a>
                                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                                            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                        </div>
                                    </div>
                                    <div class="subscribe">
                                        <h6 class="fs-14 mb-15px">
                                            <i class="fa-solid fa-address-card mr-10px"></i> Contact Details
                                        </h6>

                                        <div class="contact-info fs-14">
                                            <p class="mb-10px">
                                                <i class="fa-solid fa-user mr-10px"></i>
                                                <strong>Name:</strong> Mqlus Team
                                            </p>

                                            <p class="mb-10px">
                                                <i class="fa-solid fa-phone mr-10px"></i>
                                                <strong>Contact:</strong> +91 98765 43210
                                            </p>

                                            <p class="mb-10px">
                                                <i class="fa-solid fa-envelope mr-10px"></i>
                                                <strong>Email:</strong> info@mqlus.com
                                            </p>

                                            <p class="mb-10px">
                                                <i class="fa-solid fa-location-dot mr-10px"></i>
                                                <strong>Address:</strong> Indore,India
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>
    <script src="assets/js/scripts.js?v=1784974585"></script>

    <!-- Smooth scroll to section anchors -->
    <script>


        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (!target) return;
                e.preventDefault();
                if (typeof ScrollSmoother !== 'undefined' && ScrollSmoother.get()) {
                    ScrollSmoother.get().scrollTo(target, true);
                } else {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });


    </script>
</body>

</html>