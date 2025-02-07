<div class="container-fluid bg-dark text-light">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-10 col-md-12">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 wow slideInLeft" data-wow-delay="0.1s">
                            <div class="link-animated d-flex flex-column justify-content-start">
                            <a href="/"><img src="{{ asset('/img/CHH_logo.png') }}" href="{{url('/')}}"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-5 mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">10010 Fernwood Rd, Bethesda, MD 20817</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">office@cphh-church.org	</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+1(240)551-8368</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" target="_blank" href="https://twitter.com/crosspointehealinghouse"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" target="_blank" href="https://www.youtube.com/channel/UC4r-fVyObaI7mu8ADg7jlJQ"><i class="fab fa-youtube fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" target="_blank" href="https://instagram.com/crosspointehealinghouse?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 wow slideInRight" data-wow-delay="0.1s">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2 {{ Request::is('/') ? 'active':''; }}" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="mb-3 text-light dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="whatwebelieve" class="dropdown-item {{ Request::is('whatwebelieve') ? 'active':''; }}">What we believe</a>
                                        <a href="leadership_team" class="dropdown-item {{ Request::is('leadership_team') ? 'active':''; }}">Leadership</a>
                                    </div>
                                </div>
                                <a class="text-light mb-2 {{ Request::is('ministries&departments') ? 'active':''; }}" href="ministries&departments"><i class="bi bi-arrow-right text-primary me-2"></i>Ministries & Departments</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="mb-3 text-light dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="bi bi-arrow-right text-primary me-2"></i>Media</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="mens_ministry" class="dropdown-item">Events</a>
                                        <a href="womens_ministry" class="dropdown-item">Sermons</a>
                                    </div>
                                </div>
                                <a class="text-light mb-2" href="contact"><i class="bi bi-arrow-right text-primary me-2"></i>Connect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0 text-white">&copy;<a class="text-white" href="#">2023 CrossPointe Healing House Church.</a>
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="border-bottom" href="#">Dynamic Collective </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>