# WBPeS Academic Platform

**Web-Based Project Evaluation System (WBPeS)** is a comprehensive Laravel-based academic management platform designed for universities, specifically built for Babcock University. It streamlines the entire academic project lifecycle from submission to evaluation and approval.

## 🎯 Overview

WBPeS facilitates seamless interaction between students, supervisors, and administrators, providing a centralized platform for managing academic projects with real-time communication and detailed evaluation workflows.

## ✨ Features

### 🎓 Student Features
- **Project Submission**: Upload and manage project chapters (1-5)
- **Real-time Feedback**: Receive detailed supervisor feedback on each chapter
- **Progress Tracking**: Monitor approval status and project timeline
- **Group Management**: View group members and assignments
- **Certificate Download**: Access completion certificates
- **Profile Management**: Maintain personal and academic information

### 👨‍🏫 Supervisor Features
- **Project Evaluation**: Detailed evaluation forms for each chapter
- **Feedback System**: Comprehensive feedback with structured criteria
- **Approval Workflow**: Chapter-by-chapter approval process
- **Student Management**: View assigned students and groups
- **Deadline Management**: Set and track project deadlines
- **Progress Monitoring**: Track student submissions and status

### 🛠️ Admin Features
- **User Management**: Manage students, supervisors, and groups
- **Project Oversight**: Monitor all project submissions and evaluations
- **Data Export**: Excel export functionality for reports
- **System Configuration**: Platform settings and notifications
- **Certificate Management**: Generate and validate certificates

### 🚀 Communication & Collaboration
- **Real-time Chat**: Built-in messaging system (Chatify)
- **Video Conferencing**: Integrated Agora.io video calls
- **Notifications**: Real-time updates and alerts
- **File Management**: Secure document upload and storage

## 🔧 Technical Stack

### Backend
- **Framework**: Laravel 11.x
- **PHP**: 8.2+
- **Database**: MySQL/SQLite
- **Authentication**: Laravel Fortify + Jetstream
- **Real-time**: Laravel Reverb WebSockets

### Frontend
- **CSS Framework**: Tailwind CSS
- **JavaScript**: Alpine.js, Vue.js 3
- **Build Tool**: Vite
- **UI Components**: Livewire 3.0

### Third-party Integrations
- **Video Calls**: Agora.io SDK
- **Chat System**: Chatify Messenger
- **SMS/Voice**: Twilio SDK
- **Excel Import/Export**: Maatwebsite Excel
- **PDF Generation**: Laravel DomPDF
- **File Management**: Livewire File Manager
- **Notifications**: Laravel Notify

## 📋 System Requirements

### Server Requirements
- **PHP**: 8.2+ with extensions:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON
  - BCMath
  - Fileinfo
  - GD/Imagick
- **Composer**: 2.0+
- **Node.js**: 16+ & npm/yarn
- **Database**: MySQL 8.0+ or SQLite 3.8+
- **Web Server**: Apache/Nginx

### External Services
- **Pusher**: For real-time features (optional, can use Reverb)
- **Agora.io**: Video conferencing API key
- **Twilio**: SMS/Voice services (optional)
- **SMTP**: Email service configuration

## 🚀 Installation & Setup

### 1. Clone Repository
```bash
git clone https://github.com/Dayvhiid/wbpes.git
cd wbpes
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
```bash
# Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wbpes_db
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations and seeders
php artisan migrate --seed
```

### 5. Storage & Permissions
```bash
# Create storage link
php artisan storage:link

# Set proper permissions (Linux/Mac)
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### 6. Build Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

### 7. Start Development Server
```bash
# Start Laravel server
php artisan serve

# Start Reverb WebSocket server (optional)
php artisan reverb:start

# Watch for asset changes (development)
npm run dev
```

### 8. Access Application
- **Main App**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin/dashboard
- **Student Portal**: http://localhost:8000/student
- **Supervisor Panel**: http://localhost:8000/supervisor

## 🗂️ Project Structure

