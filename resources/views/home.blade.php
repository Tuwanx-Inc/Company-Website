@extends('layouts.app')

@section('title', 'Tuwanx - The Complete Fashion Marketplace')

@section('progress-bar')
    <!-- Progress Bar -->
    <div class="progress-bar">
        <div class="progress" id="progress"></div>
    </div>
@endsection

@section('navigation')
    <div class="hidden md:flex space-x-8">
        <a href="#home" class="nav-link active-nav">Home</a>
        <a href="#marketplace" class="nav-link">Explore</a>
        <a href="#how-it-works" class="nav-link">How It Works</a>
        <a href="#designers" class="nav-link">Designers</a>
        <a href="#features" class="nav-link">Features</a>
        <a href="#testimonials" class="nav-link">Testimonials</a>
        <a href="#download" class="nav-link">Download</a>
    </div>
    <div class="hidden md:flex items-center space-x-4">
        <a href="#download" class="btn-outline px-4 py-2 rounded-full font-medium">Log In</a>
        <a href="#download" class="btn-gold px-4 py-2 rounded-full font-medium">Sign Up</a>
    </div>
@endsection

@section('mobile-menu')
    <div class="container mx-auto px-6 py-8 mt-16">
        <div class="flex flex-col space-y-8">
            <a href="#home" class="text-2xl font-semibold py-2 border-b border-gray-100">Home</a>
            <a href="#marketplace" class="text-2xl font-semibold py-2 border-b border-gray-100">Explore</a>
            <a href="#how-it-works" class="text-2xl font-semibold py-2 border-b border-gray-100">How It Works</a>
            <a href="#designers" class="text-2xl font-semibold py-2 border-b border-gray-100">Designers</a>
            <a href="#features" class="text-2xl font-semibold py-2 border-b border-gray-100">Features</a>
            <a href="#testimonials" class="text-2xl font-semibold py-2 border-b border-gray-100">Testimonials</a>
            <a href="#download" class="text-2xl font-semibold py-2 border-b border-gray-100">Download</a>
            <div class="flex flex-col space-y-4 pt-4">
                <a href="#download" class="btn-outline px-4 py-3 rounded-full font-medium text-lg text-center">Log In</a>
                <a href="#download" class="btn-gold px-4 py-3 rounded-full font-medium text-lg text-center">Sign Up</a>
            </div>
        </div>
    </div>
@endsection

@section('section-indicator')
    <!-- Section Indicator -->
    <div class="section-indicator hidden md:block">
        <div class="indicator-dot active" data-section="home"></div>
        <div class="indicator-dot" data-section="marketplace"></div>
        <div class="indicator-dot" data-section="how-it-works"></div>
        <div class="indicator-dot" data-section="designers"></div>
        <div class="indicator-dot" data-section="features"></div>
        <div class="indicator-dot" data-section="testimonials"></div>
        <div class="indicator-dot" data-section="download"></div>
    </div>
@endsection

