<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Rescue - Emergency Ambulance Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary: #dc3545;
            --secondary: #0d6efd;
            --dark: #212529;
            --light: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff;
        }
        
        .navbar {
            background: linear-gradient(135deg, #dc3545, #b02a37);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            height: 600px;
            color: white;
        }
        
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--primary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .btn-emergency {
            background: var(--primary);
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
        }
        
        .btn-emergency:hover {
            background: #b02a37;
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(220, 53, 69, 0.5);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            position: relative;
        }
        
        .testimonial-card:before {
            content: """;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 80px;
            color: rgba(220, 53, 69, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .map-container {
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .stats-number {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0;
        }
        
        .stats-label {
            font-size: 18px;
            color: var(--dark);
            font-weight: 500;
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
            margin-top: 20px;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            left: -38px;
            top: 5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            border: 4px solid var(--primary);
        }
        
        .form-control, .form-select {
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }
        
        .ambulance-type-card {
            border: 1px solid #dee2e6;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
        }
        
        .ambulance-type-card:hover {
            border-color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .hero-section {
                height: 450px;
            }
            
            .hero-section h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-ambulance fa-2x me-2"></i>
                <span class="fw-bold">RAPID RESCUE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ambulances">Ambulances</a></li>
                    <li class="nav-item"><a class="nav-link" href="#track">Track</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-user me-1"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Emergency Ambulance Services</h1>
            <p class="lead mb-5">24/7 Rapid Response Medical Assistance at Your Doorstep</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <button class="btn btn-light btn-lg px-4 py-3 fw-bold">
                    <i class="fas fa-phone-alt me-2"></i> CALL NOW: 1122
                </button>
               <a href="emergency-request" class="btn btn-emergency btn-lg px-4 py-3">
    <i class="fas fa-bolt me-2"></i> REQUEST AMBULANCE
</a>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="text-muted">Fast, reliable and life-saving medical transportation</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-heartbeat fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">Emergency Response</h4>
                        <p>Immediate dispatch for critical situations with trained paramedics and life-saving equipment.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-user-injured fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">Patient Transport</h4>
                        <p>Safe and comfortable non-emergency transportation for medical appointments and transfers.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">Real-time Tracking</h4>
                        <p>Track your ambulance in real-time and receive estimated arrival notifications.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-file-medical fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">Medical Profile</h4>
                        <p>Create and manage your medical history for faster emergency response.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-first-aid fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">First Aid Guidance</h4>
                        <p>Step-by-step instructions while waiting for the ambulance to arrive.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-headset fa-2x text-white"></i>
                        </div>
                        <h4 class="fw-bold">24/7 Support</h4>
                        <p>Our emergency response team is available round the clock to assist you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-5">
        <div class="container py-5">
            <div class="section-title">
                <h2 class="display-5 fw-bold">How Rapid Rescue Works</h2>
                <p class="text-muted">Three simple steps to get emergency medical assistance</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4">
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4 class="fw-bold">Request Assistance</h4>
                            <p>Call our emergency number or use the app to request an ambulance with your location and emergency details.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bold">Ambulance Dispatch</h4>
                            <p>Our system instantly locates the nearest available ambulance and dispatches it to your location.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bold">Track & Assistance</h4>
                            <p>Track the ambulance in real-time and receive first-aid instructions until help arrives.</p>
                        </div>
                    </div>
                </div>
                
               <div class="col-lg-8">
    <div class="map-container" style="height: 400px; border-radius: 8px; overflow: hidden;">
        <!-- Google Map Embed Placeholder -->
    <div class="text-center p-4">
        <i class="fas fa-map-marked-alt fa-5x text-primary mb-3"></i>
        <h3 class="fw-bold">Real-time Tracking System</h3>
        <p class="text-muted">Our advanced GPS technology ensures the fastest response time possible</p>
    </div>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57670.93624145454!2d68.36254144318396!3d25.390295458132282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70c4ad27e33f%3A0x477a4c7b0d586de7!2sAga%20Khan%20Family%20Health%20Center!5e0!3m2!1sen!2s!4v1755027052649!5m2!1sen!2s" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
  
</div>

            </div>
        </div>
    </section>

    <!-- Ambulance Types -->
   
    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <p class="stats-number" id="responseTime">8</p>
                    <p class="stats-label">Min Avg. Response</p>
                </div>
                <div class="col-md-3">
                    <p class="stats-number" id="ambulances">120+</p>
                    <p class="stats-label">Ambulances</p>
                </div>
                <div class="col-md-3">
                    <p class="stats-number" id="cities">25</p>
                    <p class="stats-label">Cities Covered</p>
                </div>
                <div class="col-md-3">
                    <p class="stats-number" id="livesSaved">50K+</p>
                    <p class="stats-label">Lives Saved</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title">
                <h2 class="display-5 fw-bold">What Our Patients Say</h2>
                <p class="text-muted">Real stories from people we've helped</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Rapid Rescue saved my father's life during his heart attack. Their response time was incredible and the paramedics were extremely professional."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="60" height="60" alt="User">
                            <div>
                                <h6 class="fw-bold mb-0">Ahmed Khan</h6>
                                <p class="text-muted mb-0">Karachi</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"When my wife went into labor unexpectedly, Rapid Rescue arrived within 10 minutes. They safely transported us to the hospital just in time."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="60" height="60" alt="User">
                            <div>
                                <h6 class="fw-bold mb-0">Fatima Ali</h6>
                                <p class="text-muted mb-0">Lahore</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"The real-time tracking feature gave us peace of mind when transporting our sick child to the hospital. We knew exactly when they would arrive."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/men/62.jpg" class="rounded-circle me-3" width="60" height="60" alt="User">
                            <div>
                                <h6 class="fw-bold mb-0">Bilal Hassan</h6>
                                <p class="text-muted mb-0">Islamabad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
 <section id="about" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                {{-- <h5 class="display-5 fw-bold mb-4">MR <strong style="color: blue">SHAYAN</strong> CEO</h5> --}}
                <h2 class="display-5 fw-bold mb-4">About <strong style="color: blue">Rapid</strong> Rescue</h2>
                <p class="lead">Rapid Rescue is a leading emergency medical service provider dedicated to saving lives through rapid response and professional care.</p>
                <p>Founded in 2010, we've grown to become the largest private ambulance service in the country with over 120 ambulances operating in 25 major cities.</p>
                <p>Our mission is to reduce emergency response times and provide high-quality medical transportation to everyone in need, regardless of their location or financial status.</p>
                <div class="d-flex mt-4">
                    <div class="me-4 text-center">
                        <h3 class="fw-bold text-primary">500+</h3>
                        <p>Trained Professionals</p>
                    </div>
                    <div class="me-4 text-center">
                        <h3 class="fw-bold text-primary">24/7</h3>
                        <p>Emergency Service</p>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold text-primary">98%</h3>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
            </div>

            <!-- Images -->
            <div class="col-lg-6">
                <div class="d-flex gap-3">
                    <!-- First Image -->
                    <div class="flex-fill position-relative" >
                        <img src="{{ asset('home/image.png') }}" alt="Ambulance" class="img-fluid rounded shadow-sm" style="object-fit: cover; height: 300px; width: 100%;">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-2 m-2 rounded">
                            CEO Mr. Shayan
                        </div>
                    </div>

                    <!-- Second Image -->
                    <div class="flex-fill position-relative">
                        <img src="{{ asset('home/john.jpeg') }}" alt="CEO" class="img-fluid rounded shadow-sm" style="object-fit: cover; height: 300px; width: 100%;">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-2 m-2 rounded">
                            CEO Mr. John
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title">
                <h2 class="display-5 fw-bold">Contact Us</h2>
                <p class="text-muted">Reach out to us for any inquiries or assistance</p>
            </div>
            
            <div class="row">
                <div class="col-md-7">
                    <div class="card p-4">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Subject">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">Send Message</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="card p-4 h-100">
                        <h4 class="fw-bold mb-4">Get In Touch</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                                <span>123 Medical Plaza, Main Boulevard, Gulberg, Lahore</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="fas fa-phone-alt text-primary me-3 mt-1"></i>
                                <span>Emergency: 1122<br>Office: (042) 111-222-333</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                                <span>info@rapidrescue.com<br>support@rapidrescue.com</span>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-clock text-primary me-3 mt-1"></i>
                                <span>24/7 Emergency Service<br>Office Hours: 9AM - 5PM</span>
                            </li>
                        </ul>
                        
                        <div class="mt-4">
                            <h5 class="fw-bold mb-3">Follow Us</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-primary fs-4"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-primary fs-4"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-primary fs-4"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-primary fs-4"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <h4 class="text-white mb-4">Rapid Rescue</h4>
                    <p>Your trusted partner in emergency medical services. Providing fast, reliable, and professional ambulance services 24/7.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white fs-5"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#services">Services</a></li>
                        <li class="mb-2"><a href="#ambulances">Ambulances</a></li>
                        <li class="mb-2"><a href="#about">About Us</a></li>
                        <li class="mb-2"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Emergency Response</a></li>
                        <li class="mb-2"><a href="#">Patient Transport</a></li>
                        <li class="mb-2"><a href="#">Medical Events</a></li>
                        <li class="mb-2"><a href="#">First Aid Training</a></li>
                        <li class="mb-2"><a href="#">Corporate Services</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="text-white mb-4">Emergency Hotline</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone-alt fa-2x text-danger me-3"></i>
                        <div>
                            <h3 class="text-white fw-bold">1122</h3>
                            <p class="mb-0">24/7 Emergency Service</p>
                        </div>
                    </div>
                    <p>For non-emergency inquiries, please contact our office during business hours.</p>
                </div>
            </div>
            
            <hr class="mt-5 mb-4">
            
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 Rapid Rescue. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Emergency Modal -->
    <div class="modal fade" id="emergencyModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title fw-bold"><i class="fas fa-bolt me-2"></i> Request Emergency Ambulance</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="emergencyForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Emergency Type</label>
                            <div class="d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="emergencyType" id="cardiac" checked>
                                    <label class="form-check-label" for="cardiac">Cardiac Emergency</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="emergencyType" id="accident">
                                    <label class="form-check-label" for="accident">Accident</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="emergencyType" id="stroke">
                                    <label class="form-check-label" for="stroke">Stroke</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="emergencyType" id="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Your Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Pickup Location</label>
                            <textarea class="form-control" rows="2" placeholder="Full address or landmark" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Hospital Preference (Optional)</label>
                            <select class="form-select">
                                <option selected>Select Hospital</option>
                                <option>Agha Khan Hospital</option>
                                <option>Shaukat Khanum Hospital</option>
                                <option>Jinnah Hospital</option>
                                <option>Shifa International Hospital</option>
                                <option>Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Number of Patients</label>
                            <select class="form-select">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4+</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Additional Information</label>
                            <textarea class="form-control" rows="3" placeholder="Patient condition, special requirements, etc."></textarea>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="agree" required>
                            <label class="form-check-label" for="agree">
                                I confirm that this is a genuine emergency requiring immediate medical attention
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-danger w-100 py-3 fw-bold">
                            <i class="fas fa-paper-plane me-2"></i> SEND EMERGENCY REQUEST
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bold text-primary">Professional Authentication System</h1>
                    <p class="lead">Click the button below to view the enhanced login modal with signup option</p>
                    <button class="btn btn-primary btn-lg px-4 py-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-sign-in-alt me-2"></i>Show Login Modal
                    </button>
                </div>
                
                <div class="card shadow mb-5">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">System Features</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-lock fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Secure Authentication</h5>
                                        <p class="mb-0">Industry-standard security protocols</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Multi-Role Support</h5>
                                        <p class="mb-0">Different access levels for users, EMTs and drivers</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-sync-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Seamless Switching</h5>
                                        <p class="mb-0">Easily switch between login and signup</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="me-3 text-primary">
                                        <i class="fas fa-mobile-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold">Fully Responsive</h5>
                                        <p class="mb-0">Works perfectly on all devices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-primary">
                    <div class="d-flex">
                        <i class="fas fa-info-circle fa-2x me-3 mt-1"></i>
                        <div>
                            <h5 class="alert-heading">How It Works</h5>
                            <p class="mb-0">Click the login button above, then click "Create Account" to see the professional signup form. The system uses Bootstrap modals with smooth transitions between login and signup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-gradient-primary text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-lock fa-2x me-3"></i>
                        <div>
                            <h5 class="modal-title fw-bold mb-0">Secure Authentication</h5>
                            <p class="mb-0 small">Access your Rapid Rescue account</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                
                <div class="modal-body p-4">
                    <form id="loginForm">
                        <!-- Email Field -->
                        <div class="mb-4">
                            <label class="form-label fw-bold text-dark mb-2">
                                <i class="fas fa-envelope me-2 text-primary"></i>Email Address
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-user text-muted"></i>
                                </span>
                                <input type="email" class="form-control border-start-0 ps-2" 
                                       placeholder="name@example.com" required>
                            </div>
                        </div>
                        
                        <!-- Password Field -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="form-label fw-bold text-dark mb-0">
                                    <i class="fas fa-key me-2 text-primary"></i>Password
                                </label>
                                <a href="#" class="text-decoration-none small text-primary fw-medium">Forgot Password?</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-lock text-muted"></i>
                                </span>
                                <input type="password" id="passwordField" class="form-control border-start-0 ps-2" 
                                       placeholder="Enter your password" required>
                                <button class="btn btn-light border" type="button" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="form-text d-flex justify-content-end small">
                                <span class="badge bg-light text-dark border">
                                    <i class="fas fa-shield-alt me-1 text-success"></i>Secure connection
                                </span>
                            </div>
                        </div>
                        
                        <!-- Remember Me & Security -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label small fw-medium" for="remember">
                                        Keep me signed in
                                    </label>
                                </div>
                                <div>
                                    <span class="badge bg-success bg-opacity-10 text-success small">
                                        <i class="fas fa-lock me-1"></i>SSL Secured
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Login Button -->
                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary py-3 fw-bold">
                                <i class="fas fa-sign-in-alt me-2"></i>SIGN IN TO YOUR ACCOUNT
                            </button>
                        </div>
                        
                        <!-- Divider -->
                        <div class="position-relative my-4">
                            <hr class="border-1">
                            <div class="position-absolute top-50 start-50 translate-middle bg-white px-2 small text-muted">
                                OR CONTINUE WITH
                            </div>
                        </div>
                        
                        <!-- Social Login -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="button" class="btn btn-light border py-2 text-start">
                                <i class="fab fa-google text-danger me-2"></i>Sign in with Google
                            </button>
                            <button type="button" class="btn btn-light border py-2 text-start">
                                <i class="fab fa-microsoft text-primary me-2"></i>Sign in with Microsoft
                            </button>
                        </div>
                        
                        <!-- Registration Link -->
                        <div class="text-center pt-2">
                            <p class="mb-0 small text-muted">Don't have an account? 
                                <a href="#" class="text-primary fw-medium text-decoration-none" 
                                   data-bs-toggle="modal" data-bs-target="#signupModal"
                                   data-bs-dismiss="modal">Create Account</a>
                            </p>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer justify-content-center bg-light">
                    <p class="mb-0 small text-muted">
                        <i class="fas fa-info-circle me-1 text-primary"></i>
                        By signing in, you agree to our <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal --><!-- Success Message -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title fw-bold mb-0">Create Your Account</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4">
                <form id="signupForm" action="{{ route('patientssubmit') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Personal Information -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Full Name</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Phone Number</label>
                                <input type="tel" name="phone_number" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" required>
                            </div>
                        </div>

                        <!-- Account Security -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Create Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Account Type</label>
                                <select name="account_type" class="form-select">
                                    <option value="patient" selected>Patient</option>
                                    <option value="professional">Professional</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Medical Information -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Blood Type</label>
                        <select name="blood_type" class="form-select">
                            <option value="unknown" selected>Select</option>
                            <option value="A+">A+</option><option value="A-">A-</option>
                            <option value="B+">B+</option><option value="B-">B-</option>
                            <option value="AB+">AB+</option><option value="AB-">AB-</option>
                            <option value="O+">O+</option><option value="O-">O-</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Primary Physician</label>
                        <input type="text" name="primary_physician" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Known Allergies</label>
                        <textarea name="known_allergies" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Current Medications</label>
                        <textarea name="current_medications" class="form-control"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="medical_consent" value="1" class="form-check-input" id="medicalConsent">
                        <label for="medicalConsent" class="form-check-label">Consent to share medical info</label>
                    </div>

                    <!-- Terms -->
                    <div class="form-check">
                        <input type="checkbox" name="terms_accepted" value="1" class="form-check-input" required>
                        <label class="form-check-label">I agree to Terms & Privacy Policy</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="communications_accepted" value="1" class="form-check-input">
                        <label class="form-check-label">I agree to receive communications</label>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success fw-bold">
                            CREATE ACCOUNT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// ❌ preventDefault hataya taaki backend pe data jaye
</script>
       <script>
        // Form submission handling
        document.getElementById('emergencyForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Emergency request submitted! Help is on the way.');
            $('#emergencyModal').modal('hide');
        });
        
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login successful! Redirecting to dashboard...');
            $('#loginModal').modal('hide');
        });
        
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will contact you soon.');
            this.reset();
        });
        
        // Counter animation for stats
        function animateValue(id, start, end, duration) {
            let obj = document.getElementById(id);
            let range = end - start;
            let current = start;
            let increment = end > start ? 1 : -1;
            let stepTime = Math.abs(Math.floor(duration / range));
            let timer = setInterval(function() {
                current += increment;
                obj.innerHTML = current + (id === "livesSaved" ? "K+" : "+");
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }
        
        // Initialize counters when section is in view
        window.addEventListener('scroll', function() {
            let statsSection = document.querySelector('.stats-number');
            let position = statsSection.getBoundingClientRect();
            
            // If section is in viewport
            if(position.top < window.innerHeight && position.bottom >= 0) {
                animateValue("responseTime", 0, 8, 1000);
                animateValue("ambulances", 0, 120, 1500);
                animateValue("cities", 0, 25, 1200);
                animateValue("livesSaved", 0, 50, 2000);
                
                // Remove event listener after animation
                window.removeEventListener('scroll', this);
            }
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>