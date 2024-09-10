<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

header {
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav {
    display: flex;
    align-items: center;
}

.logo {
    font-weight: bold;
    font-size: 1.2rem;
    margin-right: 2rem;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 1rem;
}

nav ul li a {
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.profile {
    display: flex;
    align-items: center;
}

.profile i {
    margin-right: 1rem;
}

.profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

main {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

h1 {
    margin-top: 0;
}

.filters {
    display: flex;
    margin-bottom: 2rem;
}

.filter-btn {
    background-color: white;
    border: 1px solid #ddd;
    padding: 0.5rem 1rem;
    margin-right: 1rem;
    border-radius: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.filter-btn i {
    margin-left: 0.5rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f1f1f1;
}

.status {
    padding: 0.2rem 0.5rem;
    border-radius: 3px;
    font-size: 0.9rem;
    display: inline-block;
    margin-right: 1rem;
}

.in-progress {
    background-color: #007bff;
    color: white;
}

.needs-review {
    background-color: #ffc107;
    color: white;
}

.late {
    background-color: #dc3545;
    color: white;
}

.done {
    background-color: #28a745;
    color: white;
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .filters {
        flex-direction: column;
    }
    
    .filter-btn {
        margin-bottom: 1rem;
    }
    
    nav ul {
        flex-direction: column;
        align-items: flex-start;
    }
    
    nav ul li {
        margin: 0.5rem 0;
    }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Research University</div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Docs</a></li>
            </ul>
            <div class="profile">
                <i class="fas fa-bell"></i>
                <img src="profile.jpg" alt="Profile">
            </div>
        </nav>
    </header>
    <main>
        <h1>Evaluation</h1>
        <p>Students are waiting for your feedback. Help them improve and learn.</p>
        <div class="filters">
            <button class="filter-btn">All projects <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">In progress <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Late <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Done <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Needs review <i class="fas fa-caret-down"></i></button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Project</th>
                    <th>Submitted</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Add Feedback</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chapter as $value)
                <tr>
                    <td> {{ $value->fullname }}</td>
                    <td>{{ $value->chapter_name}}</td>
                    <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                    <td>{{ $value->due_date}}</td>
                    <td>{{ $value->status}}</td>
                    <td><span class="status"></span>  <a href="{{ asset('storage/' . $value->file_name) }}" download="{{ $value->file_name }}">
                        View</a>
                    </td>
                    <td>
                        <form action="{{route('supervisor.feedback.save', ['chapter' => $chapter ])}}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="delete">Delete</button>
                          </form>
                    </td>
                </tr>
                @endforeach
                {{-- <tr>
                    <td>CS-101: Web App</td>
                    <td>Oct 20</td>
                    <td>Oct 19</td>
                    <td><span class="status">In progress</span></td>
                </tr> --}}
            </tbody>
        </table>
    </main>
</body>
</html>
