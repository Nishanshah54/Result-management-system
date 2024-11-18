@extends('app')
@section('section-title','ReportPage')
@section('main-section')
    <div class="row">
        @include('Layout.Nav')
        <main class="col-md-10">
            <h2 class="text-center mb-4">Generate and View Reports</h2>

            <!-- Report Filters -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">Report Filters</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="reportType" class="form-label">Report Type</label>
                            <select class="form-select" id="reportType">
                                <option selected>Select Report Type</option>
                                <option value="overall">Overall Performance</option>
                                <option value="semester">Semester-wise Performance</option>
                                <option value="subject">Subject-wise Analysis</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester">
                                <option selected>All Semesters</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <!-- Add more semesters as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject">
                                <option selected>All Subjects</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="physics">Physics</option>
                                <option value="chemistry">Chemistry</option>
                                <!-- Add more subjects as needed -->
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Generate Report</button>
                        </div>
                    </form>
                </div>
            </div>
        
            <!-- Report Table -->
            <h4 class="mb-3">Report Results</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Subject</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Report Data -->
                        <tr>
                            <td>1001</td>
                            <td>John Doe</td>
                            <td>Semester 1</td>
                            <td>Mathematics</td>
                            <td>85</td>
                            <td>A</td>
                            <td>Pass</td>
                        </tr>
                        <tr>
                            <td>1002</td>
                            <td>Jane Smith</td>
                            <td>Semester 2</td>
                            <td>Physics</td>
                            <td>78</td>
                            <td>B+</td>
                            <td>Pass</td>
                        </tr>
                        <tr>
                            <td>1003</td>
                            <td>Bob Johnson</td>
                            <td>Semester 1</td>
                            <td>Chemistry</td>
                            <td>65</td>
                            <td>B</td>
                            <td>Pass</td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>
            </div>
            

        </main>
    </div>
@endsection