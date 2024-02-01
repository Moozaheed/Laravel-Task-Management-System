<!doctype html>
<html lang="en">
<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brain Station 23</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Bootstrap row with content centered -->
    <div class="row justify-content-center mt-5">
        <!-- Bootstrap column for card -->
        <div class="col-lg-4">
            <!-- Bootstrap card component -->
            <div class="card">
                <!-- Card header with title -->
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <!-- Card body with login form -->
                <div class="card-body">
                    <!-- Display error message if exists in session -->
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <!-- Login form with CSRF protection -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <!-- Password input field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <!-- Submit button within a grid container -->
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    <!-- Link to register page -->
                    <div class="text-center">
                        <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
