<style>
    body {
    font-family: 'Inter', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.profile-header {
    margin-bottom: 20px;
}

.profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-name {
    font-size: 24px;
    font-weight: bold;
    color: #0e141b;
    margin: 10px 0;
}

.profile-title {
    font-size: 16px;
    color: #6c757d;
}

.profile-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.detail-card {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 15px;
    margin: 10px;
    flex: 1 1 calc(50% - 20px);
    display: flex;
    align-items: center;
    text-align: left;
}

.detail-icon {
    font-size: 24px;
    color: #0e141b;
    margin-right: 10px;
}

.detail-info {
    flex: 1;
}

.detail-title {
    font-size: 16px;
    font-weight: bold;
    color: #0e141b;
}

.detail-subtitle {
    font-size: 14px;
    color: #6c757d;
}

/* Responsive Design */
@media (max-width: 600px) {
    .detail-card {
        flex: 1 1 100%;
    }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="profile.webp" alt="Profile Picture" class="profile-picture">
            <h2 class="profile-name">{{$student->fullname}}</h2>
            <p class="profile-title">Undergraduate student, Babcock University</p>
        </div>
        <div class="profile-details">
            <div class="detail-card">
                <i class="fas fa-user detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Name</span>
                    <span class="detail-subtitle">{{$student->fullname}}</span>
                </div>
            </div>
            <div class="detail-card">
                <i class="fas fa-graduation-cap detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Course</span>
                    <span class="detail-subtitle">{{$student->course}}</span>             
                </div>
            </div>
            <div class="detail-card">
                <i class="fas fa-id-card detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Matric number</span>
                    <span class="detail-subtitle">{{$student->matric_no}}</span>
                </div>
            </div>
            <div class="detail-card">
                <i class="fas fa-project-diagram detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Project title</span>
                    <span class="detail-subtitle">{{$student->project_topic}}</span>
                </div>
            </div>
            <div class="detail-card">
                <i class="fas fa-user-tie detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Supervisor</span>
                    <span class="detail-subtitle">{{$student->project_supervisor}}</span>
                </div>
            </div>
            <div class="detail-card">
                <i class="fas fa-venus detail-icon"></i>
                <div class="detail-info">
                    <span class="detail-title">Gender</span>
                    <span class="detail-subtitle">Male</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
