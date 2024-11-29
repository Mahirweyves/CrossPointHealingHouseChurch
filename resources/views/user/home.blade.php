<!DOCTYPE html>
<html lang="en">
@include('user.css')
@include('user.navbar')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video style="max-height:600px; min-width: 100%; object-fit: fill;" class="w-100" autoplay loop muted playsinline src="img/homepage1.mp4" type="video.mp4"></video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white mt-3 animated slideInDown">Welcome to</h4>
                            <h2 class="display-2 text-white mb-md-4 animated zoomIn">CrossPointe Healing House Church</h2>
                            <!-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> -->
                            <!-- <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">welcome to</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">CrossPointe Healing House Church</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <!-- <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Full Screen Search End -->

    <!-- Vendor Start -->

    <!-- <div class="text-center bg bg-dark px-5 py-3">  
        <a href="" class="h5 text-primary">Home</a>
        <a href="" class="h5 text-primary">About</a>
        <a href="index.html" class="h5 text-primary">Worship Times</a>
    </div> -->

    <div class="container-fluid p-0 text-center">
        <nav class="navbar navbar-expand-lg bg bg-light py-3">
            <a href="#location" class="nav-item nav-link text-dark">Location</a>

            <a href="#worship" class="nav-item nav-link text-dark">Worship Times</a>   

            <a href="#leadership" class="nav-item nav-link text-dark">Leadership</a>
        </nav>
    </div>
    <!-- <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-primary">
                <div class="owl-carousel vendor-carousel">
                    <div>test</div>
                    <div>test2</div>
                    <div>test2</div>
                    <div>test2</div>
                    <div>test2</div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->
    <!-- Facts Start -->
    <!-- <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts Start -->


    <!-- Location Start -->
    @include('user.location')
    <!-- Location End -->

    <!-- Worship Start -->
    @include('user.worship')
    <!-- Worship End -->

    

    <!-- Team Start -->
    @include('user.leadership')
    <!-- Team End -->


    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('user.js')
    <!-- Template Javascript -->
</body>

</html>