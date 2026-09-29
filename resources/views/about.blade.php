@extends('layouts.page')

@section('title', 'About Us - Tuwanx')

@section('styles')
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
        box-shadow: 0 4px 12px rgba(212, 175, 55, 0.25);
    }
    
    .btn-gold:hover {
        background: linear-gradient(135deg, #b8941f, #a3821b);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.35);
    }
    
    .btn-outline {
        border: 2px solid #D4AF37;
        color: #D4AF37;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
    }
    
    .btn-outline:hover {
        background-color: #D4AF37;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.25);
    }
    
    .feature-icon {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.05));
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }
    
    @media (min-width: 768px) {
        .feature-icon {
            width: 70px;
            height: 70px;
        }
    }
    
    @media (min-width: 1024px) {
        .feature-icon {
            width: 80px;
            height: 80px;
        }
    }
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-12px);
        }
        100% {
            transform: translateY(0px);
        }
    }
    
    .gradient-bg {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.08) 0%, rgba(255, 255, 255, 0) 50%, rgba(212, 175, 55, 0.04) 100%);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, #D4AF37, #b8941f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .gold-glow {
        box-shadow: 0 0 15px rgba(212, 175, 55, 0.25);
    }
    
    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.4s ease;
    }
    
    .mobile-menu.open {
        transform: translateX(0);
    }
    
    .hamburger {
        width: 26px;
        height: 18px;
        position: relative;
        cursor: pointer;
        z-index: 60;
    }
    
    .hamburger span {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: #00171F;
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
    
    .hamburger.open span:nth-child(1) {
        top: 8px;
        transform: rotate(135deg);
        background: #00171F;
    }
    
    .hamburger.open span:nth-child(2) {
        opacity: 0;
        left: -30px;
    }
    
    .hamburger.open span:nth-child(3) {
        top: 8px;
        transform: rotate(-135deg);
        background: #00171F;
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
    
    /* Responsive adjustments */
    @media (max-width: 475px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .btn-responsive {
            width: 100%;
            margin-bottom: 0.75rem;
        }
        
        .btn-group-responsive {
            flex-direction: column;
        }
    }
    
    @media (max-width: 640px) {
        .section-padding {
            padding-top: 5rem;
            padding-bottom: 3rem;
        }
        
        .hero-padding {
            padding-top: 7rem;
            padding-bottom: 3rem;
        }
        
        .text-responsive {
            font-size: 1.75rem;
            line-height: 2.25rem;
        }
        
        .text-lg-responsive {
            font-size: 1.125rem;
        }
    }
    
    @media (min-width: 641px) and (max-width: 1023px) {
        .section-padding {
            padding-top: 6rem;
            padding-bottom: 4rem;
        }
        
        .hero-padding {
            padding-top: 8rem;
            padding-bottom: 4rem;
        }
        
        .text-responsive {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }
    }
    
    @media (min-width: 1024px) {
        .section-padding {
            padding-top: 7rem;
            padding-bottom: 5rem;
        }
        
        .hero-padding {
            padding-top: 9rem;
            padding-bottom: 5rem;
        }
        
        .text-responsive {
            font-size: 3rem;
            line-height: 1;
        }
    }
    
    .team-member {
        transition: transform 0.3s ease;
    }
    
    .team-member:hover {
        transform: translateY(-5px);
    }
    
    .timeline-item {
        position: relative;
        padding-left: 2rem;
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #D4AF37;
    }
    
    .timeline-item::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 1.5rem;
        bottom: -1rem;
        width: 2px;
        background: #e5e7eb;
    }
    
    .timeline-item:last-child::after {
        display: none;
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-responsive md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Our <span class="text-gradient">Story</span></h1>
                <p class="text-base xs:text-lg md:text-xl text-gray-600 mb-6 md:mb-10">The story behind Tuwanx &mdash; a fashion marketplace to buy, sell, design, swap, and give back, built in Nigeria for a global community.</p>
                <div class="flex flex-col xs:flex-row justify-center space-y-3 xs:space-y-0 xs:space-x-4 btn-group-responsive">
                    <a href="#mission" class="btn-gold px-5 py-3 rounded-lg font-semibold text-base btn-responsive">Our Mission</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section-padding bg-white" id="mission">
        <div class="container mx-auto px-4 xs:px-6">
            <div class="flex flex-col lg:flex-row gap-8 md:gap-12 items-center">
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Our <span class="text-gradient">Mission</span></h2>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">At Tuwanx, we believe that everyone deserves to wear clothing that expresses their unique personality and fits perfectly. Our mission is to democratize custom fashion by connecting talented designers with customers who want personalized, high-quality clothing.</p>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We're breaking down the barriers that have traditionally made custom fashion inaccessible—high costs, limited options, and complicated processes.</p>
                        <p class="text-gray-600 text-sm md:text-base">Through our platform, we're creating a global community where creativity flourishes and everyone can find their perfect fit.</p>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Our <span class="text-gradient">Vision</span></h2>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We envision a world where custom clothing is the norm, not the exception. Where every person can easily access beautifully crafted, personalized fashion that tells their unique story.</p>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We're building the future of fashion—one where sustainability, personal expression, and craftsmanship come together to create meaningful connections between designers and wearers.</p>
                        <div class="bg-tuwanx-gold/5 rounded-xl p-4 md:p-6 mt-6 md:mt-8">
                            <h3 class="font-semibold text-tuwanx-gold mb-2 text-lg md:text-xl">Our Core Values</h3>
                            <ul class="space-y-2 text-gray-700 text-sm md:text-base">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-tuwanx-gold mr-2 mt-1"></i>
                                    <span>Creativity and self-expression through fashion</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-tuwanx-gold mr-2 mt-1"></i>
                                    <span>Quality craftsmanship and attention to detail</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-tuwanx-gold mr-2 mt-1"></i>
                                    <span>Sustainable and ethical fashion practices</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-tuwanx-gold mr-2 mt-1"></i>
                                    <span>Inclusivity and accessibility for all</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Timeline Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Our <span class="text-gradient">Journey</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">From a simple idea to a revolutionary platform, discover how Tuwanx came to be.</p>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                    <div class="space-y-8 md:space-y-12">
                        <div class="timeline-item">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">The Beginning</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-2">2018</p>
                            <p class="text-gray-600 text-sm md:text-base">Our founder, a fashion enthusiast frustrated with the limitations of off-the-rack clothing, envisioned a platform that would make custom fashion accessible to everyone.</p>
                        </div>
                        
                        <div class="timeline-item">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">First Prototype</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-2">2019</p>
                            <p class="text-gray-600 text-sm md:text-base">We built our first MVP connecting 10 local designers with early adopters, validating our concept and gathering valuable feedback.</p>
                        </div>
                        
                        <div class="timeline-item">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">Official Launch</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-2">2020</p>
                            <p class="text-gray-600 text-sm md:text-base">Tuwanx officially launched with 50 designers and hundreds of happy customers creating their dream wardrobes.</p>
                        </div>
                        
                        <div class="timeline-item">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">Rapid Growth</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-2">2021</p>
                            <p class="text-gray-600 text-sm md:text-base">Expanded to include international designers and introduced our mobile app, making custom fashion accessible on-the-go.</p>
                        </div>
                        
                        <div class="timeline-item">
                            <h3 class="text-lg md:text-xl font-semibold mb-2">Today & Beyond</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-2">2022 - Present</p>
                            <p class="text-gray-600 text-sm md:text-base">With thousands of designers and customers worldwide, we continue to innovate and expand our offerings while staying true to our mission.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Tuwanx <span class="text-gradient">By Numbers</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">Our impact in the custom fashion industry.</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 text-center card-shadow">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">5K+</div>
                    <p class="text-gray-600 text-sm md:text-base">Designers</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-shadow">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">50K+</div>
                    <p class="text-gray-600 text-sm md:text-base">Happy Customers</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-shadow">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">100K+</div>
                    <p class="text-gray-600 text-sm md:text-base">Custom Pieces</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-shadow">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">15+</div>
                    <p class="text-gray-600 text-sm md:text-base">Countries</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 xs:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Our <span class="text-gradient">Commitment</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">What drives us forward and sets us apart.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-leaf text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Sustainability</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We promote sustainable fashion by reducing waste through made-to-order clothing and supporting ethical production practices.</p>
                </div>
                
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-hands-helping text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Empowerment</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We empower independent designers to build sustainable businesses and customers to express their unique style.</p>
                </div>
                
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-globe-americas text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Inclusivity</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We believe custom fashion should be accessible to everyone, regardless of size, budget, or location.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-6">Join the <span class="text-gradient">Custom Fashion</span> Revolution</h2>
                <p class="text-base md:text-lg lg:text-xl text-gray-600 mb-6 md:mb-10">Be part of our story and experience the future of personalized fashion.</p>
                <div class="flex flex-col xs:flex-row justify-center space-y-3 xs:space-y-0 xs:space-x-4 btn-group-responsive">
                    <a href="#" class="btn-gold px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg btn-responsive">Start Shopping</a>
                    <a href="{{ route('contact') }}" class="btn-outline px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg btn-responsive">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Mobile menu functionality
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    
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
</script>
@endsection
