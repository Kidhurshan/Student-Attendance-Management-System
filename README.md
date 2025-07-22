<img width="1120" height="630" alt="Thubmnail" src="https://github.com/user-attachments/assets/2276fcae-687a-4a5e-9514-7efe76095431" /># Student Attendance Management System

<div align="center">
  <!-- Add your project logo here -->
  <img width="1830" height="1042" alt="image" src="https://github.com/user-attachments/assets/2d86cbd6-7f1b-4c98-bec2-5d70f8111d53" />
  <h3>A comprehensive university attendance tracking platform with role-based access control</h3>
  
  <!-- Add badges here -->
  ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
  ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
  ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
  ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
  ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
  
  <!-- Add demo/live demo links if available -->
  [Live Demo](https://youtu.be/U1e-rc4PU6Q) • [Report Bug](https://github.com/Kidhurshan/Student-Attendance-Management-System/issues) • [Request Feature](https://github.com/Kidhurshan/Student-Attendance-Management-System/issues)
</div>

---

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [System Architecture](#system-architecture)
- [User Roles](#user-roles)
- [Screenshots](#screenshots)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage Guide](#usage-guide)
- [Project Structure](#project-structure)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## 🎯 Overview

The Student Attendance Management System is a comprehensive web-based application designed to streamline attendance tracking in educational institutions. Built with PHP and MySQL, this system provides automated notifications, role-based access control, and scalable database architecture for managing student attendance across multiple subjects and batches.


### 🚀 Key Highlights

- **Role-Based Access Control**: Three distinct user roles with specific permissions
- **Automated Notifications**: Real-time notifications for attendance scheduling
- **PDF Report Generation**: Downloadable attendance reports
- **Responsive Design**: Works seamlessly across desktop and mobile devices
- **Scalable Architecture**: Supports multiple batches and subjects

## 🎥Demo

<h2 align="center">🎥 Project Demo</h2>

<p align="center">
  <a href="https://youtu.be/U1e-rc4PU6Q">
    <img src="https://github.com/user-attachments/assets/996274dd-485e-48cf-bf3c-099a2ae88478" alt="Project Demo Video" width="600" />
  </a>
</p>

---

## ✨ Features

### 🔐 Authentication & Security
- Secure login/logout system for all user types
- Password reset functionality
- User verification and activation system
- Session management

### 📊 Attendance Management
- Real-time attendance tracking
- Automated notification system
- Bulk attendance entry
- Attendance percentage calculation
- Historical attendance records

### 📈 Reporting & Analytics
- Comprehensive attendance reports
- PDF export functionality
- Visual charts and graphs
- Semester-wise attendance analysis
- Subject-wise performance tracking

### 👥 User Management
- Student profile management
- Lecturer account administration
- Course allocation and scheduling
- Batch management

---

## 🏗️ System Architecture

The system follows a modular architecture with clear separation of concerns:

```
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   Frontend      │    │   Backend       │    │   Database      │
│   (HTML/CSS/JS) │◄──►│   (PHP)         │◄──►│   (MySQL)       │
└─────────────────┘    └─────────────────┘    └─────────────────┘
```
---

## 👤 User Roles

### 🔧 Management Assistant (MA)
**Primary Administrator** - Full system control and oversight

- **Dashboard Overview**: View system statistics and notifications
- **Attendance Management**: Take and manage attendance for all subjects
- **Course Management**: Add, edit, and delete courses
- **Student Management**: Register, verify, and manage student accounts
- **Lecturer Management**: Add, edit, and manage lecturer accounts
- **Course Allocation**: Schedule subjects for lecturers and batches
- **System Administration**: Password resets and user verification

<!-- Add MA dashboard screenshot here -->
<div align="center">
  <img width="1919" height="1060" alt="image" src="https://github.com/user-attachments/assets/123487e1-5119-4e9b-95ca-88296aafd7d7" />
  <img width="1918" height="1001" alt="image" src="https://github.com/user-attachments/assets/6b1d5e2c-c261-4c79-a089-13571defe7a3" />
</div>

### 👨‍🏫 Lecturer
**Academic Staff** - Course and attendance management

- **Personal Dashboard**: View assigned courses and notifications
- **Attendance Reports**: View detailed attendance statistics
- **Course Overview**: Access course details and student lists
- **Time Scheduling**: Set class schedules and notify MA
- **Report Generation**: Download attendance reports in PDF format
- **Student Monitoring**: Track individual student performance

<!-- Add Lecturer dashboard screenshot here -->
<div align="center">
  <img width="1907" height="1029" alt="image" src="https://github.com/user-attachments/assets/44f48b05-6adc-411a-a616-9e8a5edf11d2" />
  <img width="1919" height="1034" alt="image" src="https://github.com/user-attachments/assets/8becbe6a-aa2e-47e5-8351-970ce2acd749" />
</div>

### 🎓 Student
**End User** - Personal attendance tracking

- **Personal Profile**: View and edit personal information
- **Attendance Overview**: Track attendance across all subjects
- **Semester Analysis**: View semester-wise attendance statistics
- **Visual Analytics**: Interactive charts showing attendance patterns
- **Report Downloads**: Generate personal attendance reports
- **Academic Progress**: Monitor attendance percentages

<!-- Add Student dashboard screenshot here -->
<div align="center">
  <img width="1915" height="1033" alt="image" src="https://github.com/user-attachments/assets/37255cf5-27c5-4275-945a-046782d1a059" />
  <img width="1918" height="1022" alt="image" src="https://github.com/user-attachments/assets/2f301bb4-b71e-468c-aff5-f897e026ec49" />

</div>

---

## 📸 Screenshots

### Login System
<!-- Add login screenshots collage here -->
<div align="center">
  <img width="1715" height="900" alt="image" src="https://github.com/user-attachments/assets/57da5c94-3304-41fc-841b-b0af33ec51ec" />
  <img width="1713" height="890" alt="image" src="https://github.com/user-attachments/assets/f9521a26-0dea-445f-a9f0-c9811f692c6b" />

</div>

### Course Management
<!-- Add course management screenshots here -->
<div align="center">
  <img width="1919" height="1020" alt="image" src="https://github.com/user-attachments/assets/cb4f315a-0ca6-452f-92cd-6c90729b81ab" />
</div>

### Attendance Taking Process
<!-- Add attendance taking process screenshots here -->
<div align="center">
  <img width="1887" height="1041" alt="image" src="https://github.com/user-attachments/assets/205592cb-62a2-44be-ac7d-15e058390874" />
</div>

### Reports and Analytics
<!-- Add reports screenshots here -->
<div align="center">
  <img width="1696" height="895" alt="image" src="https://github.com/user-attachments/assets/78c03d6c-6c2b-4f4e-bff5-2d0b91ccb36b" />
  <img width="1698" height="888" alt="image" src="https://github.com/user-attachments/assets/a82423a2-35b7-41ba-aaf8-cde5f700c830" />
</div>

---

## 🛠️ Prerequisites

Before running this application, ensure you have the following installed:

- **XAMPP** (Version 7.4 or higher)
  - Apache Web Server
  - MySQL Database
  - PHP (Version 7.4+)
- **Web Browser** (Chrome, Firefox, Safari, or Edge)
- **Git** (for cloning the repository)

### System Requirements

| Component | Minimum Requirement |
|-----------|---------------------|
| PHP       | 7.4 or higher       |
| MySQL     | 5.7 or higher       |
| Apache    | 2.4 or higher       |
| RAM       | 512 MB              |
| Storage   | 100 MB              |

---

## 🚀 Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/Kidhurshan/Student-Attendance-Management-System.git
cd Student-Attendance-Management-System
```

### Step 2: Install and Setup XAMPP

1. Download XAMPP from [Apache Friends](https://www.apachefriends.org/index.html)
2. Install XAMPP on your system
3. Launch XAMPP Control Panel
4. Start **Apache** and **MySQL** services

<!-- Add XAMPP setup screenshot here -->
<div align="center">
  <img width="823" height="530" alt="image" src="https://github.com/user-attachments/assets/ab20915d-44eb-45a6-a153-a1a193a5fab5" />
</div>

### Step 3: Database Setup

1. Open **phpMyAdmin** at `http://localhost/phpmyadmin`
2. Create a new database or use the import feature
3. Import the SQL file: `database_information/student-attendance-management-system.sql`
4. Verify all tables are created successfully

<!-- Add database setup screenshot here -->
<div align="center">
  <img width="1671" height="848" alt="image" src="https://github.com/user-attachments/assets/e29013bc-cae9-41ff-8da9-137cfd858f8e" />
</div>

### Step 4: Configure the Application

1. Move the project folder to XAMPP's `htdocs` directory:
   ```
   C:\xampp\htdocs\Student-Attendance-Management-System\
   ```

2. Update database connection settings in configuration files:
   - `connect.php` files in each dashboard folder
   - `database.php` files in login folders

3. Default database credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "student_attendance_db";
   ```

### Step 5: Launch the Application

1. Open your web browser
2. Navigate to: `http://localhost/Student-Attendance-Management-System/`
3. You should see the application's landing page

---

## 📖 Usage Guide

### For Management Assistant (MA)

1. **Login**: Use MA credentials to access the dashboard
2. **Manage Notifications**: View and respond to attendance notifications
3. **Take Attendance**: Process attendance for scheduled classes
4. **Manage Users**: Add, edit, or deactivate student and lecturer accounts
5. **Course Administration**: Create and manage courses and allocations

### For Lecturers

1. **Login**: Access the lecturer dashboard
2. **View Schedule**: Check assigned courses and time schedules
3. **Set Time Schedules**: Create new class schedules
4. **Monitor Attendance**: View student attendance reports
5. **Generate Reports**: Download attendance reports in PDF format

### For Students

1. **Login**: Access the student dashboard
2. **View Profile**: Check and update personal information
3. **Track Attendance**: Monitor attendance across all subjects
4. **Analyze Performance**: Use charts to understand attendance patterns
5. **Download Reports**: Generate personal attendance reports

---

## 📁 Project Structure

```
Student-Attendance-Management-System/
├── 📁 database_information/
│   └── student-attendance-management-system.sql
├── 📁 icons/
│   ├── anim-b/          # Animation assets
│   ├── background/      # Background images
│   ├── info-b/          # Information icons
│   ├── logo/            # System logos
│   └── not-found/       # 404 error assets
├── 📁 Lecturer_Dashboard/
│   ├── connect.php      # Database connection
│   ├── custom-styles.css # Lecturer-specific styles
│   ├── Lecturer_index.php # Main dashboard
│   ├── 📁 Course_Allocation/
│   ├── 📁 Course_List/
│   ├── 📁 Password_Reset/
│   ├── 📁 Report/
│   ├── 📁 template/
│   └── 📁 Time_Schedule/
├── 📁 Login_button/
│   ├── database.php     # Login database config
│   └── login.php        # Main login handler
├── 📁 Login_Lecturer/
│   ├── database.php
│   ├── login.php
│   ├── logout.php
│   └── registration.php
├── 📁 Login_MA/
│   ├── database.php
│   ├── login.php
│   ├── logout.php
│   ├── registration.php
│   └── style.css
├── 📁 Login_Student/
│   ├── database.php
│   ├── login.php
│   ├── logout.php
│   └── registration.php
├── 📁 MA_Dashboard/
│   ├── connect.php
│   ├── custom-styles.css
│   ├── MA_index.php     # MA main dashboard
│   ├── 📁 Attendance/
│   ├── 📁 Course_Allocation/
│   ├── 📁 Course_List/
│   ├── 📁 Lecture_List/
│   ├── 📁 Password_Reset/
│   ├── 📁 Report/
│   ├── 📁 Student_List/
│   └── 📁 template/
├── 📁 Student_Dashboard/
│   ├── connect.php
│   ├── custom-styles.css
│   ├── Student_index.php # Student main dashboard
│   ├── 📁 Student_Attendance/
│   ├── 📁 Student_Password_Reset/
│   ├── 📁 template/
│   └── Update.php
└── 📁 screenshots/       # Documentation images
```

---

## 🗄️ Database Schema

The system uses a relational database with the following key tables:

<!-- Add database schema diagram here -->
<div align="center">
  <img width="1919" height="1052" alt="image" src="https://github.com/user-attachments/assets/845ea863-6e75-46aa-9a16-3142ed3acf6f" />
  <img width="1917" height="1063" alt="image" src="https://github.com/user-attachments/assets/1e34ffc9-c374-4c4a-8d60-0ed2f189e759" />
</div>

### Core Tables

- **users**: Stores user information for all roles
- **students**: Student-specific information
- **lecturers**: Lecturer-specific information
- **courses**: Course/subject information
- **attendance**: Attendance records
- **course_allocation**: Course-lecturer-batch assignments
- **time_schedule**: Class scheduling information

---

## 🤝 Contributing

We welcome contributions to improve the Student Attendance Management System! Here's how you can contribute:

### Development Setup

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Make your changes
4. Commit your changes: `git commit -m 'Add amazing feature'`
5. Push to the branch: `git push origin feature/amazing-feature`
6. Open a Pull Request

### Contribution Guidelines

- Follow PHP PSR standards
- Write clear, commented code
- Test your changes thoroughly
- Update documentation as needed
- Follow the existing code style

### Areas for Contribution

- 🐛 Bug fixes
- ✨ New features
- 📚 Documentation improvements
- 🎨 UI/UX enhancements
- 🔧 Performance optimizations

---

## 🐛 Troubleshooting

### Common Issues

| Issue | Solution |
|-------|----------|
| Blank page displayed | Enable PHP error reporting in `php.ini` |
| Database connection error | Verify MySQL service is running |
| Login not working | Check database credentials |
| PDF generation fails | Ensure FPDF library is included |
| Images not loading | Verify file paths and permissions |

### Debug Mode

Enable debug mode by adding this to your PHP files:
```php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Contact

**Developer**: Kidhurshan

- 📧 Email: [your.email@example.com](mailto:d.kidhu@gmail.com)
- 🐙 GitHub: [@Kidhurshan](https://github.com/Kidhurshan)
- 💼 LinkedIn: [Your LinkedIn Profile](https://linkedin.com/in/kidhurshan)

---

## 🙏 Acknowledgments

- **FPDF** for PDF generation capabilities
- **Bootstrap** for responsive design components
- **Chart.js** for data visualization
- **XAMPP** for local development environment
- All contributors and testers who helped improve this system

---

<div align="center">
  <h3>⭐ Star this repository if you found it helpful!</h3>
  
  <!-- Add project status badges -->
  ![GitHub stars](https://img.shields.io/github/stars/Kidhurshan/Student-Attendance-Management-System?style=social)
  ![GitHub forks](https://img.shields.io/github/forks/Kidhurshan/Student-Attendance-Management-System?style=social)
  ![GitHub issues](https://img.shields.io/github/issues/Kidhurshan/Student-Attendance-Management-System)
  ![GitHub pull requests](https://img.shields.io/github/issues-pr/Kidhurshan/Student-Attendance-Management-System)
  
  <p>Made with ❤️ for educational institutions worldwide</p>
</div>
