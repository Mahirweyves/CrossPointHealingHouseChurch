@include('user.css')
@include('user.navbar')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="{{url('/')}}" class="h5 text-white">Home /</a>
                    <!-- <i class="far fa-circle text-white px-2"></i> -->
                    <a href="" class="h5 text-white">What we believe</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
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
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid" data-wow-delay="0.5s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7 bg-light pt-3 wow fadeInLeft" id="team">
                    <div class="section-title position-relative pb-2 mb-4">
                        <!-- <h5 class="fw-bold text-primary ">About Us</h5> -->
                        <h2 class="mb-0 text-uppercase">About CrossPointe Healing House Church</h2>
                    </div>
                    <p class="mb-4">CrossPointe Healing House Church (CPHH) was founded in 2016 by Reverend Claudine Barandagiye 
                        (Senior Pastor). 
                    </p>
                    <p class="mb-4">As an immigrant from Burundi, Rev. Claudine envisioned creating a place of worship for members of the East African Diaspora 
                        and others living in the greater District of Columbia, Maryland, and Virginia (DMV) region. In her vision, CPHH would be a place of spiritual encounter and healing for more than just her community of origin.
                        The church would serve people of all nationalities, tongues, and cultures, and create a fellowship and connection point for American and international congregants.
                        Currently, the church is primarily comprised of members from Burundi, Rwanda, Tanzania, Uganda, and the Democratic Republic of Congo (DRC). 
                        In total, there are over 100 adults and children members of our congregation.
                    </p>

                    <p class="mb-4">CrossPointe Healing House Church seeks to provide communion amongst 
                        Christians of all nations in order to bring physical, emotional, and spiritual 
                        healing to our community. We live by Matthew 11:28-30 which states <i class="fw-bold text-dark">“Come to me, 
                        all you who are weary and burdened, and I will give you rest. 
                        Take my yoke upon you and learn from me, for I am gentle and humble in heart, 
                        and you will find rest for your souls. For my yoke is easy and my burden is light.” </i> 
                        We are dedicated to being a safe haven and refuge for those who have suffered, 
                        been persecuted, oppressed, and/or just feel the weight of the world on their shoulders. 
                        We are committed to building strong bridges and partnerships and aspire to see the Lord mold 
                        together Christians across ethnic lines, countries of origin, language groups, and Christian 
                        denominations all into a harmonious team for the glory of God the Father.
                    </p>
                </div>
                <div class="col-lg-5 wow fadeInRight" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/senior-pastor.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid my-5" data-wow-delay="0.5s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 bg-light pt-3 wow fadeInLeft" id="team">
                    <div class="section-title position-relative pb-2 mb-4">
                        <!-- <h5 class="fw-bold text-primary ">About Us</h5> -->
                        <h2 class="mb-0 text-uppercase">Our belief</h2>
                    </div>
                    <h4>As CrossPointe Healing House Church:</h4>
                    <p class="mb-4"><i class="far fa-circle text-dark fw-bold py-3"></i> We believe that the Bible is God’s Word. It is accurate, authoritative and applicable to our everyday lives. </br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe in one eternal God who is the Creator of all things. He exists in three Persons: God the Father, God the Son and God the Holy Spirit. He is totally loving and completely holy.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that sin has separated each of us from God and His purpose for our lives.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that the Lord Jesus Christ as both God and man is the only One who can reconcile us to God. He lived a sinless and exemplary life, died on the cross in our place, and rose again to prove His victory and empower us for life.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i>  We believe that in order to receive forgiveness and the <i class="fw-bold text-dark">‘new birth’</i> we must repent of our sins, believe in the Lord Jesus Christ, and submit to His will for our lives.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that in order to live the holy and fruitful lives that God intends for us, we need to be baptized in water and be filled with the power of the Holy Spirit. The Holy Spirit enables us to use spiritual gifts, including speaking in tongues.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe in the power and significance of the Church and the necessity of believers to meet regularly together for fellowship, prayer and the <i class="fw-bold text-dark">‘breaking of bread’</i>.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that God has individually equipped us so that we can successfully achieve His purpose for our lives which is to worship God, fulfill our role in the Church and serve the community in which we live.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that God wants to heal and transform us so that we can live healthy and blessed lives in order to help others more effectively.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that our eternal destination of either Heaven or hell is determined by our response to the Lord Jesus Christ.</br>

                    <i class="far fa-circle text-dark fw-bold py-3"></i> We believe that the Lord Jesus Christ is coming back again as He promised.</br>
                    </p>
                </div>
                <div class="col-lg-12 bg-light pt-3 wow fadeInRight" style="min-height: 500px;" id="team">
                    <div class="section-title position-relative pb-2 mb-4">
                        <!-- <h5 class="fw-bold text-primary ">About Us</h5> -->
                        <h2 class="mb-0 text-uppercase">Our Mission & Vision</h2>
                    </div>
                    <div class="position-relative h-100">
                    <h4 class="mb-0 text-uppercase"><i class="fa fa-arrow-right" aria-hidden="true"></i> Crosspointe’s Core Vision</h4>
                    <p class="mb-4">
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Reach In. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Reach Out. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Reach Up. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Reach Down. </br>
                    </p>
                    <h4 class="mb-0 text-uppercase"><i class="fa fa-arrow-right" aria-hidden="true"></i> Crosspointe’s Core Mission</h4>
                    <p class="mb-4">
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Every Believer Is A Minister. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Every Minister Is A Leader. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Every Leader Is A Reproducer. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Every Reproducer Is A World Changer. </br>
                    </p>
                    <h4 class="mb-0 text-uppercase"><i class="fa fa-arrow-right" aria-hidden="true"></i> Crosspointe’s Core Culture</h4>
                    <p class="mb-4">
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Servanthood. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Honour. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Generosity. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Excellence. </br>
                        <i class="far fa-circle text-dark fw-bold py-3"></i> Unity / Teamwork. </br>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('user.js')
</body>

</html>