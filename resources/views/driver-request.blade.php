<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Emergency Requests - Rapid Rescue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <h3 class="mb-4 text-danger fw-bold"><i class="fas fa-ambulance me-2"></i>All Emergency Requests</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="table-danger">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Patient Name</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Pickup Address</th>
                <th>Hospital</th>
                <th>Medical Notes</th>
                <th>Confirmed</th>
                <th>Requested At</th>
                <th>Accept</th>
                <th>Cancel</th>
            </tr>
        </thead>
        <tbody>
            @forelse($requests as $req)
                <tr>
                    <td>{{ $req->id }}</td>
                    <td>{{ ucfirst($req->request_type) }}</td>
                    <td>{{ $req->patient_name }}</td>
                    <td>{{ $req->phone_number }}</td>
                    <td>{{ $req->patient_age ?? '-' }}</td>
                    <td>{{ $req->pickup_address }}</td>
                    <td>{{ $req->preferred_hospital ?? '-' }}</td>
                    <td>{{ $req->medical_notes ?? '-' }}</td>
                    <td>{{ $req->confirmed ? 'Yes' : 'No' }}</td>
                    <td>{{ $req->created_at->format('d M Y H:i') }}</td>
                    <td><a href="" class="btn btn-success">Accept</a></td>
                    <td><a href="" class="btn btn-warning">Cancel</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No emergency requests found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
