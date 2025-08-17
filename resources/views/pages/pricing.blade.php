@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="container-fluid bg-light py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
            <h1 class="display-5 mb-3">All-in-One Fleet Dash Cam + GPS Pricing</h1>
            <p class="lead text-muted">Choose a plan that works best for your business.</p>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <!-- Basic Plan -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="card bg-light border-0 shadow-sm h-100 pricing-card">
                    <div class="card-header bg-transparent border-bottom text-center py-4">
                        <h4 class="text-primary mb-1">Basic Plan</h4>
                        <small class="text-muted text-uppercase">Best for Starters</small>
                    </div>
                    <div class="card-body text-center p-5">
                        <h1 class="display-5 mb-3 text-dark">
                            <small class="align-top" style="font-size:22px;">Rs</small>
                            499
                            <small class="align-bottom" style="font-size:16px;">/Month + Tax</small>
                        </h1>
                        <ul class="list-unstyled mb-4">
                            <li>✔ Basic Features</li>
                            <li>✔ Email Support</li>
                            <li>✔ 1 User Access</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary px-4 py-2 rounded-pill">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Pro Plan -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="card bg-white border-0 shadow-lg h-100 pricing-card featured">
                    <div class="card-header bg-transparent border-bottom text-center py-4">
                        <h4 class="text-primary mb-1">Pro Plan</h4>
                        <small class="text-muted text-uppercase">Most Popular</small>
                    </div>
                    <div class="card-body text-center p-5">
                        <h1 class="display-5 mb-3 text-dark">
                            <small class="align-top" style="font-size:22px;">Rs</small>
                            6000
                            <small class="align-bottom" style="font-size:16px;">/Year + Tax</small>
                        </h1>
                        <ul class="list-unstyled mb-4">
                            <li>✔ All Features</li>
                            <li>✔ Priority Support</li>
                            <li>✔ 5 User Access</li>
                        </ul>
                        <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Custom Plan -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.9s">
                <div class="card bg-light border-0 shadow-sm h-100 pricing-card">
                    <div class="card-header bg-transparent border-bottom text-center py-4">
                        <h4 class="text-primary mb-1">Custom Plan</h4>
                        <small class="text-muted text-uppercase">For Large Teams</small>
                    </div>
                    <div class="card-body text-center p-5">
                        <h1 class="display-6 mb-3 text-dark">Contact Us</h1>
                        <ul class="list-unstyled mb-4">
                            <li>✔ Tailored Features</li>
                            <li>✔ Dedicated Support</li>
                            <li>✔ Unlimited Users</li>
                        </ul>
                        <a href="#" class="btn btn-outline-dark px-4 py-2 rounded-pill">Contact Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container-fluid bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Get Started?</h2>
            <p class="lead mb-4">Schedule a quick demo and see how our solution works for you.</p>
            <a href="#" class="btn btn-light px-5 py-3 rounded-pill">Book a Demo</a>
        </div>
    </div>


@endsection
