<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Emergency Request - Rapid Rescue</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { background-color: #f8f9fa; }
    .hero { background-color: #dc3545; color: white; padding: 60px 0; }
    .hero h1 { font-weight: 700; }
    .form-card { border-radius: 1rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    .footer { background-color: #343a40; color: white; }
    .footer a { color: white; text-decoration: none; }
    .footer a:hover { text-decoration: underline; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"><i class="fas fa-ambulance me-2"></i>Rapid Rescue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ambulances</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Track</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Emergency Request</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user me-1"></i>Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<header class="hero text-center">
  <div class="container">
    <h1>Emergency Ambulance Request</h1>
    <p class="lead">Immediate medical assistance when you need it most</p>
  </div>
</header>

<!-- Emergency Request Form -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card form-card p-4">
          <h4 class="card-title mb-4 text-center fw-bold text-danger"><i class="fas fa-ambulance me-2"></i>Request Emergency Ambulance</h4>

          <?php if(session('success')): ?>
            <div class="alert alert-success">
              <?php echo e(session('success')); ?>

            </div>
          <?php endif; ?>

          <form method="POST" action="<?php echo e(route('emergency.request.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
              <label class="form-label fw-semibold">Request Type</label>
              <select class="form-select" name="request_type" required>
                  <option value="">Select request type</option>
                  <option value="emergency">Emergency (Life-threatening)</option>
                  <option value="non_emergency">Non-Emergency (Transport)</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Patient Name</label>
              <input type="text" name="patient_name" class="form-control" required>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Phone Number</label>
                  <input type="tel" name="phone_number" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Patient Age</label>
                  <input type="number" name="patient_age" class="form-control" min="1" max="120">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Pickup Address</label>
              <textarea name="pickup_address" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Preferred Hospital (Optional)</label>
              <input type="text" name="preferred_hospital" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Medical Notes (Optional)</label>
              <textarea name="medical_notes" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" name="confirmed" value="1" id="confirm" required>
              <label class="form-check-label" for="confirm">I confirm that this is a genuine emergency request</label>
            </div>

            <button type="submit" class="btn btn-danger w-100 py-2 fw-bold">Request Ambulance Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <h5 class="fw-bold">Rapid Rescue</h5>
        <p>Providing life-saving emergency medical services with speed, care, and professionalism since 2010.</p>
        <div>
          <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="fw-semibold">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h6 class="fw-semibold">Contact</h6>
        <p><i class="fas fa-map-marker-alt me-2"></i>123 Medical Way</p>
        <p><i class="fas fa-phone-alt me-2"></i>(123) 456-7890</p>
        <p><i class="fas fa-envelope me-2"></i>info@rapidrescue.com</p>
        <p><i class="fas fa-clock me-2"></i>24/7 Emergency</p>
      </div>
    </div>

    <div class="text-center border-top pt-3 mt-3">
      &copy; 2023 Rapid Rescue. All rights reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\RapidRescue\resources\views/emergency-request.blade.php ENDPATH**/ ?>