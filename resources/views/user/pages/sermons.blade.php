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
</style>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 10px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Sermons</h1>
                <a href="{{url('/')}}" class="h5 text-white">Home /</a>
                <!-- <i class="far fa-circle text-white px-2"></i> -->
                <a class="h5 text-white">Sermons</a>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-2 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0 pt-4">Latest Sermons</h1>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-12">
                    <div class="row g-5 px-3">
                        <div class="col-md-4 py-2 wow zoomIn">
                            <div class="blog-item rounded overflow-hidden">
                                <a href="{{url('/blog')}}" class="post-thumb">
                                    <iframe width="340" height="183" src="https://www.youtube.com/embed/lwVOK4N3GSI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 py-2 wow zoomIn">
                            <div class="blog-item rounded overflow-hidden">
                                <a href="{{url('/blog')}}" class="post-thumb">
                                    <iframe width="340" height="183" src="https://www.youtube.com/embed/ZjMyxZzPE5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 py-2 wow zoomIn">
                            <div class="blog-item rounded overflow-hidden">
                                <a href="{{url('/blog')}}" class="post-thumb">
                                    <iframe width="340" height="183" src="https://www.youtube.com/embed/yXLECgpY3Gc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </a>
                            </div>
                        </div>
                        <div class="mb-3 text-dark">For more resources and sermons, visit our <a href="https://www.youtube.com/@crosspointehealinghousechurch" target="_blank" class="btn btn-success"> YouTube Channel.</a></div>
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