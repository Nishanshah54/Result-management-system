@extends('app')
@section('section-title','Dashboard')
@section('main-section')


    <div class="row">
        <!-- Sidebar -->
        @include('Layout.Nav')

        <!-- Main Content Area -->
        <main class="col-md-10">
            <!-- Header -->
            <div class="header p-3 mb-4 d-flex justify-content-between align-items-center">
                <input type="text" class="form-control w-50" placeholder="Search for students, classes, or subjects">
                <div class="profile d-flex align-items-center">
                    <span class="me-2">Admin</span>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle">
                </div>
            </div>

            <!-- Overview Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5>Total Students</h5>
                        <p>450</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5>Pending Results</h5>
                        <p>20</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5>Re-evaluation Requests</h5>
                        <p>15</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5>Approved Results</h5>
                        <p>415</p>
                    </div>
                </div>
            </div>

            <!-- Main Panels for Role-Based Content -->
            <div class="row">
                <!-- For Administrator -->
                <div class="col-md-6">
                    <div class="card p-3 mb-4">
                        <h5>Pending Verifications</h5>
                        <p>List of results awaiting approval.</p>
                    </div>
                    <div class="card p-3 mb-4">
                        <h5>Re-evaluation & Update Requests</h5>
                        <p>Overview of re-evaluation and update requests.</p>
                    </div>
                </div>

                <!-- For Teacher -->
                <div class="col-md-6">
                    <div class="card p-3 mb-4">
                        <h5>Class/Subject Selection</h5>
                        <p>Dropdown to select class and subject for score entry.</p>
                    </div>
                    <div class="card p-3 mb-4">
                        <h5>Student List</h5>
                        <p>Editable list for entering or updating scores.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>





    
@endsection