```
wbpes/
├── app/
│   ├── Exports/              # Excel export classes
│   ├── Http/Controllers/     # Application controllers
│   │   ├── AdminController.php
│   │   ├── StudentController.php
│   │   ├── SupervisorController.php
│   │   ├── EvaluationController.php
│   │   └── ...
│   ├── Models/              # Eloquent models
│   │   ├── Student.php
│   │   ├── Chapter.php
│   │   ├── Supervisor.php
│   │   └── ...
│   └── Livewire/           # Livewire components
├── database/
│   ├── migrations/         # Database schema
│   ├── seeders/           # Database seeders
│   └── factories/         # Model factories
├── resources/
│   ├── views/             # Blade templates
│   │   ├── admin/        # Admin interface
│   │   ├── student/      # Student interface
│   │   ├── supervisor/   # Supervisor interface
│   │   └── projects/     # Project-related views
│   ├── css/              # Stylesheets
│   └── js/               # JavaScript files
├── routes/
│   ├── web.php           # Web routes
│   ├── api.php           # API routes
│   └── channels.php      # WebSocket channels
├── config/               # Configuration files
│   ├── chatify.php       # Chat configuration
│   ├── wirechat.php      # Chat settings
│   └── ...
└── public/              # Public assets
    ├── css/
    ├── js/
    └── uploads/         # File uploads
```

## 🎯 Usage Guide

### Student Workflow
1. **Registration**: Complete student data form with personal and academic details
2. **Project Submission**: Submit chapters sequentially (Chapter 1-5)
3. **Feedback Review**: Receive and review supervisor feedback
4. **Revisions**: Make necessary changes based on feedback
5. **Approval**: Track chapter approval status
6. **Certificate**: Download completion certificate upon final approval

### Supervisor Workflow
1. **Login**: Access supervisor dashboard
2. **Student Management**: View assigned students and groups
3. **Evaluation**: Review and evaluate submitted chapters using structured forms
4. **Feedback**: Provide detailed feedback on each evaluation criterion
5. **Approval**: Approve or request revisions for chapters
6. **Communication**: Use chat and video calls for direct student interaction

### Admin Workflow
1. **User Management**: Create and manage student/supervisor accounts
2. **Group Assignment**: Organize students into project groups
3. **Project Oversight**: Monitor all project submissions and evaluations
4. **Data Management**: Export reports and manage system data
5. **Certificate Management**: Generate and validate completion certificates

## 🔧 Configuration

### Environment Variables (.env)
```bash
# Application
APP_NAME=WBPeS
APP_ENV=production
APP_KEY=base64:...
APP_DEBUG=false
APP_URL=http://localhost

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wbpes_db
DB_USERNAME=root
DB_PASSWORD=

# Pusher (Real-time features)
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=mt1

# Agora (Video conferencing)
AGORA_APP_ID=your_agora_app_id
AGORA_APP_CERTIFICATE=your_agora_certificate

# Twilio (SMS/Voice)
TWILIO_SID=your_twilio_sid
TWILIO_AUTH_TOKEN=your_twilio_token

# Mail
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# Chatify
CHATIFY_NAME="WBPeS Messenger"
CHATIFY_STORAGE_DISK=public
```

## 🗄️ Database Schema

### Key Tables
- **users**: System users (students, supervisors, admins)
- **regstudents**: Student registration data
- **supervisors**: Supervisor information
- **chapters**: Project chapter submissions
- **group_students**: Student group assignments
- **deadlines**: Project deadlines
- **feedbacks**: Evaluation feedback
- **ch_messages/ch_favorites**: Chat system tables

### Evaluation Fields (per chapter)
- Background of the study
- Statement of the problem
- Aims and objectives
- Justification of the study
- Significance of the project
- Organization of the project
- Literature review
- Theoretical framework
- Research methodology
- Data collection and analysis

## 🛠️ Development

### Key Components

#### Controllers
- **AdminController**: Administrative functions, user management
- **StudentController**: Student registration, profile, project management
- **SupervisorController**: Supervisor dashboard, student oversight
- **EvaluationController**: Chapter evaluation forms and storage
- **ProjectController**: Project submission and file management
- **ApprovalController**: Chapter approval workflow

