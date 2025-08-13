<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Rescue Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Minimal custom styles only for absolute necessities */
        .sidebar {
            height: 100vh;
            position: fixed;
        }
        .main-content {
            margin-left: 250px;
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white sidebar p-0">
                <div class="p-3">
                    <img src="https://placehold.co/200x60" alt="Rapid Rescue logo with bold red letters and a lightning bolt symbol" class="img-fluid mb-4">
                    <hr class="bg-light">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white active">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-ambulance me-2"></i> Rescue Missions
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-users me-2"></i> Team Members
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-map-marked-alt me-2"></i> Live Tracking
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-chart-line me-2"></i> Analytics
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link text-white">
                                <i class="fas fa-cog me-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                    <hr class="bg-light">
                    <div class="dropdown mt-3">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://placehold.co/40" alt="User profile photo showing a rescue worker in uniform" class="rounded-circle me-2" width="32" height="32">
                            <strong>Rescue Admin</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 main-content p-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between w-100">
                            <div class="d-flex">
                                <button class="navbar-toggler me-2" type="button">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search missions..." aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown me-3">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bell"></i>
                                        <span class="badge bg-danger rounded-pill">3</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">New rescue request from Downtown</a></li>
                                        <li><a class="dropdown-item" href="#">Team member checked in</a></li>
                                        <li><a class="dropdown-item" href="#">System maintenance scheduled</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid mt-4">
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rapid Response Overview</h5>
                                    <p class="card-text">Monitor and manage all emergency response activities in real-time.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row mb-4">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start border-primary border-4 stat-card h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                                Active Missions</div>
                                            <div class="h5 mb-0 fw-bold text-gray-800" id="activeMissions">14</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-urgency fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start border-success border-4 stat-card h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                                Completed Today</div>
                                            <div class="h5 mb-0 fw-bold text-gray-800" id="completedToday">23</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start border-warning border-4 stat-card h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                                Response Time (avg)</div>
                                            <div class="h5 mb-0 fw-bold text-gray-800" id="avgResponseTime">7.2</div>
                                            <div class="text-xs">minutes</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start border-danger border-4 stat-card h-100 py-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col me-2">
                                            <div class="text-xs fw-bold text-danger text-uppercase mb-1">
                                                Team Availability</div>
                                            <div class="h5 mb-0 fw-bold text-gray-800" id="teamAvailability">82%</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts and Maps -->
                    <div class="row mb-4">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 fw-bold">Rescue Mission Activity</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">This Week</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="missionActivityChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 fw-bold">Emergency Types</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Export Data</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="emergencyTypesChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="me-2">
                                            <i class="fas fa-circle text-success"></i> Medical
                                        </span>
                                        <span class="me-2">
                                            <i class="fas fa-circle text-primary"></i> Fire
                                        </span>
                                        <span class="me-2">
                                            <i class="fas fa-circle text-info"></i> Flood
                                        </span>
                                        <span class="me-2">
                                            <i class="fas fa-circle text-warning"></i> Accident
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Missions -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 fw-bold">Recent Missions</h6>
                                    <a href="#" class="btn btn-sm btn-primary">View All</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Location</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Team</th>
                                                    <th>Time</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="recentMissionsBody">
                                                <!-- Will be populated by JavaScript -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Sample data for the Dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Populate recent missions table
            const missions = [
                { id: 'RES-2023-487', location: 'Downtown District', type: 'Medical', status: 'In Progress', team: 'Alpha', time: '12:45 PM' },
                { id: 'RES-2023-486', location: 'Westside Highway', type: 'Accident', status: 'Completed', team: 'Bravo', time: '11:20 AM' },
                { id: 'RES-2023-485', location: 'Central Park', type: 'Medical', status: 'Completed', team: 'Charlie', time: '09:15 AM' },
                { id: 'RES-2023-484', location: 'Industrial Zone', type: 'Fire', status: 'Completed', team: 'Delta', time: '07:30 AM' },
                { id: 'RES-2023-483', location: 'Riverside', type: 'Flood', status: 'Completed', team: 'Alpha', time: 'Yesterday' }
            ];
            
            const missionsBody = document.getElementById('recentMissionsBody');
            missions.forEach(mission => {
                let statusClass = '';
                switch(mission.status) {
                    case 'In Progress': statusClass = 'badge bg-warning'; break;
                    case 'Completed': statusClass = 'badge bg-success'; break;
                    case 'Pending': statusClass = 'badge bg-info'; break;
                    default: statusClass = 'badge bg-secondary';
                }
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${mission.id}</td>
                    <td>${mission.location}</td>
                    <td>${mission.type}</td>
                    <td><span class="${statusClass}">${mission.status}</span></td>
                    <td>${mission.team}</td>
                    <td>${mission.time}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary">Details</button>
                    </td>
                `;
                missionsBody.appendChild(row);
            });
            
            // Mission Activity Chart
            const missionCtx = document.getElementById('missionActivityChart').getContext('2d');
            const missionChart = new Chart(missionCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Missions Completed',
                        data: [12, 19, 15, 24, 22, 18, 14],
                        backgroundColor: 'rgba(78, 115, 223, 0.05)',
                        borderColor: 'rgba(78, 115, 223, 1)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(78, 115, 223, 1)',
                        pointRadius: 3,
                        pointHoverRadius: 5,
                        fill: true
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                }
            });
            
            // Emergency Types Chart
            const emergencyCtx = document.getElementById('emergencyTypesChart').getContext('2d');
            const emergencyChart = new Chart(emergencyCtx, {
                type: 'pie',
                data: {
                    labels: ['Medical', 'Fire', 'Flood', 'Accident'],
                    datasets: [{
                        data: [42, 23, 15, 20],
                        backgroundColor: ['#1cc88a', '#4e73df', '#36b9cc', '#f6c23e'],
                        hoverBackgroundColor: ['#17a673', '#2e59d9', '#2c9faf', '#dda20a'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    cutout: '65%',
                }
            });
            
            // Simulate real-time updates
            setInterval(() => {
                document.getElementById('activeMissions').textContent = Math.floor(Math.random() * 5) + 12;
                document.getElementById('completedToday').textContent = Math.floor(Math.random() * 8) + 20;
                document.getElementById('avgResponseTime').textContent = (Math.random() * 3 + 5).toFixed(1);
                document.getElementById('teamAvailability').textContent = Math.floor(Math.random() * 15) + 75 + '%';
            }, 5000);
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\RapidRescue\resources\views/admin-dashboard.blade.php ENDPATH**/ ?>