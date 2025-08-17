<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pVfV9ZR0X3bD9P2JXH+qK9l+Fz2lX+rbB2TZzXdLh8r6H6+/qUv1u2T0mZyWZ9Xv1Y9wQ8kK0yWcYDjF+qR6Hg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Bootstrap Icons (if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <title>The Blu Global</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/home.css', 'resources/js/home.js'])
    @vite(['resources/css/about.css', 'resources/js/about.js'])
    @vite(['resources/css/contact.css', 'resources/js/contact.js'])
    @vite(['resources/css/services.css', 'resources/js/services.js'])
    @vite(['resources/css/products.css', 'resources/js/products.js'])





</head>

<body>
    @include('partials.navbar')

    <main class="container-fluid p-0">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>
