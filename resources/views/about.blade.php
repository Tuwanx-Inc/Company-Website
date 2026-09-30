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
    
    /* Modern squircle icon badge */
    .feature-icon {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.18), rgba(212, 175, 55, 0.06));
        width: 56px;
        height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        border: 1px solid rgba(212, 175, 55, 0.28);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.12);
    }
    .feature-icon i { font-size: 1.35rem; }

    @media (min-width: 1024px) {
        .feature-icon { width: 60px; height: 60px; }
    }

    /* Modern mobile-menu links */
    .mm-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 0.25rem;
        font-size: 1.3rem;
        font-weight: 600;
        color: #00171F;
        transition: color .2s ease, padding-left .2s ease;
    }
    .mm-link:hover, .mm-link:active { color: #D4AF37; padding-left: 0.5rem; }
    .mm-arrow { font-size: .8rem; color: #D4AF37; opacity: 0; transform: translateX(-6px); transition: all .2s ease; }
    .mm-link:hover .mm-arrow, .mm-link:active .mm-arrow { opacity: 1; transform: translateX(0); }
    
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
    <!-- Page header -->
    <section class="gradient-bg relative overflow-hidden pt-28 md:pt-36 pb-12 md:pb-16">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 xs:px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block text-tuwanx-gold font-semibold tracking-[0.2em] uppercase text-xs mb-3">About Tuwanx</span>
                <h1 class="text-3xl xs:text-4xl md:text-5xl font-bold mb-4 md:mb-6 leading-tight">The complete <span class="text-gradient">fashion marketplace</span></h1>
                <p class="text-base xs:text-lg md:text-xl text-gray-600">Buy, sell, design custom pieces, swap what you no longer wear, and give back &mdash; all in one app, built in Nigeria for a global community.</p>
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
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">Tuwanx is a complete fashion marketplace. Our mission is to make it easy to buy and sell fashion, create custom pieces with designers, swap what you no longer wear, and shop in ways that give back.</p>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We bring buyers, sellers, and designers together in one place, lowering the barriers of cost, access, and complexity that fashion often carries.</p>
                        <p class="text-gray-600 text-sm md:text-base">Built in Nigeria with a global outlook, we're growing a community where style, enterprise, and creativity meet.</p>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Our <span class="text-gradient">Vision</span></h2>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We envision fashion that works for everyone &mdash; where buying, selling, designing, and reusing clothing all happen simply, in one trusted place.</p>
                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">We want to make style more accessible and more sustainable, connecting the people who make, sell, and wear fashion, with room to give back along the way.</p>
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

    <!-- What We Do -->
    <section class="section-padding gradient-bg">
        <div class="container mx-auto px-4 xs:px-6">
            <span class="block text-center text-tuwanx-gold font-semibold tracking-[0.2em] uppercase text-xs mb-3">What We Do</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">One marketplace, <span class="text-gradient">every way to fashion</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">From custom design to pre-loved finds, Tuwanx brings the whole fashion journey into one app.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 max-w-5xl mx-auto">
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-bag-shopping text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Shop Fashion</h3>
                    <p class="text-gray-600 text-sm md:text-base">Browse and buy quality fashion from trusted sellers around the world.</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-store text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Sell &amp; Earn</h3>
                    <p class="text-gray-600 text-sm md:text-base">List your products in minutes and reach buyers everywhere, with secure payouts.</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-pen-ruler text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Custom Design</h3>
                    <p class="text-gray-600 text-sm md:text-base">Work directly with designers to create made-to-order pieces built for you.</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-right-left text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Swap &amp; Trade</h3>
                    <p class="text-gray-600 text-sm md:text-base">Exchange the pieces you no longer wear for styles you love &mdash; no cash needed.</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-recycle text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Pre-loved &amp; Thrift</h3>
                    <p class="text-gray-600 text-sm md:text-base">Give fashion a second life with quality used pieces at friendly prices.</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-7 card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon"><i class="fas fa-hand-holding-heart text-tuwanx-gold"></i></div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Give Back</h3>
                    <p class="text-gray-600 text-sm md:text-base">Shop with purpose &mdash; support charitable causes as you buy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How Tuwanx Works (dark) -->
    <section class="py-16 md:py-24" style="background:#0b0b0d;">
        <div class="container mx-auto px-4 xs:px-6">
            <span class="block text-center font-semibold tracking-[0.2em] uppercase text-xs mb-3" style="color:#D4AF37;">How It Works</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4" style="color:#fff;">Getting started takes minutes</h2>
            <p class="text-base md:text-lg text-center mb-12 md:mb-16 max-w-2xl mx-auto" style="color:#9ca3af;">Whether you are here to buy, sell, or create &mdash; the flow is simple.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl mx-auto mb-5 flex items-center justify-center font-bold text-lg" style="background:linear-gradient(135deg,#D4AF37,#b8941f);color:#fff;">1</div>
                    <h3 class="font-semibold text-lg mb-2" style="color:#fff;">Create your account</h3>
                    <p class="text-sm md:text-base" style="color:#9ca3af;">Sign up in minutes as a buyer, seller, or designer.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl mx-auto mb-5 flex items-center justify-center font-bold text-lg" style="background:linear-gradient(135deg,#D4AF37,#b8941f);color:#fff;">2</div>
                    <h3 class="font-semibold text-lg mb-2" style="color:#fff;">Explore &amp; connect</h3>
                    <p class="text-sm md:text-base" style="color:#9ca3af;">Discover pieces, chat with sellers, or brief a designer on your idea.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl mx-auto mb-5 flex items-center justify-center font-bold text-lg" style="background:linear-gradient(135deg,#D4AF37,#b8941f);color:#fff;">3</div>
                    <h3 class="font-semibold text-lg mb-2" style="color:#fff;">Buy, sell or swap</h3>
                    <p class="text-sm md:text-base" style="color:#9ca3af;">Transact securely and track everything from checkout to your door.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section (live from the Tuwanx API — real, measured figures only) -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 xs:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Tuwanx <span class="text-gradient">By Numbers</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">Live figures from the Tuwanx app, updated regularly.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 text-center card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">{{ number_format($installs['sellers'] ?? 0) }}</div>
                    <p class="text-gray-600 text-sm md:text-base">Sellers</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">{{ number_format($installs['buyers'] ?? 0) }}</div>
                    <p class="text-gray-600 text-sm md:text-base">Happy Customers</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">{{ number_format($installs['total'] ?? 0) }}</div>
                    <p class="text-gray-600 text-sm md:text-base">Downloads</p>
                </div>

                <div class="bg-white rounded-2xl p-6 text-center card-shadow transition duration-300 hover:-translate-y-1">
                    <div class="text-3xl md:text-4xl font-bold text-tuwanx-gold mb-2">Global</div>
                    <p class="text-gray-600 text-sm md:text-base">Reach</p>
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
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-leaf text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Sustainability</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We promote sustainable fashion through made-to-order pieces, reuse and thrift, and swaps that give clothing a second life.</p>
                </div>
                
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-hands-helping text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Empowerment</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We empower independent designers and sellers to build businesses, and buyers to express their unique style.</p>
                </div>
                
                <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl p-6 md:p-8 voluminous-shadow transition duration-300 hover:-translate-y-1">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-globe-americas text-tuwanx-gold text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-4">Inclusivity</h3>
                    <p class="text-gray-600 text-sm md:text-base text-center">We believe fashion should be accessible to everyone, regardless of size, budget, or location.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-6">Join the <span class="text-gradient">Tuwanx</span> Community</h2>
                <p class="text-base md:text-lg lg:text-xl text-gray-600 mb-6 md:mb-10">Buy, sell, design, and swap fashion &mdash; and give back &mdash; all in one place.</p>
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
