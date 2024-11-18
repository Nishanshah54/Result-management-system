@extends('app')
@section('section-title','Enter scores')
@section('main-section')
    <div class="row">
        @include('Layout.Nav')
        <main class="col-md-10">
            <h2 class="text-center mb-4">Settings</h2>

    <!-- Account Information -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Account Information</div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username" value="nishanshah">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" value="nishanshah@example.com">
                </div>
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" value="Nishan Shah">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" value="9824113419">
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Change Password -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Change Password</div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="currentPassword" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                </div>
                <div class="col-md-6">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                </div>
                <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning">Update Password</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Notification Settings -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Notification Settings</div>
        <div class="card-body">
            <form>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                    <label class="form-check-label" for="emailNotifications">
                        Receive notifications via Email
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="smsNotifications">
                    <label class="form-check-label" for="smsNotifications">
                        Receive notifications via SMS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="appNotifications" checked>
                    <label class="form-check-label" for="appNotifications">
                        Receive notifications in App
                    </label>
                </div>
                <div class="col-12 d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Save Notification Preferences</button>
                </div>
            </form>
        </div>
    </div>

        </main>
    </div>
@endsection