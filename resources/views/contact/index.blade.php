<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  @include('user.css')

  <style>
    .map{
      width: 100%;
      height: 400px;
    }
  </style>
</head>

<!DOCTYPE html>
<html>
    <head>
        <title>Leaflet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <style>

html, body, #map {
    width: 100%;
      height: 400px;
}
</style>
    </head>
    <body>
        
        <script src="https://unpkg.com/leaflet/dist/leaflet-src.js"></script>
    </body>
</html>

<script>
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>


    @include('user.navbar')


    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                <a href="{{url('/')}}" class="h5 text-white">Home /</a>
                <!-- <i class="far fa-circle text-white px-2"></i> -->
                <a class="h5 text-white">Contact</a>
            </div>
        </div>
    </div>
</div>


<!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> -->
                <h2 class="mb-0">Cell groups</h2>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="text-white">1</i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Germantown Cell Group</h5>
                            <h6 class="text-success mb-0">(Germantown, Gaithersburg, Clarksburg)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="text-white">2</i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Bethesda Cell Group</h5>
                            <h6 class="text-success mb-0">(Bethesda, Rockville)</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="text-white">3</i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Riverdale Cell Group</h5>
                            <h6 class="text-success mb-0">(Prince George County)</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> -->
                <h2 class="mb-0">Feel Free To Contact Us</h2>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h6 class="text-primary mb-0">+1(240)551-8368</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get in touch</h5>
                            <h6 class="text-primary mb-0">office@cphh-church.org	</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit us</h5>
                            <h6 class="text-primary mb-0">10010 Fernwood Rd, Bethesda, MD 20817</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="POST" action="{{ route('contact.store') }}" id="contact">
                        {{ csrf_field() }}

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control border-0 bg-light px-4" placeholder="Your Phone" style="height: 55px;" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" value="{{ old('email') }}" style="height: 55px;">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" value="{{ old('subject') }}" style="height: 55px;">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                            </div>
                            <div class="col-12">
                                <textarea type="text" name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" value="{{ old('message') }}"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <div id="map" style="width: 100%; height: 400px;"></div>
                <script>
                    var map = L.map('map').setView([39.02101857528964, -77.13579631052626], 17);
                    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);
                    var marker = new L.Marker([39.02101857528964, -77.13579631052626]);
                    marker.addTo(map);

                    marker.bindPopup('CPHH').openPopup();
                    marker.addTo(map);

                    popupContent = document.createElement("img");
                    popupContent.onload = function () {
                    marker.openPopup();
                    };
                    popupContent.src = "../assets/img/bg_image_2.png";
                </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@include('user.footer')

<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

@include('user.js')
</body>
</html>