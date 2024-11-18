@extends('app')
@section('section-title','Results Management')
@section('main-section')
<div class="row">
    

@include('Layout.Nav')
    <main class="col-md-10">
    <!-- Page Title -->
    <h2 class="text-center mb-4">Results Management System</h2>
    
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="resultTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="student-tab" data-bs-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="admin-tab" data-bs-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin/Teacher View</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content mt-3" id="resultTabsContent">
        <!-- Student View -->
        <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
            <h4>View Results</h4>
            <form class="row g-3 mb-4">
                <div class="col-md-4">
                    <label for="studentId" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID">
                </div>
                <div class="col-md-4">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="semester">
                        <option selected>Select Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">View Result</button>
                </div>
            </form>

            <!-- Results Table (Example Data) -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Subject</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>85</td>
                            <td>A</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Physics</td>
                            <td>78</td>
                            <td>B+</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td>65</td>
                            <td>B</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>History</td>
                            <td>55</td>
                            <td>C</td>
                            <td>Passed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Admin/Teacher View -->
        <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
            <h4>Manage Results</h4>
            <form class="row g-3 mb-4">
                <div class="col-md-4">
                    <label for="class" class="form-label">Class</label>
                    <select class="form-select" id="class">
                        <option selected>Select Class</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="subject" class="form-label">Subject</label>
                    <select class="form-select" id="subject">
                        <option selected>Select Subject</option>
                        <option value="math">Mathematics</option>
                        <option value="science">Science</option>
                        <option value="history">History</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <!-- Editable Results Table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>John Doe</td>
                            <td><input type="number" class="form-control" value="85"></td>
                            <td>A</td>
                            <td><button class="btn btn-success btn-sm">Update</button></td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Jane Smith</td>
                            <td><input type="number" class="form-control" value="78"></td>
                            <td>B+</td>
                            <td><button class="btn btn-success btn-sm">Update</button></td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Mike Johnson</td>
                            <td><input type="number" class="form-control" value="65"></td>
                            <td>B</td>
                            <td><button class="btn btn-success btn-sm">Update</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</div>
  
@endsection