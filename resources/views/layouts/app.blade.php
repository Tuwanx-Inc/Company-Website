<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tuwanx - The Complete Fashion Marketplace')</title>
    <!-- Add favicon -->
    <link rel="icon" type="image/jpg" href="{{ asset('assets/favicon.jpg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        .section {
            min-height: 100vh;
            padding-top: 80px;
            padding-bottom: 80px;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #D4AF37;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .active-nav::after {
            width: 100%;
        }
        
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .voluminous-shadow {
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
        }
        
        .btn-gold {
            background: linear-gradient(135deg, #D4AF37, #b8941f);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }
        
        .btn-gold:hover {
            background: linear-gradient(135deg, #b8941f, #a3821b);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
        }
        
        .btn-outline {
            border: 2px solid #D4AF37;
            color: #D4AF37;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }
        
        .btn-outline:hover {
            background-color: #D4AF37;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }
        
        .feature-icon {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.05));
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .progress-bar {
            height: 4px;
            background-color: #e5e7eb;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        
        .progress {
            height: 100%;
            background: linear-gradient(90deg, #D4AF37, #b8941f);
            width: 0%;
            transition: width 0.3s ease;
        }
        
        .section-indicator {
            position: fixed;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }
        
        .indicator-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: #e5e7eb;
            margin: 15px 0;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .indicator-dot.active {
            background: linear-gradient(135deg, #D4AF37, #b8941f);
            transform: scale(1.4);
            box-shadow: 0 5px 10px rgba(212, 175, 55, 0.3);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s ease;
            z-index: 50;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .hamburger {
            width: 30px;
            height: 20px;
            position: relative;
            cursor: pointer;
            z-index: 60;
        }
        
        .hamburger span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: #000000;
            border-radius: 3px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }
        
        .hamburger span:nth-child(1) {
            top: 0px;
        }
        
        .hamburger span:nth-child(2) {
            top: 8px;
        }
        
        .hamburger span:nth-child(3) {
            top: 16px;
        }
        
        .hamburger.open span {
            background: #000000;
        }
        
        .hamburger.open span:nth-child(1) {
            top: 8px;
            transform: rotate(135deg);
        }
        
        .hamburger.open span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }
        
        .hamburger.open span:nth-child(3) {
            top: 8px;
            transform: rotate(-135deg);
        }
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(255, 255, 255, 0) 50%, rgba(212, 175, 55, 0.05) 100%);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #000000, #000000);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .gold-glow {
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
        }
    </style>
</head>
<body class="bg-white text-tuwanx-black">
    @yield('progress-bar')
    
    <!-- Navigation -->
    <nav class="fixed w-full bg-white z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <!-- Logo image instead of text -->
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="Tuwanx Logo" class="h-10">
                </a>
            </div>
            @yield('navigation')
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu fixed top-0 left-0 w-full h-full bg-white z-40 md:hidden" id="mobileMenu">
            @yield('mobile-menu')
        </div>
    </nav>
    
    @yield('section-indicator')
    
    @yield('content')
    
    <!-- Footer -->
    <footer class="bg-white text-black py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <!-- Footer logo instead of text -->
                    <img src="{{ asset('assets/logo-footer.png') }}" alt="Tuwanx Logo" class="h-10 mb-4">
                    <p class="text-gray-700 max-w-md">The complete fashion marketplace &mdash; buy, sell, design, swap, and donate, all in one app.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Company</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-black transition">About Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Support</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('terms') }}" class="text-gray-700 hover:text-black transition">Terms of Use</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-black transition">Contact Us</a></li>
                            <li><a href="{{ route('privacy') }}" class="text-gray-700 hover:text-black transition">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Connect</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=61583297275195" target="_blank" rel="noopener" class="text-gray-700 hover:text-black transition"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/tuwanxinc/" target="_blank" rel="noopener" class="text-gray-700 hover:text-black transition"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-300 mt-8 pt-8 text-center text-gray-700">
                <p>&copy; {{ date('Y') }} Tuwanx, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
