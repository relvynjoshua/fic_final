<!-- resources/views/news-create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create Media</h1>
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token for security -->
                    <!-- News Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">News Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter news title" required>
                    </div>

                    <!-- News Body -->
                    <div class="mb-3">
                        <label for="body" class="form-label">News Body</label>
                        <textarea class="form-control" id="body" name="body" rows="6" placeholder="Enter news content" required></textarea>
                    </div>

                    <!-- News Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">News Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create News</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
