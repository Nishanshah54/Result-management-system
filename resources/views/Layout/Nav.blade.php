
    <!-- Sidebar Navigation -->
    <nav class="col-md-2 sidebar d-flex flex-column">
        <h2 class="text-center">Dashboard</h2>
        
        <ul class="nav flex-column">
            <!-- Active Link -->
            <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('results')}}" role="button" aria-expanded="false">Results</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('viewRes')}}">View Results</a></li>
                    <li><a class="dropdown-item" href="{{route('EnterScores')}}">Enter Scores</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('ResVerify')}}">Verify Results</a></li>
                </ul>
            </li>

            <!-- Additional Links -->
            <li class="nav-item">
                <a href="{{route('request')}}" class="nav-link">Requests</a>
            </li>
            <li class="nav-item">
                <a href="{{route('Report')}}" class="nav-link">Reports</a>
            </li>
            <li class="nav-item">
                <a href="{{route('Setting')}}" class="nav-link">Settings</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help & Support</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </nav>
