<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-description', 'Tuwanx is the complete fashion marketplace — buy, sell, design custom pieces, swap, and give back. Available on the App Store and Google Play.')">
    <title>@yield('title', 'Tuwanx')</title>
    <!-- Add favicon -->
    <link rel="icon" type="image/jpg" href="{{ asset('assets/favicon.jpg') }}">

    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></noscript>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tuwanx-gold': '#D4AF37',
                        'tuwanx-black': '#00171F',
                    },
                    screens: {
                        'xs': '475px',
                    }
                }
            }
        }
    </script>
    <style>
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
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s ease;
            z-index: 50;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
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
    </style>
    @yield('styles')
</head>
<body class="bg-white text-tuwanx-black">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white z-50 shadow-md">
        <div class="container mx-auto px-4 xs:px-6 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <!-- Logo image instead of text -->
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.jpg') }}" alt="Tuwanx Logo" class="h-8 xs:h-10">
                </a>
            </div>
            <div class="hidden md:flex space-x-6 lg:space-x-8">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('home') }}#how-it-works" class="nav-link">How It Works</a>
                <a href="{{ route('home') }}#designers" class="nav-link">Designers</a>
                <a href="{{ route('home') }}#features" class="nav-link">Features</a>
                <a href="{{ route('home') }}#testimonials" class="nav-link">Testimonials</a>
                <a href="{{ route('contact') }}" class="nav-link @yield('active-contact')">Contact</a>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('home') }}#download" class="btn-outline px-4 py-2 rounded-full font-medium">Log In</a>
                <a href="{{ route('home') }}#download" class="btn-gold px-4 py-2 rounded-full font-medium">Sign Up</a>
            </div>
            
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
        <div class="mobile-menu fixed top-0 left-0 w-full h-full bg-white z-40 md:hidden overflow-y-auto" id="mobileMenu">
            <div class="container mx-auto px-6 pt-24 pb-16">
                <div class="flex flex-col space-y-5">
                    <a href="{{ route('home') }}" class="text-2xl font-semibold py-2 border-b border-gray-100">Home</a>
                    <a href="{{ route('about') }}" class="text-2xl font-semibold py-2 border-b border-gray-100">About</a>
                    <a href="{{ route('contact') }}" class="text-2xl font-semibold py-2 border-b border-gray-100">Contact</a>
                    <div class="flex flex-col space-y-4 pt-4">
                        <a href="{{ route('home') }}#download" class="btn-outline px-4 py-3 rounded-full font-medium text-lg text-center">Log In</a>
                        <a href="{{ route('home') }}#download" class="btn-gold px-4 py-3 rounded-full font-medium text-lg text-center">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
                            <a href="https://www.facebook.com/profile.php?id=61583297275195" target="_blank" rel="noopener" aria-label="Tuwanx on Facebook" class="text-gray-700 hover:text-black transition"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/tuwanxinc/" target="_blank" rel="noopener" aria-label="Tuwanx on Instagram" class="text-gray-700 hover:text-black transition"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/tuwanx/" target="_blank" rel="noopener" aria-label="Tuwanx on LinkedIn" class="text-gray-700 hover:text-black transition"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.tiktok.com/@tuwanxinc" target="_blank" rel="noopener" aria-label="Tuwanx on TikTok" class="text-gray-700 hover:text-black transition"><i class="fab fa-tiktok"></i></a>
                            <a href="https://x.com/tuwanxapp" target="_blank" rel="noopener" aria-label="Tuwanx on X" class="text-gray-700 hover:text-black transition"><i class="fab fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-300 mt-8 pt-8 text-center text-gray-700">
                <p>&copy; {{ date('Y') }} Tuwanx, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu functionality
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (hamburger && mobileMenu) {
            hamburger.addEventListener('click', function() {
                this.classList.toggle('open');
                mobileMenu.classList.toggle('open');
                
                // Prevent body scroll when menu is open
                if (mobileMenu.classList.contains('open')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Close mobile menu when clicking on a link
            const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    hamburger.classList.remove('open');
                    mobileMenu.classList.remove('open');
                    document.body.style.overflow = 'auto';
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnHamburger = hamburger.contains(event.target);
                
                if (!isClickInsideMenu && !isClickOnHamburger && mobileMenu.classList.contains('open')) {
                    hamburger.classList.remove('open');
                    mobileMenu.classList.remove('open');
                    document.body.style.overflow = 'auto';
                }
            });
        }
    </script>
    @yield('scripts')
</body>
</html>
