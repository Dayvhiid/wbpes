<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .header {
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 48px;
            color: #0267C1;
        }

        .header p {
            font-size: 18px;
            color: #555;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h2 {
            font-size: 24px;
            color: #0267C1;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0267C1;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #024a8d;
        }

        @media (max-width: 768px) {
            .cards {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Our Platform</h1>
            <p>Choose your role to get started</p>
        </div>
        <div class="cards">
            <div class="card">
                <h2>Admin</h2>
                <p>Manage users, projects, and settings</p>
                <a href="/signup">Go to Admin</a>
            </div>
            <div class="card">
                <h2>Supervisor</h2>
                <p>Oversee projects and provide feedback</p>
                <a href="/supervisor">Go to Supervisor</a>
            </div>
            <div class="card">
                <h2>Student</h2>
                <p>Access your projects and resources</p>
                <a href="/student">Go to Student</a>
            </div>
        </div>
    </div>
</body>
</html>