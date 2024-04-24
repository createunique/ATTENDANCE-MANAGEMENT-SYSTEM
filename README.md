# Student Attendance System

This project implements a student attendance system. It includes features for login, registration, taking attendance, and modifying previous attendance records.

## Working Mechanism

The Attendance System operates on a mechanism that includes:

- **User Authentication:** Users must log in using valid credentials (email and password) to access the dashboard securely.
- **Dashboard:** The user dashboard (`index.php`) displays attendance details for different sections and provides options to toggle attendance and save changes.
- **Login and Registration:** The system includes login (`login.php`) and registration (`registration.php`) forms for user authentication and account creation, respectively.

## Files & Components

- `index.php`: User dashboard with attendance management functionality.
- `login.php`: Login form for user authentication.
- `registration.php`: Registration form for new user account creation.
- `update_attendance.php`: PHP script to update attendance records in the database.

## Technologies & Features Used

The Attendance System leverages various technologies and features:

### Frontend
- **HTML, CSS, JavaScript:** Front-end technologies for creating a responsive and visually appealing user interface.
- **Bootstrap:** Bootstrap is a front-end framework for building responsive and visually appealing websites and web applications using HTML, CSS, and JavaScript.

### Backend
- **PHP:** Server-side scripting language for dynamic content generation and database interaction.
- **MySQL:** Relational database management system for storing and querying student and attendance records.

### Libraries
- **jQuery:**  jQuery is a JavaScript library for simplifying frontend interactions and manipulation of HTML documents.
- **Sessions:** User authentication and session management to control access to dashboard features based on login status.
- **Password Hashing:** Secure storage and verification of user passwords using bcrypt hashing algorithm, ensuring data privacy and security.

The user interface of the Attendance System prioritizes simplicity, functionality, and responsiveness:

- **Responsive Layout:** Built with Bootstrap for seamless adaptation to different screen sizes and devices.
- **Clear Presentation:** Attendance details are presented clearly and organized, facilitating easy understanding and navigation.
- **Intuitive Controls:** Buttons allow users to toggle attendance and save changes with ease, streamlining the attendance management process.
- **Attendance Management:** Users can toggle attendance status for each student and save changes seamlessly without page reload.
- **Update Attendance:** A feature is available to modify previous attendance records, enhancing flexibility in attendance management.

## Additional Features

- **Attendance Modification:** Users can modify previous attendance records, ensuring accuracy and reliability in attendance data.
- **Section-wise Attendance:** The system allows for managing attendance separately for different sections, enabling efficient tracking and management.
- **User Authentication:** Secure login mechanism ensures that only authorized users can access attendance records and management features.

## Future Enhancements

- **Advanced Reporting:** Implement advanced reporting features to generate attendance reports and analytics for better insights into student attendance patterns.
- **Automated Notifications:** Integrate automated email or SMS notifications for attendance-related events such as absentees or low attendance.
- **Integration with Student Management System:** Integrate with existing student management systems to streamline data flow and improve data accuracy.
- **Face Attendance Feature:** Incorporate face recognition technology for efficient and secure attendance tracking, enhancing user experience and ensuring accuracy.


## Installation

1. Clone the repository:

```
git clone https://github.com/createunique/INDTUBE_VIDEO_SHARING.git
```

2. Import the database schema from `database.sql` into your MySQL database.

3. Update `includes/database.php` with your MySQL database credentials.

4. **Update SMTP Details in `reset_password.php`:**

   If you are using SMTP for sending password reset emails, you need to update the SMTP details in `reset_password.php` file:

   ```php
   // Replace the following SMTP details with your own SMTP configuration
   $mail->Host       = 'smtp.gmail.com';                  // Set the SMTP server to send through
   $mail->SMTPAuth   = true;                              // Enable SMTP authentication
   $mail->Username   = 'YOUR_GMAIL';                       // SMTP username
   $mail->Password   = 'GMAIL_PASSWORD';                   // SMTP password
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        // Enable implicit TLS encryption
   $mail->Port       = 465;                                // TCP port to connect to

   $mail->setFrom('YOUR_GMAIL', 'INDTUBE');
   ```
   Replace 'YOUR_GMAIL' with your Gmail address and 'GMAIL_PASSWORD' with your Gmail password. Update other SMTP details like Host, Port, and any other authentication settings according to your SMTP server configuration.

## Usage

### Using Composer (recommended)
1. Install PHP and Composer on your server.

2. Create a new project:

```
composer create-project username/repository_name
```

3. Set up your web server to point to the public directory.

4. Install PHPMailer using Composer:

```
composer require phpmailer/phpmailer
```

5. Access the admin panel in your web browser.

### Manual Download
1. Download the repository as a ZIP file and extract it.

2. Upload the extracted files to your web server.

3. Download PHPMailer from [GitHub](https://github.com/PHPMailer/PHPMailer) as a ZIP file.

4. Extract the contents of the PHPMailer ZIP file.

5. Copy the `PHPMailer` directory to your project directory.

6. Now you should have a directory structure like this in your project:

```
your-project-directory/
├── PHPMailer/
│ ├── src/
│ └── ...
├── includes/
│ ├── database.php
│ └── ...
└── ...
```

7. Access the admin panel in your web browser.

## Contributing

Feel free to contribute to this project by submitting pull requests or reporting issues. Your feedback is highly appreciated.

## License

This project is licensed under the MIT License - see the `LICENSE` file for details.

---

Please replace `your-username` and `your-repository` with your actual GitHub username and repository name respectively. Also, make sure to replace the MySQL database credentials with your actual credentials in `includes/database.php`.
