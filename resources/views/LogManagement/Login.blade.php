@extends('app')
@section('section-title','Login')
@section('main-section')
<body class="bg-light">

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-6 col-lg-4">
        <!-- Login Form Card -->
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h3>Login</h3>
                <p>Result Management System</p>
            </div>
            <div class="card-body">
                <!-- Login Form -->
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Forgot your password? <a href="#">Reset here</a></small>
            </div>
        </div>
    </div>
</div>

    
@endsection