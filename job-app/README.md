# 🎯 Job Board Application

A comprehensive job board platform built with Laravel that connects employers with job seekers. This application provides a complete solution for posting job vacancies, managing applications, and facilitating the hiring process.

## 🌟 Features

### For Employers
- **Company Management**: Create and manage company profiles
- **Job Posting**: Post and manage job vacancies
- **Application Management**: Review and manage job applications
- **Categories**: Organize jobs by categories
- **Dashboard**: Comprehensive dashboard for tracking activities

### For Job Seekers
- **Job Search**: Browse and search available job opportunities
- **Resume Upload**: Upload and manage resumes
- **Apply for Jobs**: Easy application process with resume analysis
- **Application Tracking**: Track application status

### System Features
- **User Authentication**: Secure registration and login system
- **Role-based Access**: Different access levels for employers and job seekers
- **Resume Analysis**: AI-powered resume analysis service
- **Email Verification**: Secure email verification system
- **Password Management**: Complete password reset functionality

## 🛠️ Technologies Used

- **Backend**: Laravel 11
- **Frontend**: Blade Templates with Tailwind CSS
- **Database**: MySQL/PostgreSQL
- **Authentication**: Laravel Breeze
- **Testing**: PHPUnit & Pest
- **Build Tools**: Vite
- **Styling**: Tailwind CSS
- **Package Management**: Composer & NPM

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Git

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/abdelmoneimbelal/job-board.git
   cd job-board
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database**
   Edit the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=job_board
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

## 🏗️ Project Structure

```
app/
├── Http/
│   ├── Controllers/         # Application controllers
│   ├── Middleware/          # Custom middleware
│   └── Requests/           # Form request validation
├── Models/                 # Eloquent models
├── Services/              # Business logic services
└── View/Components/       # Blade components

database/
├── migrations/            # Database migrations
├── seeders/              # Database seeders
└── factories/            # Model factories

resources/
├── views/                # Blade templates
├── css/                  # Stylesheets
└── js/                   # JavaScript files

routes/
├── web.php              # Web routes
└── auth.php             # Authentication routes
```

## 🗄️ Database Schema

### Main Tables
- **users**: User accounts (employers & job seekers)
- **companies**: Company profiles
- **job_categories**: Job category definitions
- **job_vacancies**: Job postings
- **job_applications**: Application submissions
- **resumes**: Resume storage and metadata

## 🔧 Key Features Implementation

### Authentication & Authorization
- Laravel Breeze for authentication scaffolding
- Role-based middleware for access control
- Email verification system

### Job Management
- CRUD operations for job vacancies
- Category-based job organization
- Application tracking system

### Resume Analysis
- AI-powered resume analysis service
- Resume parsing and keyword extraction
- Skill matching with job requirements

## 🧪 Testing

Run the test suite:
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit
```

## 🚀 Deployment

1. **Server Requirements**
   - PHP >= 8.2
   - MySQL/PostgreSQL
   - Web server (Apache/Nginx)

2. **Production Setup**
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Environment Variables**
   Ensure all production environment variables are properly set in `.env`

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 📞 Contact

- **GitHub**: [abdelmoneimbelal](https://github.com/abdelmoneimbelal)
- **Repository**: [job-board](https://github.com/abdelmoneimbelal/job-board)

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com/)
- Styled with [Tailwind CSS](https://tailwindcss.com/)
- Icons by [Heroicons](https://heroicons.com/)

---

**Happy Coding! 🎉**