#### Models
- **Student**: Student entity with relationships
- **Chapter**: Project chapter with evaluation fields
- **Supervisor**: Supervisor information and assignments
- **GroupStudent**: Student group management
- **Feedback**: Evaluation feedback system

#### Key Routes
```php
// Student routes
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student/project/store', [ProjectController::class, 'store']);

// Supervisor routes
Route::get('supervisor/welcome', [SupervisorController::class, 'welcome']);
Route::get('supervisor/chapterOne/evaluation{student_id}', [EvaluationController::class, 'chapterOne']);

// Admin routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::post('/update-project-status', [AdminController::class, 'updateProjectStatus']);

// Real-time features
Route::post('/conversations', [ConversationController::class, 'store']);
Route::get('/video-conferencing', [VideoController::class, 'index']);
```

### Custom Artisan Commands
```bash
# Clear application cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Queue processing (if using)
php artisan queue:work

# WebSocket server
php artisan reverb:start
```

## 🔒 Security Features

- **CSRF Protection**: All forms protected with CSRF tokens
- **Authentication**: Multi-guard authentication system
- **Authorization**: Role-based access control
- **File Upload Security**: Validated file types and sizes
- **SQL Injection Prevention**: Eloquent ORM with prepared statements
- **XSS Protection**: Blade template escaping

## 📊 Performance Optimization

- **Database Indexing**: Optimized queries with proper indexing
- **Caching**: Redis/File caching for improved performance
- **Asset Optimization**: Vite build system for optimized assets
- **Lazy Loading**: Efficient data loading with relationships
- **CDN Integration**: External asset delivery

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Generate test coverage
php artisan test --coverage
```

## 📚 API Documentation

### Student API Endpoints
```
GET    /api/student/profile
POST   /api/student/project/submit
GET    /api/student/feedback/{chapter_id}
```

### Supervisor API Endpoints
```
GET    /api/supervisor/students
POST   /api/supervisor/evaluate/{chapter_id}
GET    /api/supervisor/dashboard/stats
```

## 🚀 Deployment

### Production Setup
1. **Server Requirements**: LAMP/LEMP stack
2. **Environment**: Set `APP_ENV=production`
3. **Optimization**:
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
4. **Queue Workers**: Set up queue processing
5. **SSL Certificate**: Configure HTTPS
6. **Backup Strategy**: Database and file backups

### Docker Deployment
```dockerfile
# Available in project root
docker-compose up -d
```

## 🔧 Troubleshooting

### Common Issues
1. **Storage Permission**: `chmod -R 755 storage bootstrap/cache`
2. **Missing Dependencies**: `composer install && npm install`
3. **Database Connection**: Check `.env` database credentials
4. **File Upload Issues**: Check `php.ini` upload limits
5. **WebSocket Issues**: Ensure Reverb/Pusher configuration

### Debug Mode
```bash
# Enable debug mode (development only)
APP_DEBUG=true

# Check application logs
tail -f storage/logs/laravel.log
```

## 🤝 Contributing

We welcome contributions to improve WBPeS! Please follow these guidelines:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/AmazingFeature`)
3. **Commit** your changes (`git commit -m 'Add some AmazingFeature'`)
4. **Push** to the branch (`git push origin feature/AmazingFeature`)
5. **Open** a Pull Request

### Code Standards
- Follow PSR-12 coding standards
- Write unit tests for new features
- Update documentation as needed
- Use meaningful commit messages

### Development Setup
```bash
# Install development dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Run tests before committing
php artisan test
```

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🏫 About Babcock University

WBPeS is specifically designed for Babcock University's academic project management needs, providing a comprehensive solution for managing student projects from submission to completion.

## 📞 Support

For technical support or questions about WBPeS:
- **Repository**: [GitHub Issues](https://github.com/Dayvhiid/wbpes/issues)
- **Documentation**: Check this README and inline code comments
- **Email**: Contact the development team

## 📈 Roadmap


---

**WBPeS** - Streamlining Academic Excellence Through Technology
