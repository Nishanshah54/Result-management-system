@extends('app')
@section('main-section')
    <div class="row">
           
        @include('Layout.Nav')
        <main class="col-md-10"> 
            <h2 class="text-center mb-4">Request Management</h2>
    
    <!-- Request Submission Form -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Submit a Request</div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="studentId" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="studentId" placeholder="Enter Student ID">
                </div>
                <div class="col-md-6">
                    <label for="requestType" class="form-label">Request Type</label>
                    <select class="form-select" id="requestType">
                        <option selected>Choose Request Type</option>
                        <option value="re-evaluation">Re-evaluation</option>
                        <option value="grade-improvement">Grade Improvement</option>
                        <option value="feedback">General Feedback</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Enter description of the request"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Requests Table -->
    <h4 class="mb-3">Submitted Requests</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Request ID</th>
                    <th>Student ID</th>
                    <th>Request Type</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Request Rows -->
                <tr>
                    <td>REQ001</td>
                    <td>101</td>
                    <td>Re-evaluation</td>
                    <td>Request for re-evaluation in Mathematics</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td><button class="btn btn-outline-primary btn-sm">View</button></td>
                </tr>
                <tr>
                    <td>REQ002</td>
                    <td>102</td>
                    <td>Grade Improvement</td>
                    <td>Request to improve grades for Physics</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td><button class="btn btn-outline-primary btn-sm">View</button></td>
                </tr>
                <tr>
                    <td>REQ003</td>
                    <td>103</td>
                    <td>General Feedback</td>
                    <td>Feedback regarding examination process</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                    <td><button class="btn btn-outline-primary btn-sm">View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
        </main>
    </div>
@endsection