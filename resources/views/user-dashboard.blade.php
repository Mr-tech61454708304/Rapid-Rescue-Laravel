<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Rapid Rescue Premium Emergency Ambulance Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e63946;
            --primary-dark: #c1121f;
            --secondary-color: #f1faee;
            --accent-color: #ffbe0b;
            --accent-dark: #ff9e00;
            --dark-color: #1d3557;
            --dark-blue: #14213d;
            --light-color: #a8dadc;
            --gradient: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.8;
            color: #333;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
        }
        
        h1 {
            font-weight: 900;
        }
        
        .navbar {
            background: rgba(29, 53, 87, 0.9) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
            transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        
        .navbar.scrolled {
            padding: 12px 0;
            background: rgba(29, 53, 87, 0.97) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .navbar-brand {
            font-weight: 900;
            font-size: 2rem;
            letter-spacing: 1px;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transition: all 0.5s ease;
        }
        
        .navbar.scrolled .navbar-brand {
            font-size: 1.8rem;
        }
        
        .nav-link {
            font-weight: 600;
            padding: 10px 20px !important;
            margin: 0 5px;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: var(--gradient);
            transition: all 0.4s ease;
            border-radius: 3px;
        }
        
        .nav-link:hover::before {
            width: 60%;
        }
        
        .nav-link.active::before {
            width: 60%;
            background: var(--accent-color);
        }
        
        .dashboard-hero {
            background: linear-gradient(135deg, rgba(29, 53, 87, 0.9) 0%, rgba(20, 33, 61, 0.95) 100%), 
                        url('https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }
        
        .dashboard-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23ffffff"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23ffffff"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23ffffff"/></svg>');
            background-size: cover;
            z-index: 1;
        }
        
        .dashboard-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
            color: white;
        }
        
        .dashboard-hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .sidebar-card {
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
        }
        
        .sidebar-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-header {
            background: var(--gradient);
            color: white;
            padding: 20px;
            border-bottom: none;
        }
        
        .list-group-item {
            border: none;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .list-group-item:last-child {
            border-bottom: none;
        }
        
        .list-group-item.active {
            background-color: rgba(230, 57, 70, 0.1);
            color: var(--primary-color);
            font-weight: 600;
            border-left: 4px solid var(--primary-color);
        }
        
        .list-group-item:hover:not(.active) {
            background-color: rgba(0, 0, 0, 0.02);
            padding-left: 25px;
        }
        
        .dashboard-card {
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .dashboard-header {
            background: var(--gradient);
            color: white;
            padding: 20px;
            border-bottom: none;
        }
        
        .alert-info {
            background-color: rgba(230, 57, 70, 0.1);
            border-color: rgba(230, 57, 70, 0.2);
            color: var(--dark-color);
            border-radius: 10px;
        }
        
        .feature-card {
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            height: 100%;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: rgba(230, 57, 70, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary-color);
            font-size: 2rem;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            background: var(--gradient);
            color: white;
        }
        
        .btn-dashboard {
            background: var(--gradient);
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 50px;
            color: white;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-dashboard:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(230, 57, 70, 0.3);
        }
        
        .table-responsive {
            border-radius: 15px;
            overflow: hidden;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 15px;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
        }
        
        .table tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
        
        footer {
            background: linear-gradient(135deg, var(--dark-color) 0%, #0d1b36 100%);
            padding: 50px 0 20px;
            position: relative;
            color: rgba(255, 255, 255, 0.8);
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23f8f9fa"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23f8f9fa"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23f8f9fa"/></svg>');
            background-size: cover;
            top: -149px;
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 991.98px) {
            .dashboard-hero h1 {
                font-size: 2rem;
            }
            
            .dashboard-hero p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 767.98px) {
            .dashboard-hero {
                padding: 60px 0 40px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Rapid Rescue</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="user-dashboard.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="medical-profile.html">Medical Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="emergency-request.html">Request Ambulance</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedback.html">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="dashboard-hero text-white">
        <div class="container">
            <h1>Welcome Back, John Doe</h1>
            <p>Your emergency medical services dashboard</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar-card">
                    <div class="sidebar-header">
                        <h5 class="mb-0">User Menu</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="user-dashboard.html" class="list-group-item list-group-item-action active">Dashboard</a>
                        <a href="medical-profile.html" class="list-group-item list-group-item-action">Medical Profile</a>
                        <a href="emergency-request.html" class="list-group-item list-group-item-action">Request Ambulance</a>
                        <a href="#" class="list-group-item list-group-item-action">Request History</a>
                        <a href="feedback.html" class="list-group-item list-group-item-action">Give Feedback</a>
                        <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="dashboard-card">
                    <div class="dashboard-header">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <strong>Last Request:</strong> No recent emergency requests
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon">
                                        <i class="fas fa-ambulance"></i>
                                    </div>
                                    <h5>Request Ambulance</h5>
                                    <p>Request emergency or non-emergency ambulance service</p>
                                    <a href="emergency-request.html" class="btn btn-dashboard">Request Now</a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="feature-card">
                                    <div class="feature-icon">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <h5>Medical Profile</h5>
                                    <p>Update your medical history and emergency contacts</p>
                                    <a href="medical-profile.html" class="btn btn-dashboard">Update Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <div class="dashboard-header">
                        <h5 class="mb-0">Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Request Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center">No recent activities</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2023 Rapid Rescue. All rights reserved. <a href="privacy.html" class="text-white">Privacy Policy</a> | <a href="terms.html" class="text-white">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.sidebar-card, .dashboard-card, .feature-card');
            
            cards.forEach((card, index) => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(30px)';
                card.style.transitionDelay = `${index * 0.1}s`;
                
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = 'translateY(0)';
                }, 100);
            });
        });
    </script>
</body>
</html>