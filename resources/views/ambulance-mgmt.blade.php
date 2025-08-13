<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance Management | Rapid Rescue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <style>
        :root {
            --primary-color: #e63946;
            --secondary-color: #1d3557;
            --accent-color: #a8dadc;
            --light-color: #f1faee;
            --dark-color: #457b9d;
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
        
        .nav-link {
            font-weight: 500;
        }
        
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: none;
            margin-bottom: 20px;
        }
        
        .card-header {
            background-color: var(--secondary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
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
        
        .badge {
            font-weight: 500;
            padding: 5px 10px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #d62839;
            border-color: #d62839;
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
        
        .status-maintenance {
            background-color: #dc354520;
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box .form-control {
            padding-left: 40px;
            border-radius: 20px;
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 12px;
            color: #6c757d;
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
                    <li class="nav-item"><a class="nav-link" href="admin-dashboard.html"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="ambulance-mgmt.html"><i class="fas fa-ambulance me-1"></i> Ambulances</a></li>
                    <li class="nav-item"><a class="nav-link" href="driver-mgmt.html"><i class="fas fa-user-md me-1"></i> Drivers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-list me-1"></i> Requests</a></li>
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
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Admin Avatar">
                        <h5>Admin User</h5>
                        <p class="text-muted small">Administrator</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin-dashboard.html">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="ambulance-mgmt.html">
                                <i class="fas fa-ambulance me-2"></i> Ambulance Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="driver-mgmt.html">
                                <i class="fas fa-user-md me-2"></i> Driver/EMT Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-list me-2"></i> Emergency Requests
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users me-2"></i> User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar me-2"></i> Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fas fa-ambulance me-2"></i>Ambulance Management</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary me-2">
                            <i class="fas fa-plus me-1"></i> Add Ambulance
                        </button>
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Print</button>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h5 class="mb-0">Ambulance Fleet</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="search-box">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="form-control" placeholder="Search ambulances...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Ambulance ID</th>
                                                <th>Vehicle Number</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Current Location</th>
                                                <th>Assigned Driver</th>
                                                <th>Last Maintenance</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#AMB-005</td>
                                                <td>MH 01 AB 1234</td>
                                                <td>Advanced Life Support</td>
                                                <td><span class="status-badge status-oncall">On Call</span></td>
                                                <td>123 Main St</td>
                                                <td>John Smith</td>
                                                <td>15 Jun 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#AMB-004</td>
                                                <td>MH 01 CD 5678</td>
                                                <td>Basic Life Support</td>
                                                <td><span class="status-badge status-available">Available</span></td>
                                                <td>Station 2</td>
                                                <td>Sarah Johnson</td>
                                                <td>20 Jun 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#AMB-003</td>
                                                <td>MH 01 EF 9012</td>
                                                <td>Neonatal</td>
                                                <td><span class="status-badge status-available">Available</span></td>
                                                <td>Central Depot</td>
                                                <td>Michael Brown</td>
                                                <td>10 Jun 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#AMB-002</td>
                                                <td>MH 01 GH 3456</td>
                                                <td>Advanced Life Support</td>
                                                <td><span class="status-badge status-maintenance">Maintenance</span></td>
                                                <td>Service Center</td>
                                                <td>-</td>
                                                <td>25 Jun 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#AMB-001</td>
                                                <td>MH 01 IJ 7890</td>
                                                <td>Basic Life Support</td>
                                                <td><span class="status-badge status-available">Available</span></td>
                                                <td>Station 1</td>
                                                <td>Robert Wilson</td>
                                                <td>5 Jun 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <nav aria-label="Page navigation" class="mt-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Ambulance Status Distribution</h5>
                            </div>
                            <div class="card-body">
                                <canvas class="my-4 w-100" id="statusChart" width="500" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-tools me-2"></i>Maintenance Alerts</h5>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-warning">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>#AMB-002</strong> - Due for routine maintenance
                                        </div>
                                        <small>2 days overdue</small>
                                    </div>
                                </div>
                                <div class="alert alert-info">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>#AMB-005</strong> - Oil change needed
                                        </div>
                                        <small>Due in 5 days</small>
                                    </div>
                                </div>
                                <div class="alert alert-secondary">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>#AMB-001</strong> - Annual inspection coming up
                                        </div>
                                        <small>Due in 2 weeks</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2023 Rapid Rescue. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add Ambulance Modal -->
    <div class="modal fade" id="addAmbulanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Ambulance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Number</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Ambulance Type</label>
                                <select class="form-select" required>
                                    <option value="">Select type</option>
                                    <option>Basic Life Support</option>
                                    <option>Advanced Life Support</option>
                                    <option>Neonatal</option>
                                    <option>Mobile ICU</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Manufacturer</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Model</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Year</label>
                                <input type="number" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Base Station</label>
                                <select class="form-select" required>
                                    <option value="">Select station</option>
                                    <option>Station 1 - Central</option>
                                    <option>Station 2 - North</option>
                                    <option>Station 3 - South</option>
                                    <option>Station 4 - East</option>
                                    <option>Station 5 - West</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Equipment</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Ambulance</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Status Distribution Chart
            var statusCtx = document.getElementById('statusChart').getContext('2d');
            var statusChart = new Chart(statusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Available', 'On Call', 'Maintenance'],
                    datasets: [{
                        data: [3, 1, 1],
                        backgroundColor: [
                            '#28a745',
                            '#ffc107',
                            '#dc3545'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });

            // Initialize modal for add ambulance button
            var addAmbulanceBtn = document.querySelector('.btn-primary[data-bs-target="#addAmbulanceModal"]');
            if (addAmbulanceBtn) {
                addAmbulanceBtn.addEventListener('click', function() {
                    var modal = new bootstrap.Modal(document.getElementById('addAmbulanceModal'));
                    modal.show();
                });
            }
        });
    </script>
</body>
</html>