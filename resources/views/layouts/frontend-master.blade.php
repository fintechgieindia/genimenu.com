<!DOCTYPE html>
<html lang="{{ session('customer_locale') ?? str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('customer_is_rtl') ? 'rtl' : 'ltr' }}">

<head>
    @php
        $lastSegment = last(request()->segments());
        $isHash = preg_match('/^[a-f0-9]{32,}$/', $lastSegment);
    @endphp

    <link rel="manifest" href="{{ asset('manifest.json') }}@if($isHash)?hash={{ $lastSegment }}@endif"
        crossorigin="use-credentials">

    {{--
    <link rel="manifest" href="{{ asset('manifest.json')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="{{ global_setting()->name }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/geni-favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/geni-favicon.png') }}">

    @if (File::exists(public_path('user-uploads/favicons/super-admin/apple-touch-icon.png')))
        <link rel="apple-touch-icon" sizes="180x180"
            href="{{ asset('user-uploads/favicons/super-admin/apple-touch-icon.png') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/android-chrome-192x192.png')))
        <link rel="icon" type="image/png" sizes="192x192"
            href="{{ asset('user-uploads/favicons/super-admin/android-chrome-192x192.png') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/android-chrome-512x512.png')))
        <link rel="icon" type="image/png" sizes="512x512"
            href="{{ asset('user-uploads/favicons/super-admin/android-chrome-512x512.png') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/favicon-16x16.png')))
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ asset('user-uploads/favicons/super-admin/favicon-16x16.png') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/favicon-32x32.png')))
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ asset('user-uploads/favicons/super-admin/favicon-32x32.png') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/favicon.ico')))
        <link rel="shortcut icon" href="{{ asset('user-uploads/favicons/super-admin/favicon.ico') }}">
    @endif
    @if (File::exists(public_path('user-uploads/favicons/super-admin/site.webmanifest')))
        <link rel="manifest" href="{{ asset('user-uploads/favicons/super-admin/site.webmanifest') }}">
    @endif
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ global_setting()->logoUrl }}">
    {{-- @if (global_setting()->meta_keyword)
    <meta name="keyword" content="{{ global_setting()->meta_keyword ?? '' }}">
    @endif
    @if (global_setting()->meta_description)
    <meta name="description" content="{{ global_setting()->meta_description ?? '' }}">
    @endif
    <title>{{ global_setting()->name }}</title> --}}


    <link rel="icon" type="image/png" href="{{ asset('assets/images/geni-favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/geni-favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Geist:wght@300;400;500;600;700;800;900&family=Geist+Mono:wght@400;500;600&family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,600;0,700;1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/effra" rel="stylesheet">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $meta['title'] ?? 'Geni Menu | All-in-one Restaurant Billing and Management Software' }}</title>
    <meta name="description"
        content="{{ $meta['description'] ?? 'Best Restaurant Billing Software for smooth operations, fast service, and exceptional dining experiences.' }}">
    <meta name="keywords"
        content="{{ $meta['keywords'] ?? 'restaurant ERP software, restaurant billing software, POS for restaurants, inventory management for restaurants, staff scheduling software, restaurant accounting software, Geni Fast ERP, India restaurant ERP, cloud restaurant software, table reservation system, kitchen display system, multi-branch restaurant ERP, GST billing software, digital menu software, restaurant analytics, restaurant CRM, food delivery integration, mobile POS for restaurants, online ordering system, restaurant operations management' }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="{{ $meta['title'] ?? 'Geni Menu | All-in-one Restaurant Billing and Management Software' }}">
    <meta property="og:description"
        content="{{ $meta['description'] ?? 'Best Restaurant Billing Software for smooth operations, fast service, and exceptional dining experiences.' }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Geni Fast">
    <meta property="og:updated_time" content="2025-01-25T12:00:00+05:30">
    <meta property="og:image" content="{{ asset('landing/geni-restaurant-logo.jpg') }}">
    <meta property="og:image:secure_url" content="{{ asset('landing/geni-restaurant-logo.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta property="og:image:alt" content="Geni Menu Logo">
    <meta property="og:image:type" content="image/jpg">


    <!-- Geo‑location metadata -->
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Tiruchengode, Tamil Nadu">
    <meta name="geo.position" content="11.378476;77.894493">
    <meta name="ICBM" content="11.378476, 77.894493">


    <meta name="twitter:card" content="Geni Menu">
    <meta name="twitter:title"
        content="{{ $meta['title'] ?? 'Geni Menu | All-in-one Restaurant Billing and Management Software' }}">
    <meta name="twitter:description"
        content="{{ $meta['keywords'] ?? 'restaurant ERP software, restaurant billing software, POS for restaurants, inventory management for restaurants, staff scheduling software, restaurant accounting software, Geni Fast ERP, India restaurant ERP, cloud restaurant software, table reservation system, kitchen display system, multi-branch restaurant ERP, GST billing software, digital menu software, restaurant analytics, restaurant CRM, food delivery integration, mobile POS for restaurants, online ordering system, restaurant operations management' }}">
    <meta name="twitter:image" content="{{ asset('landing/geni-restaurant-logo') }}">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RZEH19E1PJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-RZEH19E1PJ');
    </script>


    <style>
        :root {
            --font-sans: 'Geist', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-heading: 'Effra', sans-serif;
            --font-body: 'Geist', 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-accent: 'Playfair Display', Georgia, serif;

            /* Stripe High-Tech Slate-Blue Palette */
            --br: #B45309;
            --br-dark: #92400E;
            --br-light: #FEF3C7;
            --br-gold: #D97706;

            --bg: #F6F9FC;
            --bg2: #FFFFFF;
            --bg3: #EEF2F6;

            --ink: #0A2540;
            --ink-light: #1A365D;
            --mute: #425466;
            --mute-light: #627D98;

            --line: #E3E8EE;
            --line-solid: #E3E8EE;
        }

        body {
            font-family: var(--font-body);
            color: var(--ink);
            background-color: var(--bg);
            -webkit-font-smoothing: subpixel-antialiased;
            -moz-osx-font-smoothing: auto;
            text-rendering: optimizeLegibility;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            color: var(--ink);
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        p {
            font-family: var(--font-body);
            color: var(--mute);
            line-height: 1.65;
        }

        /* Footer styles */
        .footer {
            background-color: #FAF2E8 !important;
            padding: 38px 20px 18px;
            border-top: 1px solid rgba(197, 139, 80, 0.28) !important;
            font-family: 'Glacial Indifference', -apple-system, BlinkMacSystemFont, sans-serif !important;
        }

        @media (min-width: 768px) {
            .footer-container {
                display: flex;
                flex-wrap: wrap;
                max-width: 1240px;
                margin: auto;
                gap: 24px;
                padding-bottom: 22px;
            }
        }

        /* Column widths for desktop */
        .footer-column.col-5 {
            flex: 0 0 33.33%;
        }

        .footer-column.col-2 {
            flex: 0 0 13%;
        }

        .footer-column.col-3 {
            flex: 0 0 16.66%;
        }

        .footer-column.col-4 {
            flex: 0 0 29%;
        }

        /* Logo styling */
        .footer-logo img {
            height: 40px;
            width: auto;
            object-fit: contain;
            margin-bottom: 12px;
        }

        /* Headings: Cinzel Regular, Uppercase */
        .footer h5 {
            font-family: 'Cinzel', serif !important;
            color: #32180F !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.06em !important;
            margin-bottom: 12px;
            font-size: 15px !important;
        }

        /* Body Text: Glacial Indifference Regular */
        .footer p {
            font-family: 'Glacial Indifference', sans-serif !important;
            color: #5A4234 !important;
            font-size: 13.5px !important;
            font-weight: 400 !important;
            line-height: 1.55;
            margin-bottom: 8px;
        }

        /* Links: Glacial Indifference Regular */
        .footer a {
            font-family: 'Glacial Indifference', sans-serif !important;
            text-decoration: none;
            color: #5A4234 !important;
            font-weight: 400 !important;
            display: block;
            margin-bottom: 7px;
            transition: all 0.22s ease;
            font-size: 13.5px !important;
            line-height: 1.35;
        }

        .footer a:hover {
            color: #C58B50 !important;
            transform: translateX(3px);
        }

        .footer a.active {
            color: #32180F !important;
            font-weight: 700 !important;
        }

        /* Social icons */
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: #FFFDF9;
            border: 1.5px solid rgba(197, 139, 80, 0.45);
            border-radius: 50%;
            color: #32180F !important;
            font-size: 15px;
            transition: all 0.25s ease;
            margin-bottom: 0;
        }

        .social-icons a:hover,
        .social-icons a:active {
            background-color: #32180F;
            border-color: #32180F;
            color: #F2C58D !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 14px rgba(50, 24, 15, 0.18);
        }
        
        .footer-bottom {
            max-width: 1240px;
            margin: 0 auto;
            padding-top: 16px;
            border-top: 1px solid rgba(197, 139, 80, 0.25);
            text-align: center;
            font-family: 'Glacial Indifference', sans-serif !important;
        }
        .footer-bottom span {
            color: #6E6157 !important;
            font-size: 13px !important;
            font-family: 'Glacial Indifference', sans-serif !important;
        }
        .footer-bottom a {
            display: inline;
            color: #32180F !important;
            font-weight: 700 !important;
            transform: none !important;
        }
        .footer-bottom a:hover {
            color: #C58B50 !important;
            text-decoration: underline;
        }

        /* Responsive layout */
        @media (max-width: 768px) {
            .footer-container {
                display: flex;
                flex-direction: column;
                gap: 30px;
            }
            .footer-column.col-4,
            .footer-column.col-2,
            .footer-column.col-3,
            .footer-column.col-5 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        .nav-link {
            color: #555;
            /* Default text color */
            text-decoration: none;
            font-weight: normal;
        }

        .nav-link.active {
            color: #876039;
            /* Your theme color */
            font-weight: bold;
        }

        .fnav-link {
            color: #555;
            /* Default text color */
            text-decoration: none;
            font-weight: normal;
        }

        .fnav-link.active {
            color: #876039;
            /* Your theme color */

        }

        /* Complete elimination of Google Translate top banner & body offset */
        body > .skiptranslate,
        body > iframe.skiptranslate,
        iframe.skiptranslate,
        .goog-te-banner-frame,
        .goog-te-banner-frame.skiptranslate,
        iframe.goog-te-banner-frame,
        .goog-te-balloon-frame,
        .goog-te-banner,
        body > iframe[id*=":"] {
            display: none !important;
            visibility: hidden !important;
            height: 0px !important;
            width: 0px !important;
            opacity: 0 !important;
            pointer-events: none !important;
            border: none !important;
            position: absolute !important;
            top: -9999px !important;
            left: -9999px !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        html {
            top: 0px !important;
            position: static !important;
            overflow-x: clip !important;
            overflow-y: auto !important;
        }

        body {
            top: 0px !important;
            position: static !important;
            overflow-x: clip !important;
        }

        #main-content, main {
            overflow: visible !important;
        }

        #goog-gt-tt, 
        .goog-tooltip, 
        .goog-tooltip:hover {
            display: none !important;
        }

        .goog-text-highlight {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        #google_translate_element {
            position: absolute !important;
            top: -9999px !important;
            left: -9999px !important;
            width: 1px !important;
            height: 1px !important;
            opacity: 0 !important;
            pointer-events: none !important;
            overflow: hidden !important;
        }
    </style>

    @include('sections.theme_style', ['baseColor' => global_setting()->theme_rgb, 'baseColorHex' => global_setting()->theme_hex])

</head>

<body class="font-sans antialiased :bg-gray-900 {{ request()->routeIs('home', 'about.us', 'contact.us', 'contact') ? 'has-hero-nav' : '' }}">

    <div class="">
        @include('layouts.partials.zoho-navbar')

        <div class="flex mx-auto :bg-gray-900" style="overflow: visible;">
            <div id="main-content" class="w-full h-full :bg-gray-900 main-container" style="overflow: visible;">
                <main>

                    @yield('content')

                    {{ $slot ?? '' }}
                </main>
            </div>
        </div>

    </div>

    @stack('modals')

    <footer class="footer">
        <div class="footer-container">

            <!-- Logo & Description -->
            <div class="footer-column col-5">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/geni-menu-logo-light.png') }}" alt="Geni Menu Logo" style="height: 40px; width: auto; object-fit: contain;">
                </div>
                <p style="text-align: justify; padding-right: 30px;">
                    Powering smarter operations through connected digital solutions for menus, orders, billing and business management.
                </p>
            </div>

            <!-- Useful Links -->
            <div class="footer-column col-2">
                <h5>Useful Links</h5>
                <a href="{{ route('home') }}" class="fnav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.us') }}"
                    class=" fnav-link {{ request()->routeIs('about.us') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('features') }}"
                    class="fnav-link {{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
                <a href="{{ route('solutions') }}"
                    class="fnav-link {{ request()->routeIs('solutions*') ? 'active' : '' }}">Solutions</a>
                <a href="{{ route('pricing') }}"
                    class="fnav-link {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
                <a href="{{ route('contact.us') }}"
                    class="fnav-link {{ request()->routeIs('contact.us') ? 'active' : '' }}">Contact Us</a>
            </div>

            <!-- Policies -->
            <div class="footer-column col-3">
                <h5>Policies</h5>
                <a href="{{ route('privacy-and-policy') }}"
                    class="fnav-link {{ request()->routeIs('privacy-and-policy') ? 'active' : '' }}">Privacy Policy</a>
                <a href="{{ route('terms-and-conditions') }}"
                    class="fnav-link {{ request()->routeIs('terms-and-conditions') ? 'active' : '' }}">Terms &
                    Conditions</a>
                <a href="{{ route('compliance') }}"
                    class="fnav-link {{ request()->routeIs('compliance') ? 'active' : '' }}">Compliances</a>
                <a href="{{ route('terms-of-use') }}"
                    class="fnav-link {{ request()->routeIs('terms-of-use') ? 'active' : '' }}">Terms of Use</a>
                <a href="{{ route('cancellation-and-refund-policy') }}"
                    class="fnav-link {{ request()->routeIs('cancellation-and-refund-policy') ? 'active' : '' }}">Cancelling
                    & Refund Policy</a>
            </div>

            <!-- Follow Us -->
            <div class="footer-column col-4">
                <h5>Follow Us</h5>
                <p>Stay connected with WeGeni and get the latest updates on our services,
                    industry trends, and exciting new projects.</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/company/wegeniofficial" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.facebook.com/wegeniofficial" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/wegeniofficial" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://x.com/wegeniofficial" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://wegeni.com/" aria-label="Website"><i class="bi bi-globe"></i></a>
                </div>
            </div>

        </div>
        <div class="footer-bottom">
            <span>© {{ now()->year }} <a href="{{ route('home') }}">{{ global_setting()->name }}</a>. @lang('landing.rightsReserved')</span>
        </div>
    </footer>
    @livewireScripts
    @include('layouts.update-uri')
    <x-livewire-alert::flash />
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('{{ asset('service-worker.js') }}')
                    .then(registration => {
                        console.log('Service Worker registered:', registration);
                    })
                    .catch(error => {
                        console.log('Service Worker registration failed:', error);
                    });
            });
        }
    </script>
    <script>

        window.addEventListener('beforeinstallprompt', (event) => {
            event.preventDefault();
            deferredPrompt = event;
            setTimeout(() => {
                const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
                if (isMobile) {
                    deferredPrompt.prompt(); // This triggers the install prompt
                    deferredPrompt.userChoice.then((choiceResult) => {
                        if (choiceResult.outcome === 'accepted') {
                            console.log('User accepted the A2HS prompt');
                        } else {
                            console.log('User dismissed the A2HS prompt');
                        }
                        deferredPrompt = null;
                    });
                }
            }, 1000);
        });

    </script>


    <!-- Floating Book Demo Button -->
    <button id="floatingDemoBtn" class="floating-demo-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        <span>Book a Demo</span>
    </button>

    @php
        $popupCountriesList = \App\Models\Country::orderBy('countries_name')->get();
        $popupPriorityCodes = ['IN', 'AE', 'US', 'GB', 'SG', 'MY', 'SA', 'QA', 'CA', 'AU'];
        $popupPriorityCountries = $popupCountriesList->whereIn('countries_code', $popupPriorityCodes)->sortBy(function($c) use ($popupPriorityCodes) {
            return array_search($c->countries_code, $popupPriorityCodes);
        });
        $popupDefaultCountry = 'India';
        $popupDefaultPhoneCode = '+91';
    @endphp

    <!-- Popup Lead Modal -->
    <div id="popupLeadModal" class="popup-modal-overlay">
        <div class="popup-modal-content popup-with-image">
            <button class="popup-close-btn" id="closePopupModal" aria-label="Close modal">&times;</button>
            
            {{-- Left Side --}}
            <div class="popup-left-side">
                <div class="popup-left-bg"></div>
                <div class="popup-left-overlay"></div>
                <div class="popup-left-content">
                    <div class="popup-left-top">
                        <span class="popup-connect-badge">LET'S CONNECT</span>
                        <h3 class="popup-connect-title">Experience Smarter Business Management.</h3>
                        <p class="popup-connect-desc">
                            Discover how Geni Menu brings your essential business operations together through one intelligent digital platform.
                        </p>
                    </div>

                    <div class="popup-contact-info">
                        <a href="tel:+918667205661" class="popup-contact-item">
                            <span class="popup-contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </span>
                            <span class="popup-contact-text">+91 86672 05661</span>
                        </a>

                        <a href="mailto:genimenuglobal@gmail.com" class="popup-contact-item">
                            <span class="popup-contact-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </span>
                            <span class="popup-contact-text">genimenuglobal@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Right Side --}}
            <div class="popup-right-side">
                <div class="popup-header">
                    <h3>Request a Personalised Demo</h3>
                    <p>Share your details and our team will connect with you.</p>
                </div>

                <div id="popupAlert" class="popup-alert" style="display: none;"></div>

                <form action="{{ route('popup.lead.store') }}" method="POST" class="popup-form" id="popupLeadForm" novalidate>
                    @csrf
                    <div class="form-group" id="group_popup_full_name">
                        <label for="popup_full_name">Full Name *</label>
                        <input type="text" id="popup_full_name" name="full_name" placeholder="Enter your full name" autocomplete="name">
                        <span class="popup-error-msg" id="err_popup_full_name"></span>
                    </div>
                    <div class="form-group" id="group_popup_business_name">
                        <label for="popup_business_name">Business Name *</label>
                        <input type="text" id="popup_business_name" name="business_name" placeholder="Enter business name" autocomplete="organization">
                        <span class="popup-error-msg" id="err_popup_business_name"></span>
                    </div>
                    <div class="form-group" id="group_popup_email">
                        <label for="popup_email">Business Email *</label>
                        <input type="email" id="popup_email" name="email" placeholder="Enter business email" autocomplete="email">
                        <span class="popup-error-msg" id="err_popup_email"></span>
                    </div>
                    <div class="form-group" id="group_popup_country">
                        <label for="popup_country">Country *</label>
                        <select name="country" id="popup_country" class="popup-select">
                            <option value="">Select your country</option>
                            <optgroup label="Popular Countries">
                                @foreach ($popupPriorityCountries as $c)
                                    <option value="{{ $c->countries_name }}" data-phonecode="+{{ $c->phonecode }}" {{ ($popupDefaultCountry == $c->countries_name) ? 'selected' : '' }}>
                                        {{ $c->countries_name }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="All Countries">
                                @foreach ($popupCountriesList as $c)
                                    @if (!in_array($c->countries_code, $popupPriorityCodes))
                                        <option value="{{ $c->countries_name }}" data-phonecode="+{{ $c->phonecode }}" {{ ($popupDefaultCountry == $c->countries_name) ? 'selected' : '' }}>
                                            {{ $c->countries_name }}
                                        </option>
                                    @endif
                                @endforeach
                            </optgroup>
                        </select>
                        <span class="popup-error-msg" id="err_popup_country"></span>
                    </div>
                    <div class="form-group" id="group_popup_phone">
                        <label for="popup_phone_number">Phone Number with country code *</label>
                        <div class="popup-phone-group">
                            <select name="phone_code" id="popup_phone_code" class="popup-phone-code-select" aria-label="Country Code">
                                <optgroup label="Popular">
                                    @foreach ($popupPriorityCountries as $c)
                                        <option value="+{{ $c->phonecode }}" {{ ($popupDefaultPhoneCode == '+'.$c->phonecode && $c->countries_code == 'IN') ? 'selected' : '' }}>
                                            +{{ $c->phonecode }} ({{ $c->countries_code }})
                                        </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="All Countries">
                                    @foreach ($popupCountriesList as $c)
                                        @if (!in_array($c->countries_code, $popupPriorityCodes))
                                            <option value="+{{ $c->phonecode }}">
                                                +{{ $c->phonecode }} ({{ $c->countries_code }})
                                            </option>
                                        @endif
                                    @endforeach
                                </optgroup>
                            </select>
                            <input type="tel" id="popup_phone_number" name="phone_number" placeholder="86672 05661" autocomplete="tel-national">
                            <input type="hidden" id="popup_phone" name="phone">
                        </div>
                        <span class="popup-error-msg" id="err_popup_phone"></span>
                    </div>
                    <button type="submit" class="submit-btn" id="popupSubmitBtn">
                        <span id="popupBtnText">Request a Demo &rarr;</span>
                        <span id="popupBtnSpinner" style="display:none; align-items:center; justify-content:center; gap:6px;">
                            <svg class="popup-spinner" viewBox="0 0 50 50" style="width:15px;height:15px;animation:popupSpin 1s linear infinite;">
                                <circle cx="25" cy="25" r="20" fill="none" stroke="#ffffff" stroke-width="5" stroke-linecap="round" stroke-dasharray="31.4 31.4"></circle>
                            </svg>
                            <span>Submitting...</span>
                        </span>
                    </button>
                    <p class="popup-privacy-note">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:12px;height:12px;flex-shrink:0;">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>Your information is kept secure and used only to respond to your request.</span>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Floating Button */
        .floating-demo-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #876039;
            color: #fff;
            border: none;
            padding: 14px 24px;
            border-radius: 50px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 15px rgba(135, 96, 57, 0.4);
            cursor: pointer;
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }
        .floating-demo-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(135, 96, 57, 0.5);
            background-color: #72502f;
        }

        @media (max-width: 640px) {
            .floating-demo-btn {
                bottom: 16px;
                right: 16px;
                padding: 10px 16px;
                font-size: 13px;
                border-radius: 40px;
                box-shadow: 0 3px 12px rgba(135, 96, 57, 0.35);
                gap: 6px;
            }
            .floating-demo-btn svg {
                width: 16px;
                height: 16px;
            }
        }

        /* Modal Overlay */
        .popup-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            backdrop-filter: blur(4px);
        }
        .popup-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Modal Content */
        .popup-modal-content {
            background: #fff;
            width: 100%;
            max-width: 400px;
            border-radius: 14px;
            position: relative;
            transform: scale(0.95);
            transition: transform 0.3s ease;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            font-family: 'Glacial Indifference', sans-serif;
            overflow: hidden;
        }
        .popup-modal-content.popup-with-image {
            max-width: 740px;
            width: 94%;
            display: flex;
            padding: 0;
            border-radius: 14px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.28);
        }
        .popup-left-side {
            display: flex;
            flex: 0 0 42%;
            position: relative;
            min-height: 460px;
            overflow: hidden;
            padding: 26px 22px;
            box-sizing: border-box;
            color: #fff;
        }
        .popup-left-bg {
            position: absolute;
            inset: 0;
            background-image: url('{{ asset('assets/images/home/popup.png') }}');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }
        .popup-left-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(28, 18, 12, 0.80) 0%, rgba(28, 18, 12, 0.93) 100%);
            z-index: 2;
        }
        .popup-left-content {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
            height: 100%;
            width: 100%;
            font-family: 'Glacial Indifference', sans-serif;
        }
        .popup-connect-badge {
            display: inline-block;
            font-family: 'Cinzel', serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: #E5B26E;
            text-transform: uppercase;
            margin-bottom: 8px;
        }
        .popup-connect-title {
            font-family: 'Cinzel', serif;
            font-size: 16.5px;
            font-weight: 700;
            line-height: 1.35;
            color: #FFFFFF;
            margin: 0 0 10px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .popup-connect-desc {
            font-family: 'Glacial Indifference', sans-serif;
            font-size: 12.5px;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.85);
            margin: 0;
        }
        .popup-contact-info {
            display: flex;
            flex-direction: column;
            gap: 9px;
            margin-top: 0;
            padding-top: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.16);
        }
        .popup-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #FFFFFF;
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 600;
            font-family: 'Glacial Indifference', sans-serif;
            transition: color 0.2s, transform 0.2s;
        }
        .popup-contact-item:hover {
            color: #E5B26E;
            transform: translateX(2px);
        }
        .popup-contact-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .popup-contact-icon svg {
            width: 14px;
            height: 14px;
            stroke: #FFFFFF;
        }
        .popup-right-side {
            padding: 22px 24px;
            flex: 1;
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
        }
        
        .popup-modal-overlay.active .popup-modal-content {
            transform: scale(1);
        }

        @media (max-width: 767px) {
            .popup-modal-content.popup-with-image {
                flex-direction: column;
                width: calc(100% - 24px);
                margin: 12px;
                max-height: 92vh;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
            }
            .popup-left-side {
                min-height: 160px;
                padding: 20px 16px;
            }
            .popup-right-side {
                padding: 18px 16px;
            }
            .popup-header h3 {
                font-size: 15px;
            }
            .popup-form input, .popup-form select {
                padding: 6px 10px;
                font-size: 12px;
            }
            .popup-form .submit-btn {
                padding: 8px 12px;
                font-size: 12px;
            }
        }

        /* Close Button */
        .popup-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0,0,0,0.06);
            border: none;
            font-size: 18px;
            color: #555;
            cursor: pointer;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, color 0.2s;
            z-index: 10;
            line-height: 1;
        }
        .popup-close-btn:hover {
            color: #111;
            background: rgba(0,0,0,0.12);
        }

        /* Header */
        .popup-header {
            margin-bottom: 12px;
            text-align: left;
        }
        .popup-header h3 {
            font-family: 'Cinzel', serif;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 16.5px;
            font-weight: 700;
            color: #21160F;
            margin: 0 0 3px;
        }
        .popup-header p {
            font-size: 11.5px;
            color: #6E6157;
            margin: 0;
            line-height: 1.35;
            font-family: 'Glacial Indifference', sans-serif;
        }

        /* Form */
        .popup-form .form-group {
            margin-bottom: 7px;
        }
        .popup-form label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 2px;
            font-family: 'Glacial Indifference', sans-serif;
        }
        .popup-form input, .popup-form select {
            width: 100%;
            height: 32px;
            padding: 5px 10px;
            border: 1px solid #D8CFC5;
            border-radius: 6px;
            font-size: 12px;
            transition: border-color 0.2s, box-shadow 0.2s;
            font-family: 'Glacial Indifference', sans-serif;
            background: #FAF7F2;
            box-sizing: border-box;
            color: #21160F;
        }
        .popup-form input:focus, .popup-form select:focus {
            outline: none;
            border-color: #876039;
            box-shadow: 0 0 0 3px rgba(135, 96, 57, 0.12);
            background: #fff;
        }
        
        .popup-phone-group {
            display: flex;
            gap: 6px;
            align-items: center;
            width: 100%;
        }
        .popup-phone-code-select {
            width: 115px !important;
            flex-shrink: 0;
            height: 32px;
            padding: 4px 6px;
            font-size: 11px;
            border: 1px solid #D8CFC5;
            border-radius: 6px;
            background: #FAF7F2;
            cursor: pointer;
        }
        .popup-phone-group input[type="tel"] {
            flex: 1;
            height: 32px;
        }

        /* Submit Button */
        .popup-form .submit-btn {
            width: 100%;
            height: 36px;
            padding: 8px 12px;
            background: #876039;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 12.5px;
            font-weight: 700;
            font-family: 'Cinzel', serif;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s, transform 0.1s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }
        .popup-form .submit-btn:hover {
            background: #6f4e2d;
        }
        .popup-form .submit-btn:active {
            transform: scale(0.98);
        }

        .popup-privacy-note {
            font-size: 10.5px;
            color: #786C63;
            text-align: center;
            margin: 8px 0 0 0;
            line-height: 1.3;
            font-family: 'Glacial Indifference', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        /* Validation & Feedback */
        .popup-error-msg {
            display: none;
            font-size: 10.5px;
            color: #DC2626;
            margin-top: 2px;
            font-weight: 500;
            font-family: 'Glacial Indifference', sans-serif;
            line-height: 1.2;
        }
        .popup-form .form-group.has-error input,
        .popup-form .form-group.has-error select {
            border-color: #EF4444 !important;
            background-color: #FFFBFB !important;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.15) !important;
        }
        .popup-form .form-group.has-error .popup-error-msg {
            display: block;
        }
        .popup-alert {
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 11.5px;
            font-weight: 600;
            margin-bottom: 8px;
            font-family: 'Glacial Indifference', sans-serif;
            line-height: 1.4;
        }
        .popup-alert.success {
            background-color: #ECFDF5;
            border: 1px solid #A7F3D0;
            color: #065F46;
        }
        .popup-alert.error {
            background-color: #FEF2F2;
            border: 1px solid #FECACA;
            color: #991B1B;
        }
        @keyframes popupSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <script>
        function openPopup(title) {
            const modal = document.getElementById("popupLeadModal") || document.getElementById("leadPopup");
            if (modal) {
                modal.classList.add("active");
                if (modal.id === "leadPopup") {
                    modal.style.display = "flex";
                }
                if (title && typeof title === 'string') {
                    const desc = modal.querySelector(".popup-header p, .ft-popup-card p");
                    if (desc) {
                        desc.textContent = "Interested in " + title + "? Fill out your details and our team will get in touch shortly.";
                    }
                }
            }
        }
        function closePopup() {
            const modal = document.getElementById("popupLeadModal") || document.getElementById("leadPopup");
            if (modal) {
                modal.classList.remove("active");
                if (modal.id === "leadPopup") {
                    modal.style.display = "none";
                }
            }
        }
        window.openPopup = openPopup;
        window.closePopup = closePopup;

        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("popupLeadModal");
            const btn = document.getElementById("floatingDemoBtn");
            const closeBtn = document.getElementById("closePopupModal");
            const popupForm = document.getElementById("popupLeadForm");
            const popupAlert = document.getElementById("popupAlert");
            const submitBtn = document.getElementById("popupSubmitBtn");
            const btnText = document.getElementById("popupBtnText");
            const btnSpinner = document.getElementById("popupBtnSpinner");

            // Auto show on load (once per session)
            if(modal && !sessionStorage.getItem('geniPopupShown')) {
                setTimeout(() => {
                    modal.classList.add("active");
                    sessionStorage.setItem('geniPopupShown', 'true');
                }, 1500); // 1.5 second delay
            }

            // Open modal on button click
            if(btn) {
                btn.addEventListener("click", () => {
                    openPopup();
                });
            }

            // Close modal on close button click
            if(closeBtn) {
                closeBtn.addEventListener("click", () => {
                    closePopup();
                });
            }

            // Close modal on outside click
            if(modal) {
                window.addEventListener("click", (e) => {
                    if(e.target === modal) {
                        closePopup();
                    }
                });
            }

            // Auto match country code on country select
            const countrySelect = document.getElementById("popup_country");
            const phoneCodeSelect = document.getElementById("popup_phone_code");
            if (countrySelect && phoneCodeSelect) {
                countrySelect.addEventListener("change", function() {
                    const opt = this.options[this.selectedIndex];
                    const code = opt ? opt.getAttribute("data-phonecode") : null;
                    if (code) {
                        for (let i = 0; i < phoneCodeSelect.options.length; i++) {
                            if (phoneCodeSelect.options[i].value === code) {
                                phoneCodeSelect.selectedIndex = i;
                                break;
                            }
                        }
                    }
                });
            }

            // Helper to set field error
            function setFieldError(fieldId, errorMsg) {
                const group = document.getElementById('group_' + fieldId);
                const errSpan = document.getElementById('err_' + fieldId);
                if (group) group.classList.add('has-error');
                if (errSpan) errSpan.textContent = errorMsg;
            }

            // Helper to clear field error
            function clearFieldError(fieldId) {
                const group = document.getElementById('group_' + fieldId);
                const errSpan = document.getElementById('err_' + fieldId);
                if (group) group.classList.remove('has-error');
                if (errSpan) errSpan.textContent = '';
            }

            // Clear on input
            const inputFields = [
                { id: 'popup_full_name', errKey: 'popup_full_name' },
                { id: 'popup_business_name', errKey: 'popup_business_name' },
                { id: 'popup_email', errKey: 'popup_email' },
                { id: 'popup_country', errKey: 'popup_country' },
                { id: 'popup_phone_number', errKey: 'popup_phone' },
            ];

            inputFields.forEach(item => {
                const el = document.getElementById(item.id);
                if (el) {
                    el.addEventListener('input', () => clearFieldError(item.errKey));
                    el.addEventListener('change', () => clearFieldError(item.errKey));
                }
            });

            // Validation function
            function validatePopupForm() {
                let isValid = true;
                let firstInvalidEl = null;

                // 1. Full Name
                const fullName = document.getElementById('popup_full_name');
                if (!fullName || !fullName.value.trim() || fullName.value.trim().length < 2) {
                    setFieldError('popup_full_name', 'Please enter your full name (at least 2 characters).');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = fullName;
                } else {
                    clearFieldError('popup_full_name');
                }

                // 2. Business Name
                const businessName = document.getElementById('popup_business_name');
                if (!businessName || !businessName.value.trim() || businessName.value.trim().length < 2) {
                    setFieldError('popup_business_name', 'Please enter your business or restaurant name.');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = businessName;
                } else {
                    clearFieldError('popup_business_name');
                }

                // 3. Email
                const email = document.getElementById('popup_email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !email.value.trim()) {
                    setFieldError('popup_email', 'Please enter your business email.');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = email;
                } else if (!emailRegex.test(email.value.trim())) {
                    setFieldError('popup_email', 'Please enter a valid email address.');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = email;
                } else {
                    clearFieldError('popup_email');
                }

                // 4. Country
                const country = document.getElementById('popup_country');
                if (!country || !country.value.trim()) {
                    setFieldError('popup_country', 'Please select your country.');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = country;
                } else {
                    clearFieldError('popup_country');
                }

                // 5. Phone Number
                const phoneNum = document.getElementById('popup_phone_number');
                const phoneDigits = phoneNum ? phoneNum.value.replace(/[^0-9]/g, '') : '';
                if (!phoneNum || !phoneNum.value.trim()) {
                    setFieldError('popup_phone', 'Please enter your phone number.');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = phoneNum;
                } else if (phoneDigits.length < 6 || phoneDigits.length > 15) {
                    setFieldError('popup_phone', 'Please enter a valid phone number (6-15 digits).');
                    isValid = false;
                    if (!firstInvalidEl) firstInvalidEl = phoneNum;
                } else {
                    clearFieldError('popup_phone');
                }

                if (firstInvalidEl) {
                    firstInvalidEl.focus();
                }

                return isValid;
            }

            // Handle AJAX Submit with Validation
            if (popupForm) {
                popupForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    if (popupAlert) {
                        popupAlert.style.display = 'none';
                        popupAlert.className = 'popup-alert';
                        popupAlert.textContent = '';
                    }

                    if (!validatePopupForm()) {
                        return;
                    }

                    // Sync full phone into hidden input
                    const code = document.getElementById('popup_phone_code');
                    const num = document.getElementById('popup_phone_number');
                    const hiddenPhone = document.getElementById('popup_phone');
                    if (code && num && hiddenPhone) {
                        hiddenPhone.value = (code.value ? code.value + ' ' : '') + num.value.trim();
                    }

                    // Set loading state
                    if (submitBtn) submitBtn.disabled = true;
                    if (btnText) btnText.style.display = 'none';
                    if (btnSpinner) btnSpinner.style.display = 'inline-flex';

                    const formData = new FormData(popupForm);

                    fetch(popupForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(async (response) => {
                        const data = await response.json().catch(() => ({}));
                        if (!response.ok) {
                            if (response.status === 422 && data.errors) {
                                // Field validation errors from backend
                                if (data.errors.full_name) setFieldError('popup_full_name', data.errors.full_name[0]);
                                if (data.errors.business_name) setFieldError('popup_business_name', data.errors.business_name[0]);
                                if (data.errors.email) setFieldError('popup_email', data.errors.email[0]);
                                if (data.errors.country) setFieldError('popup_country', data.errors.country[0]);
                                if (data.errors.phone || data.errors.phone_number) setFieldError('popup_phone', (data.errors.phone || data.errors.phone_number)[0]);

                                throw new Error('Please correct the highlighted fields.');
                            }
                            throw new Error(data.message || 'Something went wrong. Please try again.');
                        }
                        return data;
                    })
                    .then((data) => {
                        if (popupAlert) {
                            popupAlert.className = 'popup-alert success';
                            popupAlert.textContent = data.message || 'Thank you! Your demo request has been received. Our team will contact you shortly.';
                            popupAlert.style.display = 'block';
                        }
                        popupForm.reset();
                        // Re-select defaults
                        if (countrySelect) countrySelect.value = '{{ $popupDefaultCountry }}';
                        if (phoneCodeSelect) phoneCodeSelect.value = '{{ $popupDefaultPhoneCode }}';

                        // Auto-close after 3 seconds
                        setTimeout(() => {
                            closePopup();
                            if (popupAlert) popupAlert.style.display = 'none';
                        }, 3000);
                    })
                    .catch((err) => {
                        if (popupAlert) {
                            popupAlert.className = 'popup-alert error';
                            popupAlert.textContent = err.message || 'Submission failed. Please check your details and try again.';
                            popupAlert.style.display = 'block';
                        }
                    })
                    .finally(() => {
                        if (submitBtn) submitBtn.disabled = false;
                        if (btnText) btnText.style.display = 'inline';
                        if (btnSpinner) btnSpinner.style.display = 'none';
                    });
                });
            }

            // Success alert if session has success message
            @if(session('success'))
                alert("{{ session('success') }}");
            @endif
        });
    </script>

    <!-- Google Translate Script & Element for Dynamic Frontend Translation -->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,es,fr,de,ar,pt,ru,zh-CN,ja,ko,it,nl,tr,id,vi,th,pl,ta,hi,ml,te,kn',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Continuous Google Translate Banner Suppressor -->
    <script type="text/javascript">
        (function() {
            function killGoogleBanner() {
                if (document.body && document.body.style && document.body.style.top && document.body.style.top !== '0px') {
                    document.body.style.setProperty('top', '0px', 'important');
                }
                var banners = document.querySelectorAll('body > .skiptranslate, iframe.skiptranslate, .goog-te-banner-frame, body > iframe[id*=":"]');
                for (var i = 0; i < banners.length; i++) {
                    banners[i].style.setProperty('display', 'none', 'important');
                    banners[i].style.setProperty('visibility', 'hidden', 'important');
                    banners[i].style.setProperty('height', '0px', 'important');
                }
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', killGoogleBanner);
            } else {
                killGoogleBanner();
            }
            try {
                var observer = new MutationObserver(killGoogleBanner);
                observer.observe(document.documentElement, { childList: true, subtree: true, attributes: true, attributeFilter: ['style', 'class'] });
            } catch(e) {}
            var timer = setInterval(killGoogleBanner, 100);
            setTimeout(function() { clearInterval(timer); }, 15000);
        })();
    </script>

    @stack('scripts')
</body>

</html>