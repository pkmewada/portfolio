<?php require_once __DIR__ . '/asset-helpers.php'; ?>
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

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <div class="f-logo footer-wordmark mb-30px" role="img" aria-label="MQLUS">
                                    <span aria-hidden="true">M</span><span aria-hidden="true">Q</span><span aria-hidden="true">L</span><span aria-hidden="true">U</span><span aria-hidden="true">S</span>
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
                            Contact Details
                        </h6>

                        <div class="contact-info fs-14">
                            <p class="mb-10px">
                                <i class="fa-solid fa-user mr-10px"></i>
                                <strong></strong> Mqlus Team
                            </p>

                            <p class="mb-10px">
                                <i class="fa-solid fa-phone mr-10px"></i>
                                <strong></strong> +91 98765 43210
                            </p>

                            <p class="mb-10px">
                                <i class="fa-solid fa-envelope mr-10px"></i>
                                <strong></strong> info@mqlus.com
                            </p>

                            <p class="mb-10px">
                                <i class="fa-solid fa-location-dot mr-10px"></i>
                                <strong></strong> Indore,India
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
<script src="<?php echo asset_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/jquery-migrate-3.4.0.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/plugins.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/gsap.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/ScrollTrigger.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/ScrollSmoother.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/smoother-script.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/springer.min.js'); ?>"></script>
<script src="<?php echo asset_url('assets/js/scripts.js'); ?>"></script>

<!-- Smooth scroll to section anchors -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').slice(1);
            if (!targetId) return;
            const target = document.getElementById(targetId);
            if (!target) return;
            e.preventDefault();
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const navbar = document.querySelector('.navbar');
            const offset = navbar ? navbar.getBoundingClientRect().height + 20 : 20;
            if (typeof ScrollSmoother !== 'undefined' && ScrollSmoother.get()) {
                ScrollSmoother.get().scrollTo(target, !reducedMotion, 'top ' + offset + 'px');
            } else {
                window.scrollTo({
                    top: Math.max(0, target.getBoundingClientRect().top + window.scrollY - offset),
                    behavior: reducedMotion ? 'instant' : 'smooth'
                });
            }
        });
    });
</script>
</body>

</html>
