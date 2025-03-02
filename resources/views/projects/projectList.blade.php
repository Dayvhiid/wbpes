<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Nunito', sans-serif;
}

body {
    background-color: #f9fafb;
    color: #333;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 700;
}

.logo i {
    margin-right: 10px;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 700;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #007bff;
}

nav ul li img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
}

main {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.filters {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.filters button {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.filters button:hover {
    background-color: #007bff;
    color: #fff;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f1f1f1;
}

.status {
    padding: 5px 10px;
    border-radius: 12px;
    font-weight: 700;
    text-align: center;
    display: inline-block;
}

.status.reviewed {
    background-color: #d4edda;
    color: #155724;
}

.status.pending {
    background-color: #fff3cd;
    color: #856404;
}

.status.graded {
    background-color: #cce5ff;
    color: #004085;
}
.view{
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.view:hover{
    background-color: #007bff;
    color: #fff;
}
.view a{
    text-decoration: none;
    color: black
}
.delete{
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.delete:hover{
    background-color: rgb(250, 56, 56);
    color: #fff;
}


@media (max-width: 768px) {
    header, nav ul {
        flex-direction: column;
    }
    nav ul {
        gap: 10px;
    }
    .filters {
        flex-direction: column;
        gap: 5px;
    }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Platform - Submissions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    @notifyCss
    @filemanagerStyles
</head>
<x-notify::notify />
@notifyJs
<body>
    <header>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>Academic Platform</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">My Library</a></li>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                <li><a href="#"><img src="user-icon.png" alt="User"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Your Submissions</h1>
        <div class="filters">
            <button>All</button>
            <button>Pending</button>
            <button>Reviewed</button>
            <button>Graded</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Project Title</th>
                    <th>Due Date</th>
                    <th>Submitted</th>
                    <th>Evaluation</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td>Homework 1</td>
                    <td>Sep 12</td>
                    <td>Sep 10</td>
                    <td><span class="status reviewed">Reviewed</span></td>
                </tr> --}}
                <tbody>
                    @foreach ($chapter as $project) <tr>
                        <td>{{ $project->chapter_name }}</td>
                        <td>{{ $project->due_date }}</td>
                        <td>{{ Carbon\Carbon::parse($project->created_at)->format('Y-m-d') }}</td>
                        {{-- <td>
                            <span class="status {{ rand(0, 2) === 0 ? 'reviewed' : (rand(0, 1) === 0 ? 'graded' : 'pending') }}">
                              {{ rand(0, 2) === 0 ? 'Reviewed' : (rand(0, 1) === 0 ? 'Graded' : 'Pending') }}
                            </span>
                        </td> --}}
                        <td>
                            <button class="view"  >
                                <a href="{{ url('/evaluation') }}">Evaluation</a>
                            </button>
                        </td>
                        <td>   <button class="view">
                            <a href="{{ asset('storage/' . $project->file_name) }}" download="{{ $project->file_name }}">
                              View</a>
                            </button>
                        </td>  
                        <td>
                            <form action="{{route('student.delete', ['chapter' => $project ])}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="delete">Delete</button>
                            </form>
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
            </tbody>
        </table>
    </main>
    {{-- <x-livewire-filemanager /> --}}

    @filemanagerScripts
</body>
</html>
