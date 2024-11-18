@extends('app')
@section('section-title','ViewResult')
@section('main-section')
<div class="row">
    @include('Layout.Nav')
    <div class="col-md-10">
        <h2 class="text-center mb-4">View Student Results</h2>
    
        <!-- Search Form -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Search Results</div>
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
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- Results Table -->
        <h4 class="mb-3">Results</h4>
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
                    <!-- Example Rows -->
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
                    <tr>
                        <td>English</td>
                        <td>48</td>
                        <td>D</td>
                        <td>Failed</td>
                    </tr>
                    <!-- Add more rows as necessary -->
                </tbody>
            </table>
        </div>


    </div>

</div>
    
@endsection