@section('content')
    <!-- Sections -->
    <!-- Section 1: Hero -->
    <section id="home" class="section flex items-center gradient-bg relative overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center relative z-10">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Buy, Sell, Design &amp; <span class="text-gradient">Swap Fashion</span></h1>
                <p class="text-lg text-gray-600 mb-8">Tuwanx is the complete fashion marketplace &mdash; create custom pieces, sell your products, shop pre-loved styles, swap with the community, and give back through charity.</p>
                <div class="flex space-x-4">
                    <a href="#marketplace" class="btn-gold px-6 py-3 rounded-lg font-semibold text-lg inline-block text-center">Explore Tuwanx</a>
                    <a href="#download" class="btn-outline px-6 py-3 rounded-lg font-semibold text-lg inline-block text-center">Get the App</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center fade-in floating-element">
                <div class="relative">
                    <div class="w-80 h-80 bg-tuwanx-gold/20 rounded-full absolute -top-10 -left-10 z-0"></div>
                    <div class="w-80 h-80 bg-tuwanx-gold/10 rounded-full absolute -bottom-10 -right-10 z-0"></div>
                    <img src="{{ asset('assets/wireframe-4.png') }}" alt="Custom Fashion" class="relative z-10 rounded-3xl voluminous-shadow w-full max-w-md">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 1.5: Download Charts -->
    <section class="bg-white py-12 md:py-20 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center justify-center fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 md:mb-20">Growing <span class="text-gradient">Community</span></h2>
                
                <div class="w-full max-w-4xl relative mx-auto">
                    <!-- Venn Diagram SVG Background -->
                    <div class="w-full aspect-[2/1] md:aspect-[2.2/1] relative">
                        <svg viewBox="0 0 600 320" class="w-full h-full drop-shadow-xl" preserveAspectRatio="xMidYMid meet">
                            <defs>
                                <clipPath id="circleLeftClip">
                                    <circle cx="210" cy="160" r="150" />
                                </clipPath>
                            </defs>
                            
                            <!-- Left Circle (Black) -->
                            <circle cx="210" cy="160" r="150" fill="#00171F" />
                            
                            <!-- Right Circle (Gold) -->
                            <circle cx="390" cy="160" r="150" fill="#D4AF37" />
                            
                            <!-- Intersection (White) - Created by clipping Right Circle with Left Circle -->
                            <circle cx="390" cy="160" r="150" fill="white" clip-path="url(#circleLeftClip)" />
                        </svg>

                        <!-- Content Overlay -->
                        <div class="absolute inset-0 flex items-center justify-between px-[10%] md:px-[15%]">
                            <!-- App Store (Left) -->
                            <div class="flex flex-col items-center justify-center text-white w-1/3 z-20 pt-4 md:pt-0">
                                <i class="fab fa-apple text-2xl md:text-5xl mb-1 md:mb-3"></i>
                                <span class="font-bold text-xs md:text-xl text-center leading-tight mb-1">App Store</span>
                                <span class="text-lg md:text-3xl font-bold" id="ios-counter"
                                      data-target="{{ $installs['ios'] ?? 0 }}">{{ number_format($installs['ios'] ?? 0) }}</span>
                            </div>

                            <!-- Total (Center) -->
                            <div class="flex flex-col items-center justify-center w-1/3 z-30 pt-4 md:pt-0">
                                <p class="text-gray-500 text-[8px] md:text-sm uppercase tracking-wider font-bold mb-0.5 md:mb-1">Total</p>
                                <span class="text-xl md:text-5xl font-bold text-tuwanx-black" id="download-counter"
                                      data-target="{{ $installs['total'] ?? 0 }}">{{ \App\Services\TuwanxStats::friendly($installs['total'] ?? 0) }}</span>
                            </div>

                            <!-- Play Store (Right) -->
                            <div class="flex flex-col items-center justify-center text-tuwanx-black w-1/3 z-20 pt-4 md:pt-0">
                                <i class="fab fa-google-play text-xl md:text-4xl mb-1 md:mb-3"></i>
                                <span class="font-bold text-xs md:text-xl text-center leading-tight mb-1">Play Store</span>
                                <span class="text-lg md:text-3xl font-bold" id="android-counter"
                                      data-target="{{ $installs['android'] ?? 0 }}">{{ number_format($installs['android'] ?? 0) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1.75: Marketplace / Explore -->
    <style>
        #marketplace { background: #0b0b0d; }
        #marketplace .offer-row { display: flex; flex-direction: column; align-items: center; gap: 2.5rem; margin-bottom: 6rem; }
        #marketplace .offer-row:last-child { margin-bottom: 0; }
        #marketplace .offer-media { flex: 0 0 auto; width: 310px; max-width: 82%; }
        #marketplace .offer-media img { width: 100%; height: auto; display: block; border-radius: 1.5rem; box-shadow: 0 30px 55px -15px rgba(0, 0, 0, 0.75); }
        #marketplace .offer-body { flex: 1; max-width: 560px; }
        #marketplace .offer-label { display: inline-block; color: #D4AF37; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; }
        #marketplace .offer-title { color: #ffffff; font-weight: 700; font-size: 1.9rem; line-height: 1.15; margin: 0.5rem 0 1rem; }
        #marketplace .offer-desc { color: #c7c9ce; font-size: 1.05rem; line-height: 1.65; margin-bottom: 1.4rem; }
        #marketplace .offer-points { list-style: none; padding: 0; margin: 0; }
        #marketplace .offer-points li { color: #9ca3af; font-size: 0.98rem; margin-bottom: 0.7rem; display: flex; align-items: flex-start; }
        #marketplace .offer-points li i { color: #D4AF37; margin-right: 0.7rem; margin-top: 0.28rem; font-size: 0.82rem; }
        @media (min-width: 768px) {
            #marketplace .offer-row { flex-direction: row; gap: 5rem; }
            #marketplace .offer-row.reverse { flex-direction: row-reverse; }
            #marketplace .offer-title { font-size: 2.2rem; }
        }
    </style>
    <section id="marketplace" class="section relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 fade-in" style="color:#ffffff;">More Than <span style="color:#D4AF37;">Custom Fashion</span></h2>
            <p class="text-lg text-center mb-20 max-w-2xl mx-auto fade-in" style="color:#9ca3af;">Tuwanx is a complete fashion marketplace. Design custom pieces, sell your products, shop pre-loved styles, swap with others, and give back &mdash; all in one app.</p>

            <!-- 1. Custom Design -->
            <div class="offer-row fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/design-create-wear.jpg') }}" alt="Design, create and wear custom fashion on Tuwanx">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Custom Design</span>
                    <h3 class="offer-title">Design, Create &amp; Wear</h3>
                    <p class="offer-desc">Bring your vision to life. Connect with talented designers to create custom, made-to-order pieces tailored to your exact style and measurements.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Personalised, made-to-order fashion</li>
                        <li><i class="fas fa-check"></i> Chat directly with your designer</li>
                        <li><i class="fas fa-check"></i> Secure, milestone-based payments</li>
                    </ul>
                </div>
            </div>

            <!-- 2. Sell -->
            <div class="offer-row reverse fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/sell-fashion-products.jpg') }}" alt="List, sell and earn from fashion products on Tuwanx">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Sell</span>
                    <h3 class="offer-title">List, Sell &amp; Earn</h3>
                    <p class="offer-desc">Turn your wardrobe or your label into income. List fashion products in minutes and reach buyers across Nigeria and beyond.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Fast listing with photos and pricing</li>
                        <li><i class="fas fa-check"></i> Manage orders and offers in-app</li>
                        <li><i class="fas fa-check"></i> Get paid securely</li>
                    </ul>
                </div>
            </div>

            <!-- 3. Used / Thrift -->
            <div class="offer-row fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/used-fashion.jpg') }}" alt="Thrift and shop pre-loved used fashion on Tuwanx">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Thrift</span>
                    <h3 class="offer-title">Thrift, Relove, Repeat</h3>
                    <p class="offer-desc">Give fashion a second life. Shop quality pre-loved and vintage pieces for less, or sell the styles you have outgrown.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Curated pre-loved and vintage finds</li>
                        <li><i class="fas fa-check"></i> Condition rating on every item</li>
                        <li><i class="fas fa-check"></i> Make an offer or chat with sellers</li>
                    </ul>
                </div>
            </div>

            <!-- 4. Swap -->
            <div class="offer-row reverse fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/swap.jpg') }}" alt="Swap and trade fashion with the Tuwanx community">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Swap</span>
                    <h3 class="offer-title">Swap &amp; Trade</h3>
                    <p class="offer-desc">Refresh your wardrobe without spending. Exchange the pieces you no longer wear for styles you love, matched with trusted trade partners.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Smart trade matches</li>
                        <li><i class="fas fa-check"></i> No cash needed</li>
                        <li><i class="fas fa-check"></i> Rated, trusted trade partners</li>
                    </ul>
                </div>
            </div>

            <!-- 5. Trade Showcase -->
            <div class="offer-row fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/swap-2.jpg') }}" alt="Propose luxury trades and exchange fashion on Tuwanx">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Trade</span>
                    <h3 class="offer-title">Elevate, Exchange, Repeat</h3>
                    <p class="offer-desc">Showcase your best pieces and propose trades with the community. Discover luxury trade showcases and exchange directly with other members.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Showcase items with estimated value</li>
                        <li><i class="fas fa-check"></i> Propose and negotiate trades</li>
                        <li><i class="fas fa-check"></i> Build your trade reputation</li>
                    </ul>
                </div>
            </div>

            <!-- 6. Charity -->
            <div class="offer-row reverse fade-in">
                <div class="offer-media floating-element">
                    <img src="{{ asset('assets/buy-donate-charity.jpg') }}" alt="Buy and donate to charity through Tuwanx">
                </div>
                <div class="offer-body">
                    <span class="offer-label">Give Back</span>
                    <h3 class="offer-title">Purpose Over Profit</h3>
                    <p class="offer-desc">Shop with meaning. Every purchase can include a donation, turning your style into support for the causes that matter.</p>
                    <ul class="offer-points">
                        <li><i class="fas fa-check"></i> Add a donation at checkout</li>
                        <li><i class="fas fa-check"></i> Choose a cause you care about</li>
                        <li><i class="fas fa-check"></i> Fashion that gives back</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: How It Works -->
    <section id="how-it-works" class="section bg-white relative overflow-hidden">
        <div class="absolute top-20 -left-20 w-60 h-60 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in">How <span class="text-gradient">Tuwanx</span> Works</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <img src="{{ asset('assets/wireframe-2.png') }}" alt="How It Works" class="rounded-3xl voluminous-shadow w-full">
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in">
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">1</div>
                            <h3 class="text-xl font-semibold">Discover Designers</h3>
                        </div>
                        <p class="text-gray-600">Browse through our curated list of talented fashion designers, view their portfolios, and find the perfect match for your style.</p>
                    </div>
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">2</div>
                            <h3 class="text-xl font-semibold">Chat & Customize</h3>
                        </div>
                        <p class="text-gray-600">Communicate directly with designers to discuss your vision, share inspiration, and finalize design details.</p>
                    </div>
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">3</div>
                            <h3 class="text-xl font-semibold">Receive Your Outfit</h3>
                        </div>
                        <p class="text-gray-600">Track the progress of your custom piece and receive your perfectly tailored outfit via delivery or pickup.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Designers -->
    <section id="designers" class="section gradient-bg relative overflow-hidden">
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 fade-in">Meet Our <span class="text-gradient">Talented Designers</span></h2>
            <p class="text-lg text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in">From established fashion houses to emerging talents, our platform connects you with diverse creative professionals.</p>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-palette text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Creative Vision</h3>
                            <p class="text-gray-600 text-center">Designers with unique artistic perspectives</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-award text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Top notch Artisans</h3>
                            <p class="text-gray-600 text-center">Attention to detail and premium materials</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-comments text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Direct Chatting</h3>
                            <p class="text-gray-600 text-center">Collaborate directly with your designer</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-clock text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">On-Time Delivery</h3>
                            <p class="text-gray-600 text-center">Reliable timelines for your special events</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in floating-element">
                    <img src="{{ asset('assets/fashion-designers.png') }}" alt="Fashion Designers" class="rounded-3xl voluminous-shadow w-full">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 4: Features -->
    <section id="features" class="section bg-white relative overflow-hidden">
        <div class="absolute top-40 -right-40 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in">Powerful <span class="text-gradient">Features</span></h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in floating-element">
                    <img src="{{ asset('assets/app-features.png') }}" alt="App Features" class="rounded-3xl voluminous-shadow w-full">
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in">
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-comment-dots text-tuwanx-gold mr-3"></i>
                            Seamless Communication
                        </h3>
                        <p class="text-gray-600">Our integrated chat system allows you to communicate directly with designers, share images, and discuss details in real-time.</p>
                    </div>
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-chart-line text-tuwanx-gold mr-3"></i>
                            Progress Tracking
                        </h3>
                        <p class="text-gray-600">Stay updated on your custom piece with our progress tracking feature, from initial sketches to final fittings.</p>
                    </div>
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-shield-alt text-tuwanx-gold mr-3"></i>
                            Secure Payments
                        </h3>
                        <p class="text-gray-600">Our secure payment system ensures your transactions are protected, with funds released only when you're satisfied.</p>
                    </div>
                    <div class="p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-shipping-fast text-tuwanx-gold mr-3"></i>
                            Delivery Options
                        </h3>
                        <p class="text-gray-600">Choose between home delivery or local pickup based on your convenience and location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 5: Testimonials -->
    <section id="testimonials" class="section gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 fade-in">What Our <span class="text-gradient">Customers Say</span></h2>
            <p class="text-lg text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in">Hear from customers who found their perfect custom outfits through Tuwanx.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">S</div>
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Wedding Dress</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"My wedding dress was everything I dreamed of and more! The designer understood my vision perfectly and created a masterpiece."</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">M</div>
                        <div>
                            <h4 class="font-semibold">Michael Torres</h4>
                            <p class="text-gray-500 text-sm">Custom Suit</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The attention to detail on my custom suit was incredible. I received so many compliments at my brother's wedding!"</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">J</div>
                        <div>
                            <h4 class="font-semibold">Jessica Lee</h4>
                            <p class="text-gray-500 text-sm">Evening Gown</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"I was hesitant about ordering custom clothing online, but Tuwanx made the process so easy and the result was stunning!"</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 6: Download -->
    <section id="download" class="section bg-white relative overflow-hidden">
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-r from-tuwanx-gold/10 to-tuwanx-gold/5 rounded-3xl p-8 md:p-12 max-w-4xl mx-auto voluminous-shadow fade-in">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Get the <span class="text-gradient">Tuwanx App</span></h2>
                        <p class="text-lg text-gray-600 mb-6">Download our app to discover designers, create custom requests, and track your orders on the go.</p>
                        
                        <div class="flex space-x-4">
                            <a href="https://apps.apple.com/us/app/tuwanx-a-fashion-marketplace/id6786686734" target="_blank" rel="noopener" class="bg-black text-white px-6 py-3 rounded-xl font-medium flex items-center voluminous-shadow hover:transform hover:-translate-y-1 transition-transform">
                                <i class="fab fa-apple text-2xl mr-2"></i>
                                <div class="text-left">
                                    <div class="text-xs">Download on the</div>
                                    <div class="text-lg">App Store</div>
                                </div>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.tx.Tuwanx&pcampaignid=web_share" target="_blank" rel="noopener" class="bg-black text-white px-6 py-3 rounded-xl font-medium flex items-center voluminous-shadow hover:transform hover:-translate-y-1 transition-transform">
                                <i class="fab fa-google-play text-xl mr-2"></i>
                                <div class="text-left">
                                    <div class="text-xs">Get it on</div>
                                    <div class="text-lg">Google Play</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center floating-element">
                        <img src="{{ asset('assets/app-screen.png') }}" alt="Mobile App" class="w-64 rounded-3xl voluminous-shadow">
                    </div>
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
        });
        
        // Close mobile menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
            });
        });
        
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                fadeInObserver.observe(element);
            });

            // Download Counter Logic
            //
            // These numbers are REAL. They come from the Tuwanx API (see
            // App\Services\TuwanxStats), are rendered server-side into the
            // data-target attributes below, and refresh every 15 minutes.
            //
            // This previously simulated growth by adding 200 downloads per day
            // since a fixed date and splitting them 60/40 - the figures shown
            // had no connection to actual installs. Do not reintroduce that:
            // the counter must only ever display measured data.
            const counterElement = document.getElementById('download-counter');
            if (counterElement) {
                const readTarget = el => {
                    const v = parseInt((el && el.dataset.target) || '0', 10);
                    return isNaN(v) ? 0 : v;
                };

                const currentCount = readTarget(counterElement);
                const androidCount = readTarget(document.getElementById('android-counter'));
                const iosCount     = readTarget(document.getElementById('ios-counter'));

                // Animate the number counting up
                const duration = 2000; // 2 seconds
                const frameDuration = 1000 / 60; // 60fps
                const totalFrames = Math.round(duration / frameDuration);
                const easeOutQuad = t => t * (2 - t);
                
                // Elements for charts
                const iosCounterEl = document.getElementById('ios-counter');
                const androidCounterEl = document.getElementById('android-counter');
                const iosBarEl = document.getElementById('ios-bar');
                const androidBarEl = document.getElementById('android-bar');

                function formatNumber(num) {
                    // Once we reach 1 Million, keep the counter at "1 Million+"
                    if (num >= 1000000) {
                        return '1 Million+';
                    }

                    if (num >= 1000) {
                        return Math.floor(num / 1000) + 'K+';
                    }

                    // Exact below 1,000 - "892+" would imply more than we have.
                    return String(num);
                }

                // Store columns show the precise count (with separators); only
                // the centre Total uses the rounded "1K+" headline.
                const exact = n => Number(n).toLocaleString('en-US');

                let frame = 0;
                const animateCount = () => {
                    frame++;
                    const progress = easeOutQuad(frame / totalFrames);
                    const currentDisplayed = Math.round(currentCount * progress);
                    
                    if (counterElement) {
                        counterElement.textContent = formatNumber(currentDisplayed);
                    }

                    if (iosCounterEl) {
                        iosCounterEl.textContent = exact(Math.round(iosCount * progress));
                    }
                    if (androidCounterEl) {
                        androidCounterEl.textContent = exact(Math.round(androidCount * progress));
                    }
                    
                    if (frame < totalFrames) {
                        requestAnimationFrame(animateCount);
                    } else {
                       counterElement.textContent = formatNumber(currentCount);
                        if (iosCounterEl) iosCounterEl.textContent = exact(iosCount);
                        if (androidCounterEl) androidCounterEl.textContent = exact(androidCount);
                    }
                };
                
                // Start animation when element is in view
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCount();
                            // Animate bars removed since we are using Venn circles now
                            // if (iosBarEl) iosBarEl.style.height = '60%';
                            // if (androidBarEl) androidBarEl.style.height = '40%';
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                counterObserver.observe(counterElement);
            }
            
            // Progress bar
            const progressBar = document.getElementById('progress');
            
            window.addEventListener('scroll', function() {
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight - windowHeight;
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollPercent = (scrollTop / documentHeight) * 100;
                
                progressBar.style.width = scrollPercent + '%';
                
                // Update section indicator
                const sections = document.querySelectorAll('section');
                const indicatorDots = document.querySelectorAll('.indicator-dot');
                
                let currentSection = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.clientHeight;
                    
                    if (scrollTop >= sectionTop && scrollTop < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('id');
                    }
                });
                
                indicatorDots.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('data-section') === currentSection) {
                        dot.classList.add('active');
                    }
                });
                
                // Update navigation
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.classList.remove('active-nav');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active-nav');
                    }
                });
            });
            
            // Section indicator click
            const indicatorDots = document.querySelectorAll('.indicator-dot');
            indicatorDots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const sectionId = this.getAttribute('data-section');
                    const section = document.getElementById(sectionId);
                    
                    if (section) {
                        window.scrollTo({
                            top: section.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Navigation click
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('href').substring(1);
                    const section = document.getElementById(sectionId);
                    
                    if (section) {
                        window.scrollTo({
                            top: section.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
@endsection
