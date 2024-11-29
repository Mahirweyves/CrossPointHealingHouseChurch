@include('user.css')
@include('user.navbar')

<style>
    .card-blog {
        position: relative;
        display: block;
        max-width: 340px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #E5E5E5;
        overflow: hidden;
    }

    .card-blog .body {
        padding: 15px 20px;
    }

    .zoom {
        padding: 5px;
        width: 400px;
    }

        .zoom:hover {
        transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
</style>

    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Events</h1>
                <a href="{{url('/')}}" class="h5 text-white">Home /</a>
                <!-- <i class="far fa-circle text-white px-2"></i> -->
                <a class="h5 text-white">Events</a>
            </div>
        </div>
    </div>
</div>

    <!-- Team Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0 pt-4">Events</h1>
            </div>
            <!-- <h5 class="fw-bold text-dark pb-3 text-uppercase text-center">Team Members</h5> -->
        </div>
    </div>
    <!-- Team End -->

    <div class="container-fluid" data-wow-delay="0.5s">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-12 pt-2 wow fadeInLeft">
                <div class="row g-5">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                        <h1 class="mb-0">Upcoming Events</h1>
                    </div>
                    <h3 class="mb-1">Annual Conference</h3>
                    <div class="col-md-4">
                        <img class="zoom" src="img/Conference.jpg" alt="" style="max-width:300px;">
                    </div>
                    <div class="col-md-8">
                        <video width="620" height="440" controls>
                            <source src="img/Conference1.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-12 pt-4 wow fadeInLeft">
                <div class="position-relative pb-3 mb-5 mx-autow">
                    <h3 class="mb-2">7th Anniversary Celebration Events</h3>
                    <div class="col-md-4">
                        <p>June 9th - 11th 2023</p>
                        <img src="img/celebration.jpg" alt="" style="max-width:300px;">
                    </div>
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