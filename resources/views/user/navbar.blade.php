<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>10010 Fernwood Rd, Bethesda, MD 20817</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+1(240)551-8368</small>
                    <small class="me-3 text-light"><a class="text-light" href=""><i class="fa fa-envelope-open me-2"></i>office@cphh-church.org	</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.youtube.com/channel/UC4r-fVyObaI7mu8ADg7jlJQ"><i class="fab fa-youtube fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://instagram.com/crosspointehealinghouse?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <h1 class="navbar-brand p-0">
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1> -->
                <a href="/"><img src="{{ asset('/img/CHH_logo.png') }}" href="{{url('/')}}" style="height:90px; width:120px;"></a>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link {{ Request::is('/') ? 'active':''; }}">Home</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu m-0">
                            <a href="whatwebelieve" class="dropdown-item {{ Request::is('whatwebelieve') ? 'active':''; }}">What we believe</a>
                            <a href="leadership_team" class="dropdown-item {{ Request::is('leadership_team') ? 'active':''; }}">Leadership</a>
                        </div>
                    </div>

                    <a href="ministries&departments" class="nav-item nav-link {{ Request::is('ministries&departments') ? 'active':''; }}">Ministries & Departments</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                        <div class="dropdown-menu m-0">
                            <a href="events" class="dropdown-item {{ Request::is('events') ? 'active':''; }}">Events</a>
                            <a href="sermons" class="dropdown-item {{ Request::is('sermons') ? 'active':''; }}">Sermons</a>
                        </div>
                    </div>

                    <a href="contact" class="nav-item nav-link {{ Request::is('contact') ? 'active':''; }}">Connect</a>
                </div>
        
                <div class="nav-item">
                    <a class="btn-danger py-2 px-3 ms-3" target="_blank" href="https://www.youtube.com/live/MZn7-TgnQh0?feature=share"><i class="bi bi-wifi text-white me-2"></i>Live</a>
                </div>
            </div>
        </nav>