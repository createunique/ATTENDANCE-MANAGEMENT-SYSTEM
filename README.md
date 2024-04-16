# Student Attendance System

## Overview
The Attendance System project aims to simplify the process of managing student attendance for different sections within an educational institution. It provides a user-friendly interface for viewing and updating attendance records, enhancing efficiency and accuracy in attendance management.

## How to Use
1. **Cloning the Repository:** Start by cloning the project repository to your local machine using Git. This step ensures that you have access to all project files and resources locally.
2. **Setting up Local Web Server Environment:** To run the project, you need a local web server environment with PHP and MySQL installed. Tools like XAMPP, WAMP, or MAMP provide pre-configured environments and are easy to set up.
3. **Importing the Database:** After setting up the local server, import the provided SQL database file (`database.sql`) into your MySQL database. This file contains the necessary tables and data structures for storing student and attendance records.
4. **Configuring Database Credentials:** Open the `database.php` and `update_attendance.php` files and update the database connection credentials to match your local environment. This step ensures that the PHP scripts can connect to your MySQL database successfully.
5. **Starting the Local Server:** Start your local server environment and navigate to the project directory using your web browser. Ensure that the project files are accessible via the server's URL.
6. **Accessing the System:** Once the server is running, access the Attendance System through your web browser by entering the appropriate URL. You should be directed to the login page, where you can authenticate yourself to access the user dashboard.

## Working Mechanism
The Attendance System operates on a simple yet effective mechanism:
- **User Authentication:** Users must log in using valid credentials (email and password) to access the dashboard. This ensures secure access to attendance records and prevents unauthorized access.
- **Dashboard:** The user dashboard (`index.php`) serves as the main interface for managing attendance. It displays attendance details for different sections and provides options to toggle attendance and save changes.
- **Login and Registration:** The system includes login (`login.php`) and registration (`registration.php`) forms for user authentication and account creation, respectively. New users can register for an account, while existing users can log in to access the dashboard.

## Files & Components
- `index.php`: User dashboard with attendance management functionality.
- `login.php`: Login form for user authentication.
- `registration.php`: Registration form for new user account creation.
- `update_attendance.php`: PHP script to update attendance records in the database.

## Technologies & Features Used
The Attendance System leverages a variety of technologies and features to deliver its functionality:
- **PHP:** Server-side scripting language for dynamic content generation and database interaction.
- **MySQL:** Relational database management system for storing and querying student and attendance records.
- **HTML/CSS/Bootstrap:** Front-end technologies for creating a responsive and visually appealing user interface.
- **JavaScript:** Client-side scripting for implementing interactive features such as toggling attendance without page reload.
- **AJAX:** Asynchronous requests to update attendance records without refreshing the entire page, enhancing user experience.
- **Sessions:** User authentication and session management to control access to dashboard features based on login status.
- **Password Hashing:** Secure storage and verification of user passwords using bcrypt hashing algorithm, ensuring data privacy and security.

## User Interface
The user interface of the Attendance System prioritizes simplicity, functionality, and responsiveness:
- **Responsive Layout:** Built with Bootstrap, the interface adapts seamlessly to different screen sizes and devices, ensuring a consistent user experience.
- **Clear Presentation:** Attendance details for each section are presented in a clear and organized manner, facilitating easy understanding and navigation.
- **Intuitive Controls:** Intuitive buttons allow users to toggle attendance and save changes with ease, streamlining the attendance management process.
