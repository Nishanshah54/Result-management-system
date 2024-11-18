@extends('app')
@section('section-title','Enter scores')
@section('main-section')
    <div class="row">
        @include('Layout.Nav')
        <main class="col-md-10">
            <h2 class="text-center mb-4">Enter Student Scores</h2>
    
    <!-- Student and Semester Selection Form -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Student Details</div>
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
                    <button type="submit" class="btn btn-primary">Fetch Subjects</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Enter Scores Table -->
    <h4 class="mb-3">Enter Scores for Subjects</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Subject</th>
                    <th>Score</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Input Rows -->
                <tr>
                    <td>Mathematics</td>
                    <td><input type="number" class="form-control" placeholder="Enter Score"></td>
                    <td>
                        <select class="form-select">
                            <option selected>Select Grade</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                    <td><button class="btn btn-success btn-sm">Save</button></td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td><input type="number" class="form-control" placeholder="Enter Score"></td>
                    <td>
                        <select class="form-select">
                            <option selected>Select Grade</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                    <td><button class="btn btn-success btn-sm">Save</button></td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td><input type="number" class="form-control" placeholder="Enter Score"></td>
                    <td>
                        <select class="form-select">
                            <option selected>Select Grade</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                    <td><button class="btn btn-success btn-sm">Save</button></td>
                </tr>
                <!-- Add more subjects as necessary -->
            </tbody>
        </table>
    </div>


        </main>
    </div>
@endsection