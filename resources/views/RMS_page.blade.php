@extends('app')
@section('section-title','Dashboard')
@section('main-section')
<div class="container mt-5">
    <!-- Page Title -->
    <h1 class="text-center mb-4">Welcome to the Result Management System</h1>
    <p class="text-center mb-5">Access your academic performance securely</p>
 
    <div class="row">
        <!-- Admin and Teacher Login Section -->
        <div class="col-md-4 offset-md-2 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    Admin and Teacher Login
                </div>
                <div class="card-body">
                    <p class="text-center mb-4">Login to manage results and student records.</p>
                    <div class="d-grid gap-2">
                        <a href="{{route('Login')}}" class="btn btn-primary">Admin Login</a>
                        <a href="{{route('Login')}}" class="btn btn-secondary">Teacher Login</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Result View Section -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    Student Result View
                </div>
                <div class="card-body">
                    <p class="text-center mb-4">Enter your details to view your results.</p>
                    <form>
                        <div class="mb-3">
                            <label for="studentID" class="form-label">Student ID</label>
                            <input type="text" class="form-control" id="studentID" placeholder="Enter your Student ID" required>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" placeholder="Enter your Date of Birth" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">View Result</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    
@endsection