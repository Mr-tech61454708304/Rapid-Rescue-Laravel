<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMT Dashboard | Rapid Rescue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #e63946;
            --secondary-color: #1d3557;
            --accent-color: #a8dadc;
            --light-color: #f1faee;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .sidebar {
            background-color: var(--secondary-color);
            color: white;
            min-height: calc(100vh - 56px);
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            margin-bottom: 5px;
            border-radius: 5px;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.1);
            color: white;
        }
        
        .sidebar .nav-link.active {
            font-weight: 600;
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: none;
        }
        
        .card-header {
            background-color: var(--secondary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
        }
        
        .status-badge {
            padding: 8px 12px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        .status-available {
            background-color: #28a74520;
            color: #28a745;
            border: 1px solid #28a745;
        }
        
        .status-oncall {
            background-color: #ffc10720;
            color: #ffc107;
            border: 1px solid #ffc107;
        }
        
        .status-offduty {
            background-color: #6c757d20;
            color: #6c757d;
            border: 1px solid #6c757d;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .emergency-alert {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0); }
            100% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0); }
        }
        
        .floating-ambulance {
            position: fixed;
            right: 5%;
            bottom: 15%;
            width: 35vw;
            max-width: 500px;
            min-width: 300px;
            opacity: 0.7;
            animation: float 6s ease-in-out infinite;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3)) 
                    brightness(1.1) 
                    contrast(0.9);
            z-index: -1;
            mix-blend-mode: multiply;
            pointer-events: none;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .shift-indicator {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .shift-active {
            background-color: #28a745;
        }
        
        .shift-inactive {
            background-color: #6c757d;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-ambulance me-2"></i>Rapid Rescue
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="emt-dashboard.html"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="emt-schedule.html"><i class="fas fa-calendar-alt me-1"></i> Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="emt-certs.html"><i class="fas fa-certificate me-1"></i> Certifications</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-sign-out-alt me-1"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="profile-avatar mb-2" alt="EMT Avatar">
                        <h5>Sarah Johnson</h5>
                        <p class="text-muted small">EMT-Paramedic</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-sm btn-outline-light toggle-shift-btn">
                                <span class="shift-indicator shift-active"></span> On Duty
                            </button>
                        </div>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="emt-dashboard.html">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="emt-schedule.html">
                                <i class="fas fa-calendar-alt me-2"></i> My Schedule
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="emt-certs.html">
                                <i class="fas fa-certificate me-2"></i> Certifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="emt-incidents.html">
                                <i class="fas fa-file-medical me-2"></i> Incident Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="emt-equipment.html">
                                <i class="fas fa-briefcase-medical me-2"></i> Equipment Checklist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="emt-profile.html">
                                <i class="fas fa-user-cog me-2"></i> Profile Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fas fa-tachometer-alt me-2"></i>EMT Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Today: <span id="current-date">June 15, 2023</span></button>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-user me-2"></i>My Status</h5>
                            </div>
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <span class="status-badge status-oncall">On Call</span>
                                </div>
                                <p class="mb-1"><strong>Assigned Unit:</strong> #AMB-005</p>
                                <p class="mb-1"><strong>Partner:</strong> Michael Brown (Driver)</p>
                                <p class="mb-1"><strong>Shift:</strong> 07:00 - 19:00</p>
                                <hr>
                                <button class="btn btn-sm btn-outline-primary me-2">Update Status</button>
                                <button class="btn btn-sm btn-outline-secondary">Request Backup</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Today's Schedule</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>Currently on active duty
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-ambulance me-2"></i>Unit #AMB-005
                                            <br><small class="text-muted">Ford Transit - ALS</small>
                                        </div>
                                        <span class="badge bg-primary rounded-pill">Primary</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-map-marker-alt me-2"></i>Station 5
                                            <br><small class="text-muted">Downtown District</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-clock me-2"></i>Shift Hours
                                            <br><small class="text-muted">7:00 AM - 7:00 PM</small>
                                        </div>
                                        <span class="badge bg-success rounded-pill">Active</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 emergency-alert">
                            <div class="card-header bg-danger">
                                <h5 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Active Emergency</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cardiac Arrest</h5>
                                <p class="card-text">
                                    <i class="fas fa-map-marker-alt me-2"></i> 1245 Main St, Downtown<br>
                                    <i class="fas fa-user me-2"></i> 62 y/o Male<br>
                                    <i class="fas fa-clock me-2"></i> Dispatched 2 minutes ago
                                </p>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-light">
                                        <i class="fas fa-directions me-2"></i> Navigate to Scene
                                    </button>
                                    <button class="btn btn-outline-light">
                                        <i class="fas fa-file-medical me-2"></i> Begin PCR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Equipment Checklist</h5>
                            </div>
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85% Complete</div>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check1" checked>
                                    <label class="form-check-label" for="check1">AED Functional</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check2" checked>
                                    <label class="form-check-label" for="check2">Oxygen Tank Full</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check3" checked>
                                    <label class="form-check-label" for="check3">Suction Unit Ready</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check4">
                                    <label class="form-check-label" for="check4">Medication Stock Checked</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="check5" checked>
                                    <label class="form-check-label" for="check5">Splints Available</label>
                                </div>
                                <button class="btn btn-sm btn-primary mt-2">Complete Checklist</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-certificate me-2"></i>Certification Status</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>Your EMT-P license expires in 45 days
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        EMT-Paramedic License
                                        <span class="badge bg-warning text-dark">Expires 08/15/2023</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        BLS Certification
                                        <span class="badge bg-success">Current</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        ACLS Certification
                                        <span class="badge bg-success">Current</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        PALS Certification
                                        <span class="badge bg-success">Current</span>
                                    </li>
                                </ul>
                                <button class="btn btn-sm btn-outline-primary mt-3">View All Certifications</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-ambulance me-2"></i>Unit Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6>Unit Details</h6>
                                        <p>
                                            <strong>Unit #:</strong> #AMB-005<br>
                                            <strong>Type:</strong> ALS<br>
                                            <strong>Model:</strong> 2022 Ford Transit<br>
                                            <strong>Mileage:</strong> 12,345 miles<br>
                                            <strong>Last Service:</strong> 05/20/2023
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Team Members</h6>
                                        <div class="d-flex align-items-center mb-2">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="40" height="40">
                                            <div>
                                                <strong>Michael Brown</strong><br>
                                                <small class="text-muted">Driver</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-2" width="40" height="40">
                                            <div>
                                                <strong>Sarah Johnson</strong><br>
                                                <small class="text-muted">EMT-P (You)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Unit Status</h6>
                                        <div class="alert alert-success">
                                            <i class="fas fa-check-circle me-2"></i>All systems operational
                                        </div>
                                        <button class="btn btn-sm btn-outline-secondary me-2">Report Issue</button>
                                        <button class="btn btn-sm btn-outline-primary">Service Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>
    </div>

    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p class="mb-0">&copy; 2023 Rapid Rescue. All rights reserved.</p>
        </div>
    </footer>

    <!-- Emergency Response Modal -->
    <div class="modal fade" id="emergencyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="fas fa-exclamation-triangle me-2"></i>Emergency Dispatch</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <i class="fas fa-clock me-2"></i>Respond within <strong>2 minutes</strong> to acknowledge this call
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6><i class="fas fa-info-circle me-2"></i>Incident Details</h6>
                            <p>
                                <strong>Priority:</strong> Code 3 (Lights & Sirens)<br>
                                <strong>Type:</strong> Cardiac Arrest<br>
                                <strong>Location:</strong> 1245 Main St, Downtown<br>
                                <strong>Cross Streets:</strong> 5th Ave & Main St<br>
                                <strong>Reported:</strong> 2 minutes ago
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="fas fa-user me-2"></i>Patient Information</h6>
                            <p>
                                <strong>Age/Gender:</strong> 62 y/o Male<br>
                                <strong>Condition:</strong> Unconscious, not breathing<br>
                                <strong>History:</strong> Known heart condition<br>
                                <strong>Medications:</strong> Lisinopril, Metoprolol<br>
                                <strong>Allergies:</strong> Penicillin
                            </p>
                        </div>
                    </div>
                    
                    <div class="mb-3">
    <h6><i class="fas fa-map-marked-alt me-2"></i>Location Map</h6>
    <div class="map-container" style="height: 300px; border-radius: 8px; overflow: hidden;">
        <!-- Google Map Embed Placeholder -->
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

                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger btn-lg">
                            <i class="fas fa-ambulance me-2"></i> Accept Call
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-phone me-2"></i> Request Additional Information
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set current date
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', options);
            
            // Toggle shift status
            const toggleShiftBtn = document.querySelector('.toggle-shift-btn');
            toggleShiftBtn.addEventListener('click', function() {
                const indicator = this.querySelector('.shift-indicator');
                if (indicator.classList.contains('shift-active')) {
                    indicator.classList.remove('shift-active');
                    indicator.classList.add('shift-inactive');
                    this.innerHTML = '<span class="shift-indicator shift-inactive"></span> Off Duty';
                } else {
                    indicator.classList.remove('shift-inactive');
                    indicator.classList.add('shift-active');
                    this.innerHTML = '<span class="shift-indicator shift-active"></span> On Duty';
                }
            });
            
            // Simulate emergency call after 3 seconds (for demo)
            setTimeout(() => {
                var emergencyModal = new bootstrap.Modal(document.getElementById('emergencyModal'));
                emergencyModal.show();
            }, 3000);
        });
    </script>
</body>
</html>