<footer>
        <div class="section py-5">
            <div class="d-flex flex-column gap-5 p-5 bg-gradient-footer rounded-4 accent-primary">
                <div class="d-flex flex-xl-row flex-column gap-3 justify-content-between align-items-center">
                    <img src="<?php echo base_url('assets/image/logo.png')?>" alt="" class="img-fluid" width="265">
                    <div class="social-container team mb-xl-0 mb-3 gap-2">
                        <a href="https://www.facebook.com/" class="social-item">
                            <i class="fa-brands fa-xs fa-facebook-f"></i>
                        </a>
                        <a href="https://t.lumenVEST/" class="social-item">
                            <i class="fa-brands fa-xs fa-telegram"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column gap-2 align-items-center justify-content-center accent-primary">
                    <h2>Sign Up!</h2>
                    <p class="accent-primary">Start securing your future with LumenVEST</p>
                    <div class="d-flex flex-column gap-3 width-subscribe">
                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast success_msg_subscribe bg-dark-transparent text-white"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Your account creation is successful.
                                    </div>
                                    <button type="button" class="btn me-2 m-auto text-white" data-bs-dismiss="toast"
                                        aria-label="Close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="" method="POST" class="d-flex flex-column h-100 justify-content-center w-100 needs-validation form"
                                novalidate>
                                <input type="text" name="action" value="subscribe" hidden>
                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="email" class="form-control subscribe custom-email-input"
                                        placeholder="E-mail" name="email" required>
                                </div>

                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="text" class="form-control subscribe custom-email-input"
                                        placeholder="First Name" name="firstname" required>
                                </div>

                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="text" class="form-control subscribe custom-email-input"
                                        placeholder="Last Name" name="lastname" required>
                                </div>

                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="text" class="form-control subscribe custom-email-input"
                                        placeholder="Phone Number" name="phonenumber" required>
                                </div>

                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="password" class="form-control subscribe custom-email-input"
                                        placeholder="Password" name="password" required>
                                </div>

                                <div class="input-group gap-3 mb-xl-2 mb-0 position-relative custom-input-group">
                                    <input type="password" class="form-control subscribe custom-email-input"
                                        placeholder="Confirm Password" name="Confirm Password" required>
                                </div>

                                    <button
                                        class="btn btn-accent d-flex flex-row gap-2 submit_subscribe rounded-pill custom-submit-button"
                                        type="submit">
                                        <span>Sign Up</span>
                                        <i class="rtmicon rtmicon-arrow-up-right fw-bold"></i>
                                    </button>
                                    <div class="invalid-feedback text-white">
                                        Please provide a valid email format (e.g., user@example.com).
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <hr class="border-1 border-light" style="opacity: 1;">
                <div class="d-flex flex-xl-row flex-column gap-xl-2 gap-3 align-items-center justify-content-between">
                    <span class="text-white fs-6 font-2">
                        Copyright © 2025 LumenVEST. All Rights Reserved.
                    </span>
                    <div class="d-flex flex-xl-row flex-column gap-3">
                        <div>
                            <a href="#" class="link d-flex flex-row gap-3 align-items-center"
                                style="font-size: 16px; font-weight: normal;">
                                Privacy & Cookie Policy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/vendor/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/swiper-bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>
    <script src="<?php echo base_url('assets/js/swiper-script.js')?>"></script>
    <script src="<?php echo base_url('assets/js/submit-form.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/isotope.pkgd.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/video_embedded.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/fslightbox.js')?>"></script>
    <script
        src="<?php echo base_url('assets/cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll%40v1.0/oyethemes_onscroll_animation.js')?>"></script>

</body>


</html>