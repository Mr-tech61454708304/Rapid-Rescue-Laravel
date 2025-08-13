<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-warning text-white fw-bold fs-4 text-center">
                    Edit Movie
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 

                        <div class="mb-3">
                            <label for="title" class="form-label">Movie Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="poster" class="form-label">Poster Image</label><br>
                            @if($movie->poster)
                                <img src="{{ asset('storage/' . $movie->poster) }}" class="img-thumbnail mb-2" width="200">
                            @endif
                            <input type="file" class="form-control" id="poster" name="poster" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Movie Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ $movie->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release Date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date }}">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Update Movie</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
