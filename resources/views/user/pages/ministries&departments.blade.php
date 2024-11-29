@include('user.css')
@include('user.navbar')

    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Ministries & Departments</h1>
                <a href="{{url('/')}}" class="h5 text-white">Home /</a>
                <!-- <i class="far fa-circle text-white px-2"></i> -->
                <a class="h5 text-white">Ministries & Departments</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->
<div class="container-fluid p-0 text-center">
    <nav class="navbar navbar-expand-lg bg-light py-3">
        <a href="#men's-ministry" class="nav-item nav-link text-dark">Men's Ministry</a>

        <a href="#women's-ministry" class="nav-item nav-link text-dark">Women's Ministry</a>   

        <a href="#children's-ministry" class="nav-item nav-link text-dark">Children's Ministry</a>

        <a href="#youth" class="nav-item nav-link text-dark">Youth & Young Adults' Ministry</a>

        <a href="#worship-team" class="nav-item nav-link text-dark">CPHH Praise & Worship Team</a>

        <a href="#Urumuri-choir" class="nav-item nav-link text-dark">Urumuri Choir</a>
    </nav>
</div>

<div class="container-fluid" data-wow-delay="0.5s">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-12 pt-4 wow fadeInLeft" id="men's-ministry">
                <div class="section-title position-relative mb-4">
                    <h1 class="mb-0 mt-5 pt-4">Men's Ministries</h1>
                </div>
            </div>
           
            <div class="col-lg-12 pt-4 wow fadeInLeft" id="women's-ministry">
                <div class="section-title position-relative mb-4">
                    <h1 class="mb-0 mt-5 pt-4">Women's Ministries</h1>
                </div>
            </div>
            
            <div class="col-lg-12 pt-4 wow fadeInLeft" id="children's-ministry">
                <div class="section-title position-relative pb-3">
                    <h1 class="mb-0 mt-5 pt-4">Children's Ministries</h1>
                </div>
            </div>

            <div class="col-lg-12 pt-4 wow fadeInLeft" id="youth">
                <div class="section-title position-relative pb-3">
                    <h1 class="mb-0 mt-5 pt-4">Youth & Young Adults' Ministry</h1>
                </div>
            </div>
            
            <div class="col-lg-12 pt-4 wow fadeInLeft" id="worship-team">
                <div class="section-title position-relative pb-3">
                    <h1 class="mb-0 mt-5 pt-4">CPHH Praise & Worship Team</h1>
                </div>
            </div>
            
            <div class="col-lg-12 pt-4 wow fadeInLeft pb-5" id="Urumuri-choir">
                <div class="section-title position-relative pb-3">
                    <h1 class="mb-0 mt-5 pt-4">Urumuri Choir</h1>
                </div>
            </div>
        </div>
    </div>      
</div>

<!-- Footer Start -->
@include('user.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


@include('user.js')