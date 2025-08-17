@extends('layouts.app')

@section('content')
    <!-- Hero Section with Breadcrumbs -->
    <section class="hero-section py-5"
        style="background: linear-gradient(rgba(0, 114, 206, 0.2), rgba(0, 114, 206, 0.1)), url('{{ asset('assets/images/moving.jpg') }}') center/cover no-repeat; color: #fff;">
        <div class="container text-center">
            <h1 class="mb-3">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"
                            style="color: #fff; text-decoration: underline;">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="about-section py-5">
        <div class="container">
            <div class="col-md-12">
                <div class="story-card p-4">
                    <h2 class="mb-3">The Blu Global Story</h2>
                    <p>The BluGlobal offers advanced vehicle tracking. We protect against theft, analyze
                        accidents, monitor drivers, and help lower insurance costs. Smart, safe, and reliable tracking — all
                        in one place.</p>
                </div>
            </div>
    </section>

    <!-- About Section -->
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="info-col col-md-6">
                <h2 class="mb-4">Who We Are</h2>
                <p>The BluGlobal utilizes top-of-the-line, state-of-the-art vehicle tracking technology to deliver reliable,
                    secure, and intelligent tracking solutions for individuals and businesses. With a strong focus on
                    safety, efficiency, and customer satisfaction, our experienced and highly qualified team works 24/7 to
                    ensure that you and your vehicle are always protected and connected. At BluGlobal, we don't just track
                    your vehicle — we provide comprehensive security and fleet management services that go beyond basic
                    monitoring. Whether it’s theft prevention, snatching alerts, or crash reporting, our systems are
                    designed to react instantly and keep you informed in real-time. </p>
            </div>
            <div class="col-md-6">
                <img class="team-img img-fluid rounded shadow" src="{{ asset('assets/images/team.jpg') }}" alt="About Us">
            </div>
        </div>
        <div class="container offering">
            <h2>What We Offer</h2>
            <p>Blu Global has set the standard for vehicle tracking and video for busy companies. Take a closer look at
                what we offer:</p>
            <div class="row g-4"><!-- g-4 will now work -->

                <div class="col-md-4">
                    <div class="offering-cards">
                        <h3>Managing your fleet, made easy.</h3>
                        <p>Using cloud-connected dash cameras, our IoT platform, and customer software, we provide
                            digital fleet intelligence for small and midsize companies. We’re all about making fleet
                            technology easy for our customers by providing consistent, reliable support when and where
                            you need it.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offering-cards">
                        <h3>Video for productivity and safety.</h3>
                        <p>Whether you want to ensure your drivers are working at their best or you want to address
                            unsafe driving habits — or both — Blu Global was born as a video company and has evolved into a
                            full-service telematics enterprise. We deliver video solutions that drive better
                            productivity and improved safety for our clients. Blu Global makes establishing driver
                            productivity and safety incentive programs simple.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offering-cards">
                        <h3>All-in-one fleet tracking and video solutions.</h3>
                        <p>Our customers appreciate that Blu Global is a one-stop solution for managing everything related
                            to their fleet vehicles. We help companies track, maintain, optimize, and enforce safety and
                            productivity across their vehicles. Quickly access and share video clips with those who need
                            them, when they need them.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Customer Promise</h2>
                <p class="lead text-muted">
                    At Blu Global, we are committed to delivering exceptional service and support to our customers.
                    We promise to be there for you every step of the way, providing the tools and resources you need to
                    succeed.
                </p>
            </div>

            <h3 class="fw-bold mb-4">We promise to deliver:</h3>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="icon mb-3" style="font-size: 40px; color: #0072ce;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5 class="fw-bold">24/7 Customer Support</h5>
                        <p class="text-muted">
                            Always here for you — our dedicated team is available around the clock to resolve issues quickly
                            and effectively.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="icon mb-3" style="font-size: 40px; color: #0072ce;">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h5 class="fw-bold">Regular Software Updates</h5>
                        <p class="text-muted">
                            Stay ahead with continuous improvements and new features designed to keep your system running
                            smoothly.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="icon mb-3" style="font-size: 40px; color: #0072ce;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5 class="fw-bold">Comprehensive Training</h5>
                        <p class="text-muted">
                            Access to guides, tutorials, and expert-led training sessions so your team gets the most from
                            Blu Global.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
