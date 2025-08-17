@extends('layouts.app')

@section('content')
    <div class="container py-5 mt-4">
        <div class="row mb-4">
            <div class="col-md-10 mx-auto text-center">
                <h1 class="fw-bold section-heading display-5 mb-3">AI-Powered Fleet Solutions</h1>
                <p class="lead text-muted mb-4">
                    Cutting-edge dash cams and fleet management solutions designed to enhance safety, reduce costs, and
                    provide actionable insights for commercial fleets.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <div class="product-badge">BEST SELLER</div>
                    <img src="{{('assets/images/cam.png')}}"
                        alt="Front-facing AI dash cam mounted on a truck windshield with sleek design" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Front-Facing Dash Cam</h5>
                        <p class="card-text">AI-powered dash cam with real-time GPS tracking, cloud storage, and incident
                            detection.</p>

                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Full HD 1080p recording</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Real-time GPS tracking</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Driver behavior analysis
                            </li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Impact detection</li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="ms-1">(42)</span>
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <div class="product-badge">NEW</div>
                    <img src="{{('assets/images/cam2.png')}}"
                        alt="Rear-facing dash cam with wide-angle lens mounted on a vehicle rear window"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Rear-Facing Dash Cam</h5>
                        <p class="card-text">Advanced dash cam with night vision, driver behavior analysis, and dual-channel
                            recording.</p>

                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Night vision capability</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Dual-channel recording</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Lane departure warnings</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Low-light optimization</li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="ms-1">(36)</span>
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <img src="{{('assets/images/cam3.png')}}"
                        alt="Dual-facing dash cam system showing front and rear cameras mounted in a truck cabin"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dual-Facing Dash Cam</h5>
                        <p class="card-text">Premium dash cam system with front and rear recording, 360° coverage, and AI
                            alerts.</p>

                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Simultaneous dual recording
                            </li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> 360° coverage</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> AI-powered collision alerts
                            </li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Fleet tracking integration
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-1">(58)</span>
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <div class="product-badge">LIMITED STOCK</div>
                    <img src="{{('assets/images/interior.jpg')}}"
                        alt="Interior-facing dash cam monitoring driver behavior with infrared capability"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Interior-Facing Dash Cam</h5>
                        <p class="card-text">Driver monitoring system with infrared technology for 24/7 cabin surveillance.
                        </p>

                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> IR night vision</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Fatigue detection</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Distraction alerts</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Privacy features</li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="ms-1">(29)</span>
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-md-4">
                <div class="card product-card h-100 shadow-sm">
                    <img src="{{('assets/images/waterproof.png')}}"
                        alt="Waterproof rugged dash cam mounted on a heavy-duty truck exterior" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Waterproof Dash Cam</h5>
                        <p class="card-text">Rugged exterior camera designed for harsh environments and heavy-duty
                            vehicles.</p>

                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> IP68 waterproof rating
                            </li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Extreme temperature
                                resistance</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Vibration-resistant</li>
                            <li class="mb-2"><i class="fas fa-check-circle feature-icon"></i> Dust-proof enclosure</li>
                        </ul>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="ms-1">(18)</span>
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
