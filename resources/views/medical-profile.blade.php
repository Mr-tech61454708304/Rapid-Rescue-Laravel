<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Profile | Rapid Rescue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="index.html">Rapid Rescue</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="user-dashboard.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="medical-profile.html">Medical Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="emergency-request.html">Request Ambulance</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header bg-danger text-white">
                        User Menu
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="user-dashboard.html" class="list-group-item list-group-item-action">Dashboard</a>
                        <a href="medical-profile.html" class="list-group-item list-group-item-action active">Medical Profile</a>
                        <a href="emergency-request.html" class="list-group-item list-group-item-action">Request Ambulance</a>
                        <a href="#" class="list-group-item list-group-item-action">Request History</a>
                        <a href="feedback.html" class="list-group-item list-group-item-action">Give Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Medical Profile</h5>
                    </div>
                    <div class="card-body">
                        <form id="medicalProfileForm">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h6>Basic Information</h6>
                                    <div class="mb-3">
                                        <label for="bloodType" class="form-label">Blood Type</label>
                                        <select class="form-select" id="bloodType">
                                            <option value="">Select blood type</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="height" class="form-label">Height (cm)</label>
                                        <input type="number" class="form-control" id="height" min="100" max="250">
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight (kg)</label>
                                        <input type="number" class="form-control" id="weight" min="20" max="200">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6>Emergency Contacts</h6>
                                    <div class="mb-3">
                                        <label for="emergencyContact1" class="form-label">Primary Contact</label>
                                        <input type="text" class="form-control" id="emergencyContact1" placeholder="Name">
                                        <input type="tel" class="form-control mt-2" id="emergencyPhone1" placeholder="Phone Number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emergencyContact2" class="form-label">Secondary Contact</label>
                                        <input type="text" class="form-control" id="emergencyContact2" placeholder="Name">
                                        <input type="tel" class="form-control mt-2" id="emergencyPhone2" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6>Medical Conditions</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="diabetes">
                                    <label class="form-check-label" for="diabetes">Diabetes</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hypertension">
                                    <label class="form-check-label" for="hypertension">Hypertension</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="asthma">
                                    <label class="form-check-label" for="asthma">Asthma</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="heartDisease">
                                    <label class="form-check-label" for="heartDisease">Heart Disease</label>
                                </div>
                                <div class="mb-3">
                                    <label for="otherConditions" class="form-label">Other Conditions</label>
                                    <textarea class="form-control" id="otherConditions" rows="2" placeholder="List any other medical conditions"></textarea>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6>Allergies</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="penicillin">
                                    <label class="form-check-label" for="penicillin">Penicillin</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="aspirin">
                                    <label class="form-check-label" for="aspirin">Aspirin</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="latex">
                                    <label class="form-check-label" for="latex">Latex</label>
                                </div>
                                <div class="mb-3">
                                    <label for="otherAllergies" class="form-label">Other Allergies</label>
                                    <textarea class="form-control" id="otherAllergies" rows="2" placeholder="List any other allergies"></textarea>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <h6>Current Medications</h6>
                                <textarea class="form-control" id="currentMedications" rows="3" placeholder="List all current medications with dosages"></textarea>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="reset" class="btn btn-secondary me-md-2">Reset</button>
                                <button type="submit" class="btn btn-danger">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Why is this important?</h5>
                    </div>
                    <div class="card-body">
                        <p>Your medical profile helps emergency responders provide you with the best possible care during an emergency. The information you provide here will be immediately available to EMTs when you request an ambulance through Rapid Rescue.</p>
                        <ul>
                            <li>Allergies help avoid harmful medications</li>
                            <li>Medical conditions inform treatment decisions</li>
                            <li>Current medications prevent dangerous interactions</li>
                            <li>Emergency contacts help notify your loved ones</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2023 Rapid Rescue. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="js/medical.js"></script>
</body>
</html>