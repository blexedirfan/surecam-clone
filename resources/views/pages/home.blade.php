@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="col-12 p-2 m-3">
                    <div class="card bg-light text-center p-5" style="border-radius: 30px; border:none;">
                        <h1 class="fw-bold " style="font-size: 54px; text-align: left;"><span style="color: #35adee;">Dash Cams<br></span> Built for Commercial Fleets</h1>
                        <p class="lead" style="text-align: left;">AI-powered dash cams with real-time GPS tracking, cloud
                            storage, and video
                            telematics to protect your fleet and improve operations.</p>
                        <div class="button-row">
                            <a href="{{ url('/contact') }}" class="btn demo-btn btn-lg">Get a Demo</a>
                            <a href="{{ url('/contact') }}" class="btn pricing-btn btn-lg">Pricing</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="col-12 p-2 m-3">
                    <video autoplay src="assets/videos/v1.mp4" style="border-radius: 30px" width="100%" class="mb-3" controls></video>
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
        <div class="row">
            <div class="col-md-4 fixed-left">
                <div class="col-12">
                    <h2 style="font-size: 45px">Fleet Safety & Visibility, Without the Hassle</h2>
                    <p>GPS tracking is just the start. SureCam combines real-time video, AI enabled safety insights, and
                        driver coaching to prevent accidents, protect drivers, and reduce costs—all in a simple, easy-to-use
                        platform.
                    </p>
                </div>
                <div class="col-8">
                    <a href="{{ url('/contact') }}" class="btn demo-btn btn-lg">Get a Demo</a>
                </div>
            </div>

            <div class="col-md-8 scrollable">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-light p-4" style="border-radius: 30px; border:none">
                            <h4>Prevent Accidents Before They Happen</h4>
                            <p style="color: gray">AI-powered in-cab nudges help drivers self-correct in real time, reducing
                                risky behavior.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-light p-4" style="border-radius: 30px; border:none">
                            <h4>Video Proof That Protects Your Business</h4>
                            <p style="color: gray">Dispute false claims and protect drivers with instant access to dash cam
                                video evidence.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-light p-4" style="border-radius: 30px; border:none">
                            <h4>Real-Time Alerts</h4>
                            <p style="color: gray">Receive immediate notifications for critical events to ensure safety.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-light p-4" style="border-radius: 30px; border:none">
                            <h4>Comprehensive Reporting</h4>
                            <p style="color: gray">Access detailed reports to analyze driver behavior and improve safety.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h2 style="font-size: 45px">Fleet Dash Cam Software Features</h2>
                <p style="color: gray; font-size: 18px; text-align: justify;">Smart, simple, and built for fleets. SureCam’s
                    GPS-connected fleet dash cam software delivers real-time
                    video, AI-driven safety insights, and easy-to-use tools that help businesses protect drivers, reduce
                    risk, and lower operational costs.</p>
            </div>
            <div class="col-md-5">
                <img class="map" src="assets/images/snap.webp" alt="">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center mb-4">
            <div class="col-md-10">
                <h2 class="fw-bold text-dark">You Can Trust SureCam</h2>
                <p class="text-muted mb-0">From family-owned to household names, smart businesses choose SureCam.</p>
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
                                        <p class="message">"SureCam transformed our fleet safety with AI-powered insights.
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
                                    <p class="message">"SureCam transformed our fleet safety with AI-powered insights. Our
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


    <div class="container p-5">
        <div class="container p-5">
            <div class="text-center mb-4">
                <h2 style="font-size: 44px"><b>Comprehensive Fleet Dash Camera <br> Solutions</b></h2>
                <p class="text-muted">
                    Protect your fleet and simplify operations with SureCam’s connected dash cameras. Built for reliability,
                    our cameras provide instant visibility, real-time insights, and seamless connectivity—so you always have
                    the footage you need when it matters most.
                </p>
            </div>
        </div>

        <div class="card bg-light shadow-sm border-0 p-4">
            <div class="row">
                <!-- Left side: image & text -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/cam.png" alt="Road-Facing Dash Cam" class="img-fluid rounded-circle mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                    <h4 class="fw-bold">Road-Facing Dash Cam</h4>
                    <p class="text-muted">
                        Capture high-definition footage of the road ahead to provide clarity on incidents and encourage
                        safe driving. Ideal for fleets prioritizing driver privacy while maintaining accountability.
                    </p>
                    <a href="#" class="btn learn-btn btn-primary px-4">Learn More</a>
                </div>

                <!-- Right side: video -->
                <div class="col-md-8">
                    <video autoplay src="assets/videos/v1.mp4" class="w-100 rounded-4 shadow" controls></video>
                </div>
            </div>
        </div>

        <div class="card bg-light shadow-sm border-0 p-4 mt-4">
            <div class="row">
                <!-- Left side: image & text -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/cam2.png" alt="Driver-Facing Dash Cam" class="img-fluid rounded-circle mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                    <h4 class="fw-bold">Driver-Facing Dash Cam</h4>
                    <p class="text-muted">
                        Monitor driver behavior with an inward-facing camera that captures critical moments inside the
                        vehicle. Helps improve safety, reduce distractions, and coach drivers effectively.
                    </p>
                    <a href="#" class="btn learn-btn btn-primary px-4">Learn More</a>
                </div>
                <div class="col-md-8">
                    <video autoplay src="assets/videos/v2.mp4" class="w-100 rounded-4 shadow" controls></video>
                </div>
            </div>
        </div>

        <div class="card bg-light shadow-sm border-0 p-4 mt-4">
            <div class="row">
                <!-- Left side: image & text -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/cam3.png" alt="360-Degree Fleet Camera" class="img-fluid rounded-circle mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                    <h4 class="fw-bold">360-Degree Fleet Camera</h4>
                    <p class="text-muted">
                        Get a complete view of your vehicles with our 360-degree camera system. Perfect for large fleets
                        needing comprehensive coverage and situational awareness in all directions.
                    </p>
                    <a href="#" class="btn learn-btn btn-primary px-4">Learn More</a>
                </div>
                <div class="col-md-8">
                    <video autoplay src="assets/videos/v3.mp4" class="w-100 rounded-4 shadow" controls></video>
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
            <p class="text-center">Different industries have different challenges. SureCam’s fleet dash cams provide the
                visibility, safety
                insights, and accountability businesses need—whether you’re managing a plumbing crew, utilities, or
                specialized
                fleets.</p>
            <a href="{{ url('/industries') }}" class="btn demo-btn btn-primary">Learn More</a>

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
                <p>Choosing a fleet dash cam shouldn’t be complicated. SureCam keeps it simple—no unnecessary alerts, no
                    complicated systems, just <span style="font-weight: bold;"> reliable video, real-time insights, and
                        AI-powered driver coaching</span>–all
                    backed by <span style="font-weight: bold;"> video telematics</span> to give you a complete picture of
                    your fleet’s safety and performance.
                </p>
                <a href="{{ url('/contact') }}" class="btn demo-btn btn-lg">SEE IT IN ACTION</a>
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
        <p>From local businesses to national brands, smart fleets trust SureCam to protect their drivers.</p>

        <div id="caseStudyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light p-4 mb-4" style="border-radius: 30px; border:none">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 20px">"With SureCam, we’ve transformed how we
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
                                    <a href="#" class="btn learn-btn btn-primary">Read More</a>
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

    <div class="container">
        <h2>Latest Blogs</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-light h-100">
                    <img src="assets/images/b1.svg" class="card-img-top" alt="Blog 1">
                    <div class="card-body">
                        <h5 class="card-title">5 Ways Dash Cams Improve Fleet Safety</h5>
                        <p class="card-text">Discover how dash cams can enhance safety, reduce accidents, and protect your
                            fleet from liability claims.</p>
                        <p>06 Jan 2025</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card bg-light h-100">
                    <img src="assets/images/b2.webp" class="card-img-top" alt="Blog 2">
                    <div class="card-body">
                        <h5 class="card-title">The Benefits of Real-Time GPS Tracking</h5>
                        <p class="card-text">Learn how real-time GPS tracking can optimize routes, improve efficiency, and
                            enhance customer service for your fleet.</p>
                        <p>08 Jan 2025</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card bg-light h-100">
                    <img src="assets/images/b3.webp" class="card-img-top" alt="Blog 3">
                    <div class="card-body">
                        <h5 class="card-title">How AI is Revolutionizing Fleet Management</h5>
                        <p class="card-text">Explore the impact of AI on fleet management, from predictive maintenance to
                            enhanced
                            safety features.</p>
                        <p>09 April 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card shadow-sm border-0 p-4 mt-4" style="border-radius: 30px; border:none; background-color: #35ADEE; background-image: url('assets/images/banner.webp');width: 100%; background-size: cover;color: white;">
                <div class="card-body">
                    <h2>Book a demo today!</h2>
                    <p>SureCam offers GPS vehicle tracking, live video, and real-time alerts for efficient fleet management.</p>
                    <a href="#" class="btn demo-btn btn-primary">Book a Demo</a>
                </div>
            </div>
        </div>
    @endsection
