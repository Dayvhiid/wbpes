<style>
    body {
    font-family: 'Poppins', sans-serif;
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
.feedbackBtn{
    background-color: white;
    color: black;
    border-radius: 10em;
    font-size: 17px;
    font-weight: 600;
    padding: 10px 20px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    border: 1px solid black;
    box-shadow: 0 0 0 0 black;
}
.feedbackBtn:hover{
    transform: translateY(-4px) translateX(-2px);
    box-shadow: 2px 5px 0 0 black;
}
.feedbackBtn:active{
    transform: translateY(2px) translateX(1px);
    box-shadow: 0 0 0 0 black;
}
.menu {
  font-size: 16px;
  line-height: 1.6;
  color: #000000;
  width: fit-content;
  display: flex;
  list-style: none;
}

.menu a {
  text-decoration: none;
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

.menu .link {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  padding: 12px 36px;
  border-radius: 16px;
  overflow: hidden;
  transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.menu .link::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #0a3cff;
  z-index: -1;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}
/* From Uiverse.io by 3bdel3ziz-T */ 
.select {
  width: fit-content;
  cursor: pointer;
  position: relative;
  transition: 300ms;
  color: white;
  overflow: hidden;
}

.selected {
  background-color: #2a2f3b;
  padding: 5px;
  margin-bottom: 3px;
  border-radius: 5px;
  position: relative;
  z-index: 100000;
  font-size: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.arrow {
  position: relative;
  right: 0px;
  height: 10px;
  transform: rotate(-90deg);
  width: 25px;
  fill: white;
  z-index: 100000;
  transition: 300ms;
}

.options {
  display: flex;
  flex-direction: column;
  border-radius: 5px;
  padding: 5px;
  background-color: #2a2f3b;
  position: relative;
  top: -100px;
  opacity: 0;
  transition: 300ms;
}

.select:hover > .options {
  opacity: 1;
  top: 0;
}

.select:hover > .selected .arrow {
  transform: rotate(0deg);
}

.option {
  border-radius: 5px;
  padding: 5px;
  transition: 300ms;
  background-color: #2a2f3b;
  width: 150px;
  font-size: 15px;
}
.option:hover {
  background-color: #323741;
}

.options input[type="radio"] {
  display: none;
}

.options label {
  display: inline-block;
}
.options label::before {
  content: attr(data-txt);
}

.options input[type="radio"]:checked + label {
  display: none;
}

.options input[type="radio"]#all:checked + label {
  display: none;
}

.select:has(.options input[type="radio"]#all:checked) .selected::before {
  content: attr(data-default);
}
.select:has(.options input[type="radio"]#option-1:checked) .selected::before {
  content: attr(data-one);
}
.select:has(.options input[type="radio"]#option-2:checked) .selected::before {
  content: attr(data-two);
}
.select:has(.options input[type="radio"]#option-3:checked) .selected::before {
  content: attr(data-three);
}
a{
    text-decoration: none;
}
table{
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 5%;
    margin-top: 5%;
    border-radius: 10px;
}
.navbar {
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 64px;
  background: #023e8a;
  color: #f9f9f9;
  font-family: "Poppins";
  box-sizing: border-box;
}
.button {
  border: 0;
  padding: 0;
  font-family: inherit;
  background: transparent;
  color: inherit;
  cursor: pointer;
}


.navbar {
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 64px;
  background: #023e8a;
  color: #f9f9f9;
  font-family: "Poppins";
  box-sizing: border-box;
}

@media only screen and (min-width: 600px) {
  .navbar {
    justify-content: space-between;
    padding: 0 0 0 16px;
  }
}

.navbar-overlay {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  visibility: hidden;
  opacity: 0;
  transition: 0.3s;
}

body.open .navbar-overlay {
  visibility: visible;
  opacity: 1;
}

@media only screen and (min-width: 600px) {
  .navbar-overlay {
    display: none;
  }
}
.navbar-burger {
  position: absolute;
  top: 0;
  left: 0;
  display: grid;
  place-items: center;
  width: 64px;
  height: 64px;
  padding: 0;
}

@media only screen and (min-width: 600px) {
  .navbar-burger {
    display: none;
  }
}

.navbar-title {
  margin: 0;
  font-size: 16px;
}

.navbar-menu {
  position: fixed;
  z-index: 3;
  top: 0;
  left: 0;
  translate: -100% 0;
  width: 270px;
  height: 100%;
  padding: 20px;
  display: flex;
  gap: 8px;
  flex-direction: column;
  align-items: flex-start;
  background: #000000;
  visibility: hidden;
  transition: translate 0.3s;
}

body.open .navbar-menu {
  translate: 0 0;
  visibility: visible;
}
thead th{
  background: #0077b6;
  color: #333;
}

@media only screen and (min-width: 600px) {
  .navbar-menu {
    position: static;
    translate: 0 0;
    width: auto;
    background: transparent;
    flex-direction: row;
    visibility: visible;
  }
}

.navbar-menu > button {
  color: rgba(255, 255, 255, 0.5);
  background: transparent;
  padding: 0 8px;
}

.navbar-menu > button.active {
  color: inherit;
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    @notifyCss
</head>
<body>
    <x-notify::notify />
    @notifyJs
    <header>
        {{-- <nav>
            <div class="logo">Research University</div>
            <ul>
                <li><a href="{{route('supervisor.search')}}">Search</a></li>
                {{-- <li>                    
                    <div class="select">
                    <div
                        class="selected"
                        data-default="Messaging"
                        data-one="option-1"
                        data-two="option-2"
                        data-three="option-3"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="1em"
                        viewBox="0 0 512 512"
                        class="arrow"
                        >
                        <path
                            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"
                        ></path>
                        </svg>
                    </div> --}}
                    {{-- <div class="options">
                        <div title="all">
                        <input id="all" name="option" type="radio" checked=""  />
                        <label class="option" for="all" data-txt="Messaging"></label>
                        </div>
                        <div title="option-1">
                        <input id="option-1" name="option" type="radio" />
                        <a class="option" href="{{route('login')}} ">LOGIN</a>
                        </div>
                        <div title="option-2">
                        <input id="option-2" name="option" type="radio" href="{{route('login')}}" />
                        <a class="option" href="{{route('register')}} ">REGISTER</a>
                      
                        </div>
                    </div> --}}
                    
                    {{-- </div>
                </li> --}}
                {{-- <li><a href="{{ route('supervisor.studentList') }}">Students List</a></li>
                <li>Chat</li>
            </ul>
            <div class="profile">
                <i class="fas fa-bell"></i>
                <img src="profile.jpg" alt="Profile">
            </div>
        </nav> --}}
        <nav class="navbar">
            <div class="navbar-overlay" onclick="toggleMenuOpen()"></div>
      
            <button type="button" class="navbar-burger" onclick="toggleMenuOpen()">
              <span class="material-icons">menu</span>
            </button>
            <h1 class="navbar-title">Academic Insights</h1>
            <nav class="navbar-menu">
              <button type="button" class="button">Search</button>
              <button type="button" class="button" onclick="window.location='/chatify'">Chat</button>
              <button type="button" class="button">Profile</button>
              <button type="button" class="button" onclick="window.location='{{ route('supervisor.studentList') }}'">Student List</button>
            </nav>
          </nav> 
    </header>
    <main>
        {{-- <h1>Project Submittion</h1> --}}
        {{-- <p>Students are waiting for your feedback. Help them improve and learn.</p>
        <div class="filters">
            <button class="filter-btn">All projects <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">In progress <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Late <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Done <i class="fas fa-caret-down"></i></button>
            <button class="filter-btn">Needs review <i class="fas fa-caret-down"></i></button>
        </div> --}}
        {{-- <h1>Chapter One</h1> --}}
       {{-- <form action="{{route('supervisor.deadline')}}">
           <input type="date" placeholder="Enter Due Date" name="due_date" required>
       </form> --}}



       {{-- <form id="deadlineForm" action="{{ route('supervisor.deadline') }}" method="POST">
        @csrf
        <input 
            type="date" 
            placeholder="Enter Due Date" 
            name="due_date" 
            required 
            id="dueDateInput">
    </form> --}}
    
    <script>
        document.getElementById('dueDateInput').addEventListener('change', function () {
            // Automatically submit the form when a date is selected
            document.getElementById('deadlineForm').submit();
        });
    </script>
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Project</th>
                    <th>Submitted</th>
                    <th>Due Date</th>
                    {{-- <th>Status</th> --}}
                    <th>File</th>
                    <th>Add Feedback</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chapter as $value)
                    @if ($value->chapter_name == "Chapter One")
                        <tr>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->chapter_name }}</td>
                            <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $value->due_date }}</td>
                            {{-- <td>
                                <form id="status-form-{{ $value->id }}" action="{{ route('chapterUpdate.update') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="chapter_id" value="{{ $value->id }}">
                                    <select name="status">
                                        <div class="options">
                                            <option value="Pending" {{ $value->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Graded" {{ $value->status == 'Graded' ? 'selected' : '' }}>Graded</option>
                                            <option value="Reviewed" {{ $value->status == 'Reviewed' ? 'selected' : '' }}>Reviewed</option>
                                        </div>
                                    </select>
                                    <button type="button" data-form-id="status-form-{{ $value->id }}" class="feedbackBtn">Update</button>
                                </form>
                            </td> --}}
                            <td>
                                <span class="status"></span>
                                <a class="feedbackBtn" href="{{ asset('storage/' . $value->file_name) }}" download="{{ $value->file_name }}">
                                    View
                                </a>
                            </td>
                            {{-- <td>
                                <form action="{{ route('supervisor.feedback', ['student_id' => $value->id]) }}" method="get">
                                    <input type="hidden" name="student_id" value="{{ $value->id }}">
                                    <button class="feedbackBtn">Add Feedback</button>
                                </form>
                            </td> --}}

                            <td>
                                <form action="{{ route('supervisor.chapterOne', ['student_id' => $value->id]) }}" method="get">
                                    <input type="hidden" name="student_id" value="{{ $value->id }}">
                                    <button class="feedbackBtn">Add Feedback</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
        
                @if (!$chapter->contains(fn($value) => $value->chapter_name == "Chapter Two"))
                    <tr>
                        <td colspan="7" style="text-align: center;">No data available for Chapter One</td>
                    </tr>
                @endif
            </tbody>
        </table>
        
       

        {{-- <h1>Chapter Two</h1>


        <form id="deadlineFormTwo" action="{{ route('supervisor.deadline_two') }}" method="POST">
            @csrf
            <input 
                type="date" 
                placeholder="Enter Due Date" 
                name="due_date" 
                required 
                id="dueDateInputTwo">
        </form> --}}

        <script>
            document.getElementById('dueDateInputTwo').addEventListener('change', function () {
                // Automatically submit the form when a date is selected
                document.getElementById('deadlineFormTwo').submit();
            });
        </script>
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Project</th>
                    <th>Submitted</th>
                    <th>Due Date</th>
                    {{-- <th>Status</th> --}}
                    <th>File</th>
                    <th>Add Feedback</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chapter as $value)
                    @if ($value->chapter_name == "Chapter Two")
                        <tr>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->chapter_name }}</td>
                            <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $value->due_date }}</td>
                            {{-- <td>
                                <form id="status-form-{{ $value->id }}" action="{{ route('chapterUpdate.update') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="chapter_id" value="{{ $value->id }}">
                                    <select name="status">
                                        <div class="options">
                                            <option value="Pending" {{ $value->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Graded" {{ $value->status == 'Graded' ? 'selected' : '' }}>Graded</option>
                                            <option value="Reviewed" {{ $value->status == 'Reviewed' ? 'selected' : '' }}>Reviewed</option>
                                        </div>
                                    </select>
                                    <button type="button" data-form-id="status-form-{{ $value->id }}" class="feedbackBtn">Update</button>
                                </form>
                            </td> --}}
                            <td>
                                <span class="status"></span>
                                <a class="feedbackBtn" href="{{ asset('storage/' . $value->file_name) }}" download="{{ $value->file_name }}">
                                    View
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('supervisor.feedback', ['student_id' => $value->id]) }}" method="get">
                                    <input type="hidden" name="student_id" value="{{ $value->id }}">
                                    <button class="feedbackBtn">Add Feedback</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
        
                @if (!$chapter->contains(fn($value) => $value->chapter_name == "Chapter Two"))
                    <tr>
                        <td colspan="7" style="text-align: center;">No data available for Chapter Two</td>
                    </tr>
                @endif
            </tbody>
        </table>



        {{-- <h1>Chapter Three</h1>


        <h1>Chapter Two</h1> --}}


        {{-- <form id="deadlineFormThree" action="{{ route('supervisor.deadline_three') }}" method="POST">
            @csrf
            <input 
                type="date" 
                placeholder="Enter Due Date" 
                name="due_date" 
                required 
                id="dueDateInputThree">
        </form>

        <script>
            document.getElementById('dueDateInputThree').addEventListener('change', function () {
                // Automatically submit the form when a date is selected
                document.getElementById('deadlineFormThree').submit();
            });
        </script>
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
            @if ($value->chapter_name == "Chapter Three")
                <tr>
                    <td>{{ $value->fullname }}</td>
                    <td>{{ $value->chapter_name }}</td>
                    <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                    <td>{{ $value->due_date }}</td>
                    <td>
                        <form id="status-form-{{ $value->id }}" action="{{ route('chapterUpdate.update') }}" method="POST">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="chapter_id" value="{{ $value->id }}">
                            <select name="status">
                                <div class="options">
                                    <option value="Pending" {{ $value->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Graded" {{ $value->status == 'Graded' ? 'selected' : '' }}>Graded</option>
                                    <option value="Reviewed" {{ $value->status == 'Reviewed' ? 'selected' : '' }}>Reviewed</option>
                                </div>
                            </select>
                            <button type="button" data-form-id="status-form-{{ $value->id }}" class="feedbackBtn">Update</button>
                        </form>
                    </td>
                    <td>
                        <span class="status"></span>
                        <a class="feedbackBtn" href="{{ asset('storage/' . $value->file_name) }}" download="{{ $value->file_name }}">
                            View
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('supervisor.feedback', ['student_id' => $value->id]) }}" method="get">
                            <input type="hidden" name="student_id" value="{{ $value->id }}">
                            <button class="feedbackBtn">Add Feedback</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach

        @if (!$chapter->contains(fn($value) => $value->chapter_name == "Chapter Two"))
            <tr>
                <td colspan="7" style="text-align: center;">No data available for Chapter Three</td>
            </tr>
        @endif
    </tbody>
</table>


<h1>Chapter Four</h1>
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
            @if ($value->chapter_name == "Chapter Four")
                <tr>
                    <td>{{ $value->fullname }}</td>
                    <td>{{ $value->chapter_name }}</td>
                    <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                    <td>{{ $value->due_date }}</td>
                    <td>
                        <form id="status-form-{{ $value->id }}" action="{{ route('chapterUpdate.update') }}" method="POST">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="chapter_id" value="{{ $value->id }}">
                            <select name="status">
                                <div class="options">
                                    <option value="Pending" {{ $value->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Graded" {{ $value->status == 'Graded' ? 'selected' : '' }}>Graded</option>
                                    <option value="Reviewed" {{ $value->status == 'Reviewed' ? 'selected' : '' }}>Reviewed</option>
                                </div>
                            </select>
                            <button type="button" data-form-id="status-form-{{ $value->id }}" class="feedbackBtn">Update</button>
                        </form>
                    </td>
                    <td>
                        <span class="status"></span>
                        <a class="feedbackBtn" href="{{ asset('storage/' . $value->file_name) }}" download="{{ $value->file_name }}">
                            View
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('supervisor.feedback', ['student_id' => $value->id]) }}" method="get">
                            <input type="hidden" name="student_id" value="{{ $value->id }}">
                            <button class="feedbackBtn">Add Feedback</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach

        @if (!$chapter->contains(fn($value) => $value->chapter_name == "Chapter Two"))
            <tr>
                <td colspan="7" style="text-align: center;">No data available for Chapter Four</td>
            </tr>
        @endif
    </tbody>
</table>


         --}}
        {{-- <button type="submit" class="btn btn-primary">Update Status</button> --}}
    </main>

 
    



</body>
</html>
