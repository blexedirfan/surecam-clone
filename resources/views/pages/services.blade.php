@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Solutions for Your Successful Business</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Vehicle Tracking -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge">New</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-car fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Vehicle Tracking</h4>
                    <p class="m-0">Monitor your vehicle's location and movement in real-time using GPS technology. Improve safety, manage routes, and reduce costs.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Assets / Container Tracking -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge">Popular</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-boxes fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Assets / Container Tracking</h4>
                    <p class="m-0">Track valuable assets or containers using GPS & IoT. Improve security, reduce losses, and optimize logistics.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Bike Tracking -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-red">Hot</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-bicycle fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Bike Tracking</h4>
                    <p class="m-0">Monitor bikes in real-time for safety and security. Prevent theft, track movement, and manage usage efficiently.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Fuel / Generator Monitoring -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-blue">Pro</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-gas-pump fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Fuel / Generator Monitoring</h4>
                    <p class="m-0">Track fuel levels, usage, and generator performance in real-time. Prevent wastage and ensure efficient operation.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Fleet Management -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-purple">Expert</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-truck fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Fleet Management</h4>
                    <p class="m-0">Monitor, manage, and optimize your fleet. Track vehicles, monitor drivers, schedule maintenance, and reduce costs.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Router of Teltonika -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-green">New</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-wifi fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Router of Teltonika</h4>
                    <p class="m-0">High-performance routers for secure internet connectivity. Ideal for IoT, transportation, and remote management.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- MDVR -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-yellow text-dark">Popular</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-video fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">MDVR (Mobile Digital Video Recorder)</h4>
                    <p class="m-0">Specialized video recording system for vehicles. Enhances security, accountability, and supports GPS tracking.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Passenger Counting Solution -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item position-relative bg-light rounded d-flex flex-column align-items-center text-center p-4 hover-card">
                    <span class="badge position-absolute top-0 end-0 m-2 gradient-badge-red">Hot</span>
                    <div class="service-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Passenger Counting Solution</h4>
                    <p class="m-0">Accurately counts passengers entering/exiting vehicles or facilities. Optimizes routes and improves resource planning.</p>
                    <a class="btn btn-lg btn-primary rounded mt-3" href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Call Us Card -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us</h3>
                    <p class="text-white mb-3">Direct assistance through our dedicated customer service line. Fast and effective solutions to your needs.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Custom CSS for badges, hover and icon animation -->
<style>
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.service-icon i {
    transition: transform 0.3s ease, color 0.3s ease;
}
.service-item:hover .service-icon i {
    transform: scale(1.2);
    color: #ff6a00;
}

.gradient-badge {
    background: linear-gradient(45deg, #ff6a00, #ee0979);
    color: #fff;
    font-weight: 600;
}
.gradient-badge-red {
    background: linear-gradient(45deg, #ff416c, #ff4b2b);
    color: #fff;
    font-weight: 600;
}
.gradient-badge-blue {
    background: linear-gradient(45deg, #1e3c72, #2a5298);
    color: #fff;
    font-weight: 600;
}
.gradient-badge-purple {
    background: linear-gradient(45deg, #8e2de2, #4a00e0);
    color: #fff;
    font-weight: 600;
}
.gradient-badge-green {
    background: linear-gradient(45deg, #11998e, #38ef7d);
    color: #fff;
    font-weight: 600;
}
.gradient-badge-yellow {
    background: linear-gradient(45deg, #f7971e, #ffd200);
    color: #000;
    font-weight: 600;
}
</style>
@endsection
