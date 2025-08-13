<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Dashboard | Rapid Rescue</title>
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
        
        .driver-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--accent-color);
        }
        
        .profile-card {
            text-align: center;
            padding: 20px;
        }
        
        .quick-actions .btn {
            margin: 5px;
            min-width: 120px;
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
                    <li class="nav-item"><a class="nav-link active" href="driver-dashboard.html"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="driver-schedule.html"><i class="fas fa-calendar-alt me-1"></i> Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="driver-profile.html"><i class="fas fa-user-circle me-1"></i> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-sign-out-alt me-1"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <div class="profile-card">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="driver-avatar mb-3" alt="Driver Avatar">
                        <h4>John Smith</h4>
                        <p class="text-muted">Driver ID: #DRV-1005</p>
                        <span class="status-badge status-oncall">On Call</span>
                    </div>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="driver-dashboard.html">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('driver.requests')); ?>">
                                <i class="fas fa-warning me-2"></i> Requests
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fas fa-tachometer-alt me-2"></i>Driver Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-download me-1"></i> Export
                            </button>
                        </div>
                    </div>
                </div>

                <div class="alert alert-warning">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Training Required:</strong> Your annual safety training is due in 14 days.
                        </div>
                        <a href="#" class="btn btn-sm btn-warning">Complete Now</a>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-user-circle me-2"></i>My Profile</h5>
                            </div>
                            <div class="card-body text-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="driver-avatar mb-3" alt="Driver Avatar">
                                <h4>John Smith</h4>
                                <p class="text-muted">Driver ID: #DRV-1005</p>
                                <span class="status-badge status-oncall mb-3">On Call</span>
                                
                                <div class="quick-actions mt-3">
                                    <a href="driver-profile.html" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit me-1"></i> Edit Profile
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-qrcode me-1"></i> My Badge
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-ambulance me-2"></i>My Ambulance</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="fas fa-ambulance fa-4x text-danger mb-2"></i>
                                    <h4>#AMB-005</h4>
                                    <p class="text-muted">Ford F-450 Type III</p>
                                </div>
                                
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Last Inspection
                                        <span class="badge bg-success rounded-pill">05/15/2023</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Mileage
                                        <span class="badge bg-primary rounded-pill">42,387</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fuel Level
                                        <span class="badge bg-warning rounded-pill">58%</span>
                                    </li>
                                </ul>
                                
                                <div class="quick-actions mt-3 text-center">
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-exclamation-triangle me-1"></i> Report Issue
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-calendar-alt me-2"></i>My Schedule</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h4>Current Shift</h4>
                                    <p class="lead">07:00 - 19:00</p>
                                    <span class="badge bg-info">Day Shift</span>
                                </div>
                                
                                <div class="calendar-widget">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>T</th>
                                                <th>W</th>
                                                <th>T</th>
                                                <th>F</th>
                                                <th>S</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-muted">28</td>
                                                <td class="text-muted">29</td>
                                                <td class="text-muted">30</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td class="table-primary"><strong>9</strong></td>
                                                <td>10</td>
                                                <td>11</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>16</td>
                                                <td>17</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>27</td>
                                                <td>28</td>
                                                <td>29</td>
                                                <td>30</td>
                                                <td>31</td>
                                                <td class="text-muted">1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="text-center mt-2">
                                    <a href="driver-schedule.html" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-calendar me-1"></i> View Full Schedule
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0"><i class="fas fa-bell me-2"></i>Notifications</h5>
                                <span class="badge bg-danger">3 New</span>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">New Shift Available</h6>
                                            <small>1 hour ago</small>
                                        </div>
                                        <p class="mb-1">Extra shift available on Friday, June 11</p>
                                        <small>Click to accept or decline</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Vehicle Maintenance</h6>
                                            <small>3 hours ago</small>
                                        </div>
                                        <p class="mb-1">Your assigned ambulance is due for oil change</p>
                                        <small>Schedule with maintenance</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Payroll Update</h6>
                                            <small>1 day ago</small>
                                        </div>
                                        <p class="mb-1">Your latest paycheck has been processed</p>
                                        <small>View details</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card emergency-alert">
                            <div class="card-header bg-danger">
                                <h5 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Emergency Dispatch</h5>
                            </div>
                            <div class="card-body text-center">
                                <div class="mb-4">
                                    <i class="fas fa-ambulance fa-4x text-danger mb-3"></i>
                                    <h3>ACTIVE EMERGENCY</h3>
                                    <p class="lead">Priority: <span class="text-danger">Code 3</span></p>
                                </div>
                                
                                <div class="alert alert-info text-start">
                                    <h5><i class="fas fa-map-marker-alt me-2"></i>Location</h5>
                                    <p>1234 Main Street, Downtown<br>
                                    Apartment 5B, 3rd floor</p>
                                    
                                    <h5 class="mt-3"><i class="fas fa-info-circle me-2"></i>Details</h5>
                                    <p>45yo male, chest pain, difficulty breathing<br>
                                    Patient is conscious but in distress</p>
                                </div>
                                
                                <div class="d-grid gap-2">
                                    <button class="btn btn-lg btn-danger">
                                        <i class="fas fa-phone-alt me-2"></i> Call Dispatch
                                    </button>
                                    <button class="btn btn-lg btn-success">
                                        <i class="fas fa-check-circle me-2"></i> Mark En Route
                                    </button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\RapidRescue\resources\views/driver-dashboard.blade.php ENDPATH**/ ?>