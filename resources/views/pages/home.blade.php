@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-5 col-md-6 col-12">
                <div class="card bg-light shadow-sm border-0 p-4 p-md-5 m-2" style="border-radius: 30px;">
                    <h1 class="fw-bold mb-3" style="font-size: clamp(28px, 5vw, 48px); text-align: left; line-height: 1.2;">
                        <span style="color: #35adee;">Dash Cams</span><br>Built for Commercial Fleets
                    </h1>
                    <p class="lead text-muted mb-4" style="text-align: left; font-size: clamp(14px, 2.5vw, 18px);">
                        AI-powered dash cams with real-time GPS tracking, secure cloud storage, and advanced video
                        telematics to protect your fleet and streamline operations.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('contact') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                            Get a Demo
                        </a>
                        <a href="{{ route('pricing') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm">
                            View Pricing
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Video -->
            <div class="col-lg-7 col-md-6 col-12 mt-4 mt-md-0">
                <div class="m-2 position-relative">
                    <video autoplay muted loop controls width="100%"
                        style="border-radius: 30px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
                        <source src="assets/videos/v1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <!-- Optional overlay badge -->
                    <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 rounded-bottom-start d-none d-md-block"
                        style="font-size:14px; font-weight:500;">
                        Live Demo
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="logo-slider-wrap my-5">
        <div class="logo-slider">
            <img src="assets/images/g4s.webp" alt="Logo 1">
            <img src="assets/images/sav.webp" alt="Logo 2">
            <img src="assets/images/sring.webp" alt="Logo 3">
            <img src="assets/images/g4s.webp" alt="Logo 4">
            <img src="assets/images/sav.webp" alt="Logo 5">
            <img src="assets/images/sring.webp" alt="Logo 6">
            <!-- Repeat logos for seamless loop -->
            <img src="assets/images/g4s.webp" alt="Logo 1">
            <img src="assets/images/sav.webp" alt="Logo 2">
            <img src="assets/images/sring.webp" alt="Logo 3">
            <img src="assets/images/g4s.webp" alt="Logo 4">
            <img src="assets/images/sav.webp" alt="Logo 5">
            <img src="assets/images/sring.webp" alt="Logo 6">
            <img src="assets/images/g4s.webp" alt="Logo 1">
            <img src="assets/images/sav.webp" alt="Logo 2">
            <img src="assets/images/sring.webp" alt="Logo 3">
            <img src="assets/images/g4s.webp" alt="Logo 4">
            <img src="assets/images/sav.webp" alt="Logo 5">
            <img src="assets/images/sring.webp" alt="Logo 6">
        </div>
    </div> <!-- No prev/next buttons for auto slider -->

    <div class="container mb-5 pb-5">
        <div class="row align-items-start">

            <!-- Left Column (Sticky Info) -->
            <div class="col-md-4">
                <div class="position-sticky" style="top: 100px;">
                    <h2 class="fw-bold mb-4" style="font-size: 42px; line-height: 1.3;">
                        Fleet Safety & Visibility, Without the Hassle
                    </h2>
                    <p style="text-align: justify; color: #555; font-size: 18px;">
                        THE BLUGLOBAL uses top-of-the-line State of the Art technology for vehicle tracking.
                        Our highly experienced and qualified staff works round the clock to make life easier
                        and safer for you and your vehicle. We protect against theft, conduct accident
                        analysis, evaluate driver performance, and help you save on insurance.
                        <br><br>
                        The Bluglobal is where your demands on tracking are fully met.
                    </p>
                    <a href="{{ url('/contact') }}" class="btn btn-lg demo-btn px-5 py-3 fw-semibold mt-3">
                        Get a Demo
                    </a>
                </div>
            </div>

            <!-- Right Column (Feature Cards) -->
            <div class="col-md-8">
                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="card feature-card h-100 p-4">
                            <h4 class="fw-bold mb-2">🚦 Prevent Accidents</h4>
                            <p class="text-muted">
                                AI-powered in-cab nudges help drivers self-correct in real time, reducing risky behavior.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card feature-card h-100 p-4">
                            <h4 class="fw-bold mb-2">🎥 Video Proof</h4>
                            <p class="text-muted">
                                Dispute false claims and protect drivers with instant access to dash cam video evidence.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card feature-card h-100 p-4">
                            <h4 class="fw-bold mb-2">🔔 Real-Time Alerts</h4>
                            <p class="text-muted">
                                Receive immediate notifications for critical events to ensure safety.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card feature-card h-100 p-4">
                            <h4 class="fw-bold mb-2">📊 Comprehensive Reports</h4>
                            <p class="text-muted">
                                Access detailed reports to analyze driver behavior and improve safety.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <h2 class="fw-bold mb-4" style="font-size: 42px; line-height: 1.2;">
                    Fleet Dash Cam <span class="text-primary">Software Features</span>
                </h2>
                <p class="text-muted" style="font-size: 18px; text-align: justify;">
                    Smart, simple, and built for fleets. Blu Global’s GPS-connected fleet dash cam software
                    delivers real-time video, AI-driven safety insights, and easy-to-use tools that help
                    businesses protect drivers, reduce risk, and lower operational costs.
                </p>
                <a href="{{ route('products') }}" class="btn btn-primary px-4 py-2 rounded-pill mt-3 shadow-sm">
                    Learn More
                </a>
            </div>

            <!-- Right Image -->
            <div class="col-lg-7 col-md-6 d-flex justify-content-center justify-content-md-end">
                <img class="map img-fluid" src="assets/images/snap.jpg" alt="Fleet Software Features">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center mb-4">
            <div class="col-md-10">
                <h2 class="fw-bold text-dark">You Can Trust Blu Global</h2>
                <p class="text-muted mb-0">From family-owned to household names, smart businesses choose Blu Global.</p>
            </div>
            <div class="col-md-2 text-md-end mt-3 mt-md-0">
                <img src='assets/images/google.webp' width="20%" alt="Google Rating">
            </div>
        </div>

        <section class="testimonial-section">
            <div class="container">
                <h2 class="text-center mb-5">What Our Clients Say</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="testimonial-card bg-light mx-auto col-md-3">
                                    <div class="col-12">
                                        <img src='assets/images/t1.jpg' width="50px" alt="Client">
                                        <h5>John Doe</h5>
                                        <p class="role">Fleet Manager, XYZ Logistics</p>
                                        <p class="message">"Blu Global transformed our fleet safety with AI-powered
                                            insights.
                                            Our
                                            accident rate dropped significantly!"</p>
                                    </div>
                                </div>

                                <div class="testimonial-card bg-light mx-auto col-md-3">
                                    <div class="col-12">
                                        <img src='assets/images/t1.jpg' width="50px" alt="Client">
                                        <h5>Sarah Williams</h5>
                                        <p class="role">Operations Head, ABC Transport</p>
                                        <p class="message">"The real-time monitoring feature is a game changer. We save
                                            time,
                                            money, and ensure safety!"</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="testimonial-card bg-light mx-auto col-md-3">
                                    <img src='assets/images/t1.jpg' width="50px" alt="Client">
                                    <h5>John Doe</h5>
                                    <p class="role">Fleet Manager, XYZ Logistics</p>
                                    <p class="message">"Blu Global transformed our fleet safety with AI-powered insights.
                                        Our
                                        accident rate dropped significantly!"</p>
                                </div>

                                <div class="testimonial-card mx-auto col-md-3">
                                    <img src='assets/images/t3.jpg' width="50px" alt="Client">
                                    <h5>Sarah Williams</h5>
                                    <p class="role">Operations Head, ABC Transport</p>
                                    <p class="message">"The real-time monitoring feature is a game changer. We save time,
                                        money, and ensure safety!"</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <!-- Carousel indicators -->
                    <div class="carousel-indicators mt-4">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 text-dark">
                    Comprehensive Fleet Dash Camera <br>
                    <span class="text-primary">Solutions</span>
                </h2>
                <p class="text-muted mx-auto" style="max-width: 750px; font-size: 17px;">
                    Protect your fleet and simplify operations with Blu Global’s connected dash cameras.
                    Built for reliability, our cameras provide instant visibility, real-time insights, and seamless
                    connectivity—so you always have the footage you need when it matters most.
                </p>
            </div>

            <!-- Card 1 -->
            <div class="card border-0 shadow-sm rounded-4 p-4 mb-5">
                <div class="row align-items-center">
                    <!-- Image + Text -->
                    <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                        <img src="assets/images/cam.png" alt="Road-Facing Dash Cam"
                            class="img-fluid rounded-circle shadow-lg cam-img mb-3">
                        <h4 class="fw-bold">Road-Facing Dash Cam</h4>
                        <p class="text-muted">
                            Capture high-definition footage of the road ahead to provide clarity on incidents and
                            encourage safe driving. Ideal for fleets prioritizing driver privacy while maintaining
                            accountability.
                        </p>
                        <a href="{{ route('products') }}" class="btn btn-primary rounded-pill px-4">Learn More</a>
                    </div>
                    <!-- Video -->
                    <div class="col-lg-7">
                        <video autoplay muted loop controls class="w-100 rounded-4 shadow cam-video">
                            <source src="assets/videos/v1.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <!-- Card 2 (Swapped Layout for variety) -->
            <div class="card border-0 shadow-sm rounded-4 p-4 mb-5">
                <div class="row align-items-center flex-lg-row-reverse">
                    <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                        <img src="assets/images/cam2.png" alt="Driver-Facing Dash Cam"
                            class="img-fluid rounded-circle shadow-lg cam-img mb-3">
                        <h4 class="fw-bold">Driver-Facing Dash Cam</h4>
                        <p class="text-muted">
                            Monitor driver behavior with an inward-facing camera that captures critical moments inside the
                            vehicle. Helps improve safety, reduce distractions, and coach drivers effectively.
                        </p>
                        <a href="{{ route('products') }}" class="btn btn-primary rounded-pill px-4">Learn More</a>
                    </div>
                    <div class="col-lg-7">
                        <video autoplay muted loop controls class="w-100 rounded-4 shadow cam-video">
                            <source src="assets/videos/v2.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                        <img src="assets/images/cam3.png" alt="360-Degree Fleet Camera"
                            class="img-fluid rounded-circle shadow-lg cam-img mb-3">
                        <h4 class="fw-bold">360-Degree Fleet Camera</h4>
                        <p class="text-muted">
                            Get a complete view of your vehicles with our 360-degree camera system.
                            Perfect for large fleets needing comprehensive coverage and situational awareness in all
                            directions.
                        </p>
                        <a href="{{ route('products') }}" class="btn btn-primary rounded-pill px-4">Learn More</a>
                    </div>
                    <div class="col-lg-7">
                        <video autoplay muted loop controls class="w-100 rounded-4 shadow cam-video">
                            <source src="assets/videos/v3.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container bg-dark text-white mx-auto px-5 py-5" style="margin-top: auto;border-radius: 30px;">
        <div class="text-center">
            <span class="text-center"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 9L5 0.5L15 0.5L20 9L15 17.5H5L0 9Z" fill="#35ADEE"></path>
                </svg> Industries</span>
            <h2 class="text-center" style="font-size:48px !important;line-height:52px;font-weight:600;">Solutions Tailored
                for <span style="color:#35ADEE;">Your Industry</span></h2>
            <p class="text-center">Different industries have different challenges. Blu Global’s fleet dash cams provide the
                visibility, safety
                insights, and accountability businesses need—whether you’re managing a plumbing crew, utilities, or
                specialized
                fleets.</p>
            <a href="{{ route('contact') }}" class="btn demo-btn btn-primary">Learn More</a>

        </div>

        <div class="row mt-4 justify-content-center">
            <div class="card col-md-3 m-3 px-4 py-4" style="background-color: #f1f7fd;">
                <img src="assets/images/truck.webp" width="60px" alt="Construction & Field Services" srcset="">
                <h5>Construction & Field Services</h5>
                <p>Heavy equipment, work trucks, service vans, and more—keep teams on track with GPS tracking, live video,
                    and driver monitoring for safer jobs and smoother operations.</p>
            </div>
            <div class="card col-md-3 m-3 px-4 py-4" style="background-color: #f1f7fd;">
                <img src="assets/images/bell.webp" width="60px" alt="Utilities & Essential Services" srcset="">
                <h5>Utilities & Essential Services</h5>
                <p>AI-driven alerts, live tracking, and always-recording dash cams help electric, gas, water, and telecom
                    fleets stay safe and efficient, even in tough conditions.</p>
            </div>
            <div class="card col-md-3 m-3 px-4 py-4" style="background-color: #f1f7fd;">
                <img src="assets/images/track.webp" width="60px" alt="Delivery, Towing & Specialized Fleets"
                    srcset="">
                <h5>Delivery, Towing & Specialized Fleets</h5>
                <p>Every mile matters. Get real-time tracking, AI coaching, and instant video to keep deliveries on
                    schedule, drivers accountable, and your fleet protected.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-5 px-4  py-4">
        <div class="row">
            <div class="col-md-6 px-5">
                <h2 style="font-size: 48px; font-weight: 600;">Simple, Smart, and <span style="color:#35ADEE;">Built for
                        Fleets Like Yours</span></h2>
                <p>Choosing a fleet dash cam shouldn’t be complicated. Blu Global keeps it simple—no unnecessary alerts, no
                    complicated systems, just <span style="font-weight: bold;"> reliable video, real-time insights, and
                        AI-powered driver coaching</span>–all
                    backed by <span style="font-weight: bold;"> video telematics</span> to give you a complete picture of
                    your fleet’s safety and performance.
                </p>
                <a href="{{ route('contact') }}" class="btn demo-btn btn-lg">SEE IT IN ACTION</a>
            </div>
            <div class="col-md-6">
                <img src="assets/images/p1.webp" width="100%" alt="Fleet Dash Cam" class="img-fluid rounded-4">
            </div>
        </div>
    </div>

    <div class="container p-4">
        <span class="text-center">
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 9L5 0.5L15 0.5L20 9L15 17.5H5L0 9Z" fill="#35ADEE"></path>
            </svg> CASE STUDIES
        </span>
        <h2>Trusted by Fleets, Proven by Results</h2>
        <p>From local businesses to national brands, smart fleets trust Blu Global to protect their drivers.</p>

        <div id="caseStudyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light p-4 mb-4" style="border-radius: 30px; border:none">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px">"With Blu Global, we’ve transformed how
                                        we
                                        manage risk.
                                        The video evidence has been instrumental in protecting our drivers, reducing
                                        liability, and helping us coach our team more effectively. It's made resolving
                                        claims faster and fairer, which has saved us significant time and money."
                                    </p>
                                    <a href="#" class="btn learn-btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="card bg-light p-4 mb-4" style="border-radius: 30px; border:none">
                                <div class="card-body">
                                    <span class="">
                                        <h2>50%</h2>
                                        <p>Reduction in accidents</p>
                                        <img class="float-end" width="50px" src="assets/images/decrease.webp"
                                            alt="Case Study 2">
                                    </span>
                                </div>
                            </div>
                            <div class="card bg-whitesmoke p-4"
                                style="border-radius: 30px; border:none; border:1px solid #eaeaea;">
                                <div class="card-body">
                                    <img class="float-end" width="350px" src="assets/images/conc.webp"
                                        alt="Case Study 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light p-4 mb-4" style="border-radius: 30px; border:none">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px">“We now have the facts to deal with any
                                        unusual situations that occur, instead of dealing with recollections. We can now
                                        pinpoint exactly what happened, when and why, which is a massive help.”
                                    </p>
                                    <a href="{{ route('contact') }}" class="btn learn-btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="card bg-light p-4 mb-4" style="border-radius: 30px; border:none">
                                <div class="card-body">
                                    <span class="">
                                        <h2>100%</h2>
                                        <p>Success in combatting false claims</p>
                                        <img class="float-end" width="50px" src="assets/images/decrease.webp"
                                            alt="Case Study 2">
                                    </span>
                                </div>
                            </div>
                            <div class="card p-4 mb-4"
                                style="border-radius: 30px; border:none; border:1px solid #eaeaea;">
                                <div class="card-body">
                                    <img class="float-end" style="border-radius: 30px;" width="450px"
                                        src="assets/images/euro.webp" alt="Case Study 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Navigation Buttons -->
            <button class="custom-btn prev-btn" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="prev">
                &#10094; <!-- Left Arrow -->
            </button>
            <button class="custom-btn next-btn" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="next">
                &#10095; <!-- Right Arrow -->
            </button>
        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We Offer Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Monthly Plan -->
                <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card bg-light border-0 shadow-sm h-100 pricing-card">
                        <div class="card-header bg-transparent border-bottom text-center py-4">
                            <h4 class="text-primary mb-1">Monthly Plan</h4>
                            <small class="text-muted text-uppercase">Best for Starters</small>
                        </div>
                        <div class="card-body text-center p-5">
                            <h1 class="display-5 mb-3 text-dark">
                                <small class="align-top" style="font-size:22px; line-height:45px;">Rs</small>
                                499
                                <small class="align-bottom" style="font-size:16px; line-height:40px;">/Month + Tax</small>
                            </h1>
                            <ul class="list-unstyled mb-4">
                                <li>✔ Basic Features</li>
                                <li>✔ Email Support</li>
                                <li>✔ 1 User Access</li>
                            </ul>
                            <a href="{{ route('pricing') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Yearly Plan -->
                <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="card bg-white border-0 shadow-lg h-100 pricing-card featured">
                        <div class="card-header bg-transparent border-bottom text-center py-4">
                            <h4 class="text-primary mb-1">Yearly Plan</h4>
                            <small class="text-muted text-uppercase">Most Popular</small>
                        </div>
                        <div class="card-body text-center p-5">
                            <h1 class="display-5 mb-3 text-dark">
                                <small class="align-top" style="font-size:22px; line-height:45px;">Rs</small>
                                6000
                                <small class="align-bottom" style="font-size:16px; line-height:40px;">/Year + Tax</small>
                            </h1>
                            <ul class="list-unstyled mb-4">
                                <li>✔ All Features</li>
                                <li>✔ Priority Support</li>
                                <li>✔ 5 User Access</li>
                            </ul>
                            <a href="{{ route('pricing') }}" class="btn btn-primary px-4 py-2 rounded-pill">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Latest <span class="text-primary">Blogs</span></h2>
            <p class="text-muted" style="max-width: 600px; margin: auto;">
                Stay updated with the latest insights on fleet safety, GPS tracking, and AI innovations in transportation.
            </p>
        </div>

        <!-- Blog Cards -->
        <div class="row">
            <!-- Blog 1 -->
            <div class="col-md-4 mb-4">
                <div class="card blog-card h-100 border-0 shadow-sm">
                    <img src="assets/images/b1.svg" class="card-img-top rounded-top" alt="Blog 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">5 Ways Dash Cams Improve Fleet Safety</h5>
                        <p class="card-text text-muted">
                            Discover how dash cams can enhance safety, reduce accidents, and protect your fleet from
                            liability claims.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="bi bi-calendar-event me-2"></i>06 Jan 2025</small>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-md-4 mb-4">
                <div class="card blog-card h-100 border-0 shadow-sm">
                    <img src="assets/images/b2.webp" class="card-img-top rounded-top" alt="Blog 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">The Benefits of Real-Time GPS Tracking</h5>
                        <p class="card-text text-muted">
                            Learn how real-time GPS tracking can optimize routes, improve efficiency, and enhance customer
                            service for your fleet.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="bi bi-calendar-event me-2"></i>08 Jan 2025</small>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-md-4 mb-4">
                <div class="card blog-card h-100 border-0 shadow-sm">
                    <img src="assets/images/b3.webp" class="card-img-top rounded-top" alt="Blog 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">How AI is Revolutionizing Fleet Management</h5>
                        <p class="card-text text-muted">
                            Explore the impact of AI on fleet management, from predictive maintenance to enhanced safety
                            features.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="bi bi-calendar-event me-2"></i>09 Apr 2025</small>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5">
        <div class="card shadow-lg border-0 text-center text-white p-5 position-relative overflow-hidden"
            style="border-radius: 30px; background: url('assets/images/banner.webp') center/cover no-repeat;">

            <!-- Dark overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: rgba(0,0,0,0.55); border-radius: 30px;">
            </div>

            <!-- Content -->
            <div class="card-body position-relative">
                <h2 class="fw-bold display-5 mb-3">Book a Demo Today!</h2>
                <p class="lead mb-4">
                    Blu Global offers GPS vehicle tracking, live video, and real-time alerts for efficient fleet management.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-lg btn-primary px-5 py-3 fw-semibold demo-last-btn">
                    <i class="bi bi-calendar-check me-2"></i> Book a Demo
                </a>
            </div>
        </div>
    </div>
@endsection
