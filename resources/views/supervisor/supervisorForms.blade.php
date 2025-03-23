<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

header {
    background-color: #ffffff;
    border-bottom: 1px solid #e0e0e0;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav {
    display: flex;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #000000;
}

.profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

main {
    padding: 20px;
    max-width: 800px;
    margin: 20px auto;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.progress-bar {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.step {
    margin-right: 10px;
}

.progress {
    flex: 1;
    height: 8px;
    background-color: #e0e0e0;
    border-radius: 4px;
    overflow: hidden;
}

.progress-fill {
    width: 20%;
    height: 100%;
    background-color: #000000;
}

h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

p {
    color: #666666;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

input[type="text"],
textarea,
select {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    font-size: 1rem;
}

.gender-options {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.gender-options button {
    padding: 10px 20px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    background-color: #ffffff;
    cursor: pointer;
}

.gender-options button:hover {
    background-color: #f0f0f0;
}

textarea {
    resize: vertical;
}

.file-types {
    font-size: 0.9rem;
    color: #999999;
    margin-bottom: 20px;
}

button[type="submit"] {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #ffffff;
    font-size: 1rem;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniSubmit Form</title>
    {{-- <link rel="stylesheet" href="css/studentforms.css"> --}}
</head>
<body>
    <header>
        {{-- <nav>
            <div class="logo">UniSubmit</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <div class="profile">
                <img src="profile-pic.jpg" alt="Profile Picture">
            </div>
        </nav> --}}
    </header>
    <main>
        <div class="progress-bar">
            <div class="step">Step 1/3</div>
            <div class="progress">
                <div class="progress-fill"></div>
            </div>
        </div>
        <h1>Welcome to UniSubmit</h1>
        <p>Please fill in the form below to complete your submission</p>
        <form  action="{{ route('supervisor.save') }}" method="POST">
            @csrf
            @method('POST') 
            <input type="text" placeholder="Enter your full name" name="fullname">
            <input type="text" placeholder="Enter your identification number" name="id_no">
            {{-- <div class="gender-options">
                <button type="button">Male</button>
                <button type="button">Female</button>
                <button type="button">Non-binary</button>
                <button type="button">Prefer not to say</button>
            </div> --}}
            <select name="department">
                <option value="">Select your Department</option>
                <option value="accounting">Accounting</option>
                <option value="banking_finance">Banking and Finance</option>
                <option value="business_administration">Business Administration</option>
                <option value="computer_science">Computer Science</option>
                <option value="economics">Economics</option>
                <option value="information_technology">Information Technology</option>
                <option value="marketing">Marketing</option>
                <option value="mass_communication">Mass Communication</option>
                <option value="nursing_science">Nursing Science</option>
                <option value="political_science">Political Science</option>
                <option value="public_health">Public Health</option>
                <option value="software_engineering">Software Engineering</option>
            </select>
            
            {{-- <select name="project_supervisor">
                <option >Select your project supervisor</option>
                <option value="Dr Maitanmi">Dr Maitanmi</option>
                <option value="Dr Mensah">Dr Mensah</option>
            </select>
            <textarea placeholder="Enter your project topic" name="project_topic"></textarea>
            <p class="file-types">Allowed file types: .pdf, .docx, .pptx</p> --}}
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
