@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6 mb-4">
            <h2 class="fw-bold mb-3" style="color:#35adee;">Contact Us</h2>
            <p>We’d love to hear from you! Reach out to us for any inquiries, demos, or support.</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-geo-alt-fill" style="color:#35adee;"></i> Dubai Internet City</li>
                <li class="mb-2"><i class="bi bi-envelope-fill" style="color:#35adee;"></i> info@surecam.com</li>
                <li class="mb-2"><i class="bi bi-telephone-fill" style="color:#35adee;"></i> +971 123 456 789</li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 p-4 rounded-4">
                <h4 class="mb-3 fw-semibold">Send us a Message</h4>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="fw-semibold mb-3" style="color:#35adee;">Find Us on the Map</h4>
            <div class="ratio ratio-16x9 shadow-lg rounded-4">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.850219781391!2d55.16394607523083!3d25.095374777769038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6c99da2bb07f%3A0x7c9f8e9a4e36f6b!2sDubai%20Internet%20City!5e0!3m2!1sen!2sae!4v1713719621441!5m2!1sen!2sae" 
                    width="100%" 
                    height="100%" 
                    style="border:0; border-radius: 20px;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>

@endsection
