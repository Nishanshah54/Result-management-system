@extends('app')
@section('section-title','verify Result')
@section('main-section')
    <div class="row">
        @include('Layout.Nav')
        <main class="col-md-10">
            <h2 class="text-center mb-4">Verify Student Results</h2>

            <!-- Search Form -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">Search Results to Verify</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="studentId" class="form-label">Student ID</label>
                            <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID">
                        </div>
                        <div class="col-md-6">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester">
                                <option selected>Select Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <!-- Add more semesters as needed -->
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Fetch Results</button>
                        </div>
                    </form>
                </div>
            </div>
        
            <!-- Results Verification Table -->
            <h4 class="mb-3">Results to Verify</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Subject</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data for Verification -->
                        <tr>
                            <td>Mathematics</td>
                            <td>85</td>
                            <td>A</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-success btn-sm">Approve</button>
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Physics</td>
                            <td>78</td>
                            <td>B+</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-success btn-sm">Approve</button>
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td>65</td>
                            <td>B</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-success btn-sm">Approve</button>
                                <button class="btn btn-danger btn-sm">Reject</button>
                            </td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>
            </div>
            

        </main>
    </div>
@endsection