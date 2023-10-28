<div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNow" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <h5 class="modal-title" id="staticBackdropLabel">Apply For This Job</h5>
                </div>
                <div class="position-absolute end-0 top-0 p-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label for="nameControlInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameControlInput" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="emailControlInput2" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="emailControlInput2" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="messageControlTextarea" class="form-label">Message</label>
                    <textarea class="form-control" id="messageControlTextarea" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="inputGroupFile01">Resume Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Application</button>
            </div>
        </div>
    </div>
</div>

<section class="bg-subscribe">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="text-center text-lg-start">
                    <h4 class="text-white">Get New Jobs Notification!</h4>
                    <p class="text-white-50 mb-0">Subscribe & get all related jobs notification.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-4 mt-lg-0">
                    <form class="subscribe-form" action="#">
                        <div class="input-group justify-content-center justify-content-lg-end">
                            <input type="text" class="form-control" id="subscribe" placeholder="Enter your email">
                            <button class="btn btn-primary" type="button" id="subscribebtn">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="email-img d-none d-lg-block">
        <img src="{{ asset('assets/images/subscribe.png') }}" alt="" class="img-fluid">
    </div>
</section>

<section class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                    <h4 class="text-white mb-4">Jobcy</h4>
                    <p class="text-white-50">It is a long established fact that a reader will be of a page reader
                        will be of at its layout.</p>
                    <p class="text-white mt-3">Follow Us on:</p>
                    <ul class="footer-social-menu list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="uil uil-google"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="uil uil-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="fs-16 text-white mb-4">Company</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="about.html"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Contact Us</a></li>
                        <li><a href="services.html"><i class="mdi mdi-chevron-right"></i> Services</a></li>
                        <li><a href="blog.html"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="team.html"><i class="mdi mdi-chevron-right"></i> Team</a></li>
                        <li><a href="pricing.html"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="fs-16 text-white mb-4">For Jobs</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="job-categories.html"><i class="mdi mdi-chevron-right"></i> Browser Categories</a></li>
                        <li><a href="job-list.html"><i class="mdi mdi-chevron-right"></i> Browser Jobs</a></li>
                        <li><a href="job-details.html"><i class="mdi mdi-chevron-right"></i> Job Details</a></li>
                        <li><a href="bookmark-jobs.html"><i class="mdi mdi-chevron-right"></i> Bookmark Jobs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="text-white fs-16 mb-4">For Candidates</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="candidate-list.html"><i class="mdi mdi-chevron-right"></i> Candidate List</a></li>
                        <li><a href="candidate-grid.html"><i class="mdi mdi-chevron-right"></i> Candidate Grid</a></li>
                        <li><a href="candidate-details.html"><i class="mdi mdi-chevron-right"></i> Candidate Details</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="footer-item mt-4 mt-lg-0">
                    <p class="fs-16 text-white mb-4">Support</p>
                    <ul class="list-unstyled footer-list mb-0">
                        <li><a href="contact.html"><i class="mdi mdi-chevron-right"></i> Help Center</a></li>
                        <li><a href="faqs.html"><i class="mdi mdi-chevron-right"></i> FAQ'S</a></li>
                        <li><a href="privacy-policy.html"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="footer-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-white-50 text-center mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Jobcy - Job Listing Page
                    Template by <a href="https://themeforest.net/search/themesdesign" target="_blank" class="text-reset text-decoration-underline">Themesdesign</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="mt-3" hidden>
    <div class="text-center mt-3">
        <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
            <i class="uil uil-brightness mode-dark mx-auto"></i>
            <i class="uil uil-moon mode-light"></i>
        </a>
    </div>
</div>
