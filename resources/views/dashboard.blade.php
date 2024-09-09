<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">
                                <span data-feather="file"></span>
                                Pages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('/create-news') }}">
                                <span data-feather="shopping-cart"></span>
                                Media
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">
                                <span data-feather="users"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Analytics
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header bg-primary text-white">Pages</div>
                            <div class="card-body">
                                <h5 class="card-title">Manage your website pages</h5>
                                <p class="card-text">Add, edit, or delete pages from your site.</p>
                                <a href="#" class="btn btn-primary">Manage Pages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header bg-success text-white">Media</div>
                            <div class="card-body">
                                <h5 class="card-title">Manage media files</h5>
                                <p class="card-text">Upload and organize images, videos, and files.</p>
                                <a href="#" class="btn btn-success">Manage Media</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header bg-warning text-white">Users</div>
                            <div class="card-body">
                                <h5 class="card-title">User Management</h5>
                                <p class="card-text">Manage users and their roles on your platform.</p>
                                <a href="#" class="btn btn-warning">Manage Users</